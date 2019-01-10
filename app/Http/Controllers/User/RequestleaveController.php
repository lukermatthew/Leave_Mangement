<?php

namespace App\Http\Controllers\User;

use App\Requestleave;
use App\User;
use App\Type;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RequestleaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        
        $requestleaves = Auth::user()->requestleaves()->latest()->get();
        return view('user.index',compact('requestleaves'));
    }


    public function leaverequest(Request $request){
        
        $this->validate($request,[
            'type' => 'required',
            'description' => 'required',
            'startdate' => 'required',
            'enddate' => 'required'
        ]);
        $requestleave = new Requestleave();
        $requestleave->user_id = Auth::id();
        $requestleave->type_id = $request->type;
        $requestleave->description = $request->description;
        $requestleave->status = false;
        $requestleave->startdate = $request->startdate;
        $requestleave->enddate = $request->enddate;
        
        $requestleave->save();
        Toastr::success('Leave Request sent successfully .','Success',["positionClass" => "toast-top-right"]);
        return redirect()->back();

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $types = Type::all();
        return view('user.create',compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Requestleave  $requestleave
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Requestleave  $requestleave
     * @return \Illuminate\Http\Response
     */
    public function edit(Requestleave $requestleave)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Requestleave  $requestleave
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Requestleave $requestleave)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Requestleave  $requestleave
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requestleave $requestleave)
    {
        //
    }
}
