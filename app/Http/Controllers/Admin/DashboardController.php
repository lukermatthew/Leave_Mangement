<?php

namespace App\Http\Controllers\Admin;

use App\Requestleave;
use App\Admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class DashboardController extends Controller
{
    //
    public function index(){

        
        $userCount = User::count();
        $requestleaveCount = Requestleave::count();
        $requestleaves = Requestleave::where('status',false)->latest()->get();
        return view('admin.dashboard',compact('requestleaves','requestleaveCount'));
    }
}
