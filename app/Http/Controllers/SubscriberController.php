<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[
            'email' => 'required|email|unique:subscribes',
        ]);
        $subscriber = new Subscribe();
        $subscriber->email = $request->email;
        $subscriber->save();
        Toastr::success('You have successfully added to our subscribers list :)','Success');
        return redirect()->back();
    }
}
