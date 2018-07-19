<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
class ContactController extends Controller
{
    public function showContact(){
        $contacts = Profile::all();
        return view('contact.contact',compact('contacts'));
    }
}
