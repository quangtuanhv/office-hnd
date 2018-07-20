<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Validator;
use App\Event;
 
use Calendar;
 
class EventController extends Controller
{
    public function index(){
        
        $events = Event::where('user_id',Auth::id())->get();

    	$event_list = [];
    	foreach ($events as $key => $event) {
    		$event_list[] = Calendar::event(
                $event->event_name,
                false,// cài đặt cả ngày hay chỉ là giờ cụ thể true = cả ngày
                new \DateTime($event->start_date),
                new \DateTime($event->end_date),
                1, 
                [
                    'url' => '/personal-schedule/'.$event->id,
                ]
                
            );
    	}
    	$calendar_details = Calendar::addEvents($event_list); 
 
        return view('calendar.event', compact('calendar_details') );
    }
 
    public function addEvent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'event_name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);
 
        if ($validator->fails()) {
        	\Session::flash('warnning','Please enter the valid details');
            return Redirect::to('/events')->withInput()->withErrors($validator);
        }
 
        $event = new Event;
        $event->event_name = $request['event_name'];
        $event->start_date = $request['start_date'];
        $event->end_date = $request['end_date'];
        $event->user_id = Auth::id();
        $event->save();
 
        \Session::flash('success','Event added successfully.');
        return Redirect::to('/events');
    }
 
    public function showDetailEvent($id){
        $event = Event::where('id',$id)->first();
        return view('calendar.detailEvent',compact('event'));
    }
    public function deleteEvent($id){
        $event = Event::where('id',$id)->delete();
        return  redirect('/events');;
    }
 
}