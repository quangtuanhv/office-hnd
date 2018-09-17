<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Profile;
use App\Position;
use App\Suite;
use Hash;

class UserController extends Controller
{
    public function postRegister(Request $request){
        
        $validatedData = $request->validate([
			'name'     => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6',
            'passwordConfirm' => 'required|same:password',
            'firstName' => 'required',
            'lastName' => 'required',
            'position' => 'required',
            'suite' => 'required',
            ]);
           
		if ($validatedData) {
			$user           = new User;
			$user->name     = $request->name;
            $user->password = bcrypt($request->password);
            $user->status   = 1;
            $user->save();
            $profile        = new Profile;
            $profile->first_name = $request->firstName;
            $profile->last_name = $request->lastName;
            $profile->email = $request->email;
            $profile->phone = $request->phone;
            $profile->avatar = $request->avatar;
            $profile->address = $request->address;
            $profile->gender = $request->gender;
            $profile->user_id = $user->id;
            $profile->position_id = $request->position;
            $profile->suite_id = $request->suite;
            $profile->save();
			return redirect('/login')->with('notification', 'Tạo tài khoản thành công đăng nhập với tài khoản vừa tạo');
		}
    }
    public function postLogin(Request $request){
        $data=[
            'name' => $request->name,
            'password' => $request->password,
        ];
        $remember = false;
        if($request->rememberMe==1){
            $remember = true;
        }
        if(Auth::attempt($data, $remember)){
           
            return redirect('/');
        }
        else{
        return redirect('/login')->with('err', 'Có lỗi ! Vui lòng nhập lại ');
        }
    }
    public function logout() {
		Auth::logout();
		return redirect('/');
    }
    
    public function showProfile(){
        $profile = Profile::where('user_id',Auth::id())->first();
        return view('user.profile', compact('profile'));
    }
    public function updateProfile(Request $request){
        $validatedData = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            ]);
        $profile = Profile::where('user_id',Auth::id())->first();
        $profile->first_name = $request->firstName;
        $profile->last_name = $request->lastName;
        $profile->email = $request->email;
        $profile->phone = $request->phone;
        $profile->avatar = $request->avatar;
        $profile->address = $request->address;
        $profile->save();
        return redirect()->back();
    }
    public function changePassword(Request $request){
        $user = Auth::user();
        $oldpw= $user->password;
       
        $validatedData = $request->validate([
            'newPass' => 'required|string|min:6',
            'newPasswordConfirm' => 'required|same:newPass',
            ]);
           
            if (Hash::check($request->oldPass, $oldpw) && $validatedData) {   
                $user->password = Hash::make($request->newPass);
                $user->save();
                return redirect('/')->with('changePassDone', ' ');
            }
            else
        return redirect()->back()->with('changePassErr', ' ');          
    }


    public function getRegister(){
        $cv = Position::all();
        $dv = Suite::all();
        return view('user.register',compact('cv','dv'));
    }
}
