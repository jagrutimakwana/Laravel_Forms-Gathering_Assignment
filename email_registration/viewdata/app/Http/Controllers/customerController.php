<?php

namespace App\Http\Controllers;


use App\Models\customer;
use Illuminate\Http\Request;

use Hash;
use Session;

use Alert;

//load created mail file
use App\Mail\signupemail;
use Mail;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('viewdata/signup');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
		/**
		$validated = $request->validate([
		'name' => 'required|string|max:255',
		'email' => 'required|email',
		'contact_no' => 'required|digit|min:10|max:10',
		'file' => 'required|image'
		]);
		**/
		
		
        $data=new customer;
		$namemail=$data->name=$request->name;
		$email=$data->email=$request->email;
		$data->contact_no=$request->contact_no;
		$data->gender=$request->gender;
		
		//img upload
		$file=$request->file('file');
		$filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
		$file->move('upload/customer/',$filename);   // use move for move image in public/images
		$data->file=$filename;
		
		
		$data->save();
		
		$maildata=array("namemail"=>$namemail);
		
		Mail::to($email)->send(new signupemail($maildata));
		
		Alert::success('Congrats', 'You\'ve Successfully Registered');
		return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(customer $customer)
    {
        $data=customer::all();
		return view('viewdata/view_cust',['data_customer'=>$data]);
    }
	
	
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(customer $customer,$id)
    {
        
		$data=customer::find($id);
		return view('viewdata/editdata',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, customer $customer,$id)
    {
        $data=customer::find($id);
		$data->name=$request->name;
		$data->email=$request->email;
		$data->gender=$request->gender;
		
		
		//img upload
		if($request->hasFile('file'))
		{
			$old_img=$data->file;
			unlink('upload/customer/'.$old_img);
			
			
		    $file=$request->file('file');
		    $filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
		    $file->move('upload/customer/',$filename);   // use move for move image in public/images
		    $data->file=$filename;
		}
		
		$data->update();
		Alert::success('Congrats', 'You\'ve Successfully Updated');
		return redirect('/view_cust');
    }
	

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(customer $customer,$id)
    {
        // get id data img
		$data=customer::find($id);   //get only one data in string
		$filename=$data->file;
		
		// data delete with unlink image
		customer::find($id)->delete();
		if($filename!="")
		{
			unlink('upload/customer/'.$filename);
		}
		Alert::success('Congrats', 'You\'ve Successfully Deleted');
        return redirect()->back();
    }
}
