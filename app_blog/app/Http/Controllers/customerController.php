<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

use Hash;
use Session;
use Alert;


class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
	
	function login()
    {
        return view('app_blog/login');
    }
	
	
	function login_auth(Request $request)
    {
        $data=customer::where('email','=',$request->email)->first();
		if($data)
		{
			if(Hash::check($request->password,$data->password))
			{
				// session create
				session()->put('id',$data->id);
				session()->put('name',$data->name);
				
				// use session => session('name') / // session()->get('name')
				
				Alert::success('Congrats', 'You\'ve Successfully Login');
				return redirect('blog');
			}
			else
			{
				Alert::error('Failed', 'Wrong Password');
				return redirect()->back();
			}
		}
		else
		{
			    Alert::error('Failed', 'Wrong Email');
				return redirect()->back();
		}
    }
	
	
	function logout()
    {
        // session delete
		session()->pull('id');
		session()->pull('name');
		Alert::success('Congrats', 'You\'ve Successfully Logout');
		return redirect('login');
		
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('app_blog/signup');
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
		'password' => 'required|min:8|max:255',
		'contact_no' => 'required|digit|min:10|max:10',
		'gender' => 'required|in:male,female',
		'file' => 'required|image'
		]);**/
		
		
        $data=new customer;
		$data->name=$request->name;
		$data->email=$request->email;
		$data->password=Hash::make($request->password);
		$data->contact_no=$request->contact_no;
		$data->gender=$request->gender;
		
		//img upload
		$file=$request->file('file');
		$filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
		$file->move('upload/customer/',$filename);   // use move for move image in public/images
		$data->file=$filename;
		
		
		$data->save();
		Alert::success('Congrats', 'You\'ve Successfully Registered');
		return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(customer $customer)
    {
        //
    }
}
