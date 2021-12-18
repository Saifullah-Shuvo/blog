<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscribe;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function index(){
        $subscribers = Subscribe::latest()->get();
        return view('admin.subscriber',compact('subscribers'));
    }
    public function destroy($subscriber){
        $subscriber = Subscribe::findorFail($subscriber)->delete();
        Toastr::success('Subscriber successfullly deleted','Success');
        return redirect()->back();
    }
}
