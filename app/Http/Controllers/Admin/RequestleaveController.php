<?php

namespace App\Http\Controllers\Admin;
use App\Requestleave;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RequestleaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $requestleaves = Requestleave::all();
        return view('admin.requestleave.index',compact('requestleaves'));
    }

    public function pending(){

        $requestleaves = Requestleave::where('status',false)->latest()->get();
        return view('admin.requestleave.pending',compact('requestleaves','requestleaveCount'));

    }

    public function confirmed(){

        $requestleaves = Requestleave::where('status',true)->latest()->get();
        return view('admin.requestleave.confirmed',compact('requestleaves','requestleaveCount'));

    }

    public function status($id)
    {
        //
        $requestleave = Requestleave::find($id);
        $requestleave->status = 1;
        $requestleave->save();
        Toastr::success('Approved Successfully .','Success',["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function reject($id)
    {
        //
        $requestleave = Requestleave::find($id);
        $requestleave->status = 2;
        $requestleave->save();
        Toastr::error('Rejected Successfully .','Error',["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $requestleave = Requestleave::find($id);
        return view('admin.requestleave.show')->with('requestleave',$requestleave);

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'message'=>'required'
           
        ]);

        $requestleave = Requestleave::find($id);
        $requestleave->message = $request->message;
        $requestleave->save();
        return redirect()->back()->with('successMsg','Sent Message Successfully');
      

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    

    public function destroy($id){
        Requestleave::find($id)->delete();
        
        return redirect()->back();
    }


  















}
