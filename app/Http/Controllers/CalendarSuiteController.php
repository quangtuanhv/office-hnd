<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Validator;
use App\Profile;
use App\CalendalSuite;
use Calendar;
class CalendarSuiteController extends Controller
{
    public function index(){
        
        $suiteId = Profile::where('user_id',Auth::id())->value('suite_id');
        $events = CalendalSuite::where('suite_id',$suiteId)->get();

    	$event_list = [];
    	foreach ($events as $key => $event) {
    		$event_list[] = Calendar::event(
                $event->event_name,
                false,// cài đặt cả ngày hay chỉ là giờ cụ thể true = cả ngày
                new \DateTime($event->start_date),
                new \DateTime($event->end_date),
                1, 
                [
                    'url' => '/calendar-suite/'.$event->id,
                ]
                
            );
    	}
    	$calendar_details = Calendar::addEvents($event_list); 
 
        return view('calendar.calendalSuite.event', compact('calendar_details') );
    }
 
    public function addEvent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'event_name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);
            
        if ($validator->fails()) {
        	\Session::flash('warnning','Vui lòng chi tiết hợp lệ');
            return Redirect::to('/events-suite')->withInput()->withErrors($validator);
        }
        $suiteId = Profile::where('user_id',Auth::id())->value('suite_id');
        $event = new CalendalSuite;
        $event->event_name = $request['event_name'];
        $event->start_date = $request['start_date'];
        $event->end_date   = $request['end_date'];
        $event->suite_id   = $suiteId;
        $event->user_id = Auth::id();
        $event->save();
 
        \Session::flash('success','Thêm lịch thành công.');
        return Redirect::to('/events-suite');
    }
 
    public function showDetailEvent($id){
        $event = CalendalSuite::where('id',$id)->first();
        return view('calendar.calendalSuite.detailEvent',compact('event'));
    }
    public function deleteEvent($id){
        $event = CalendalSuite::where('id',$id)->delete();
        return redirect('/events-suite');
    }
 
}
