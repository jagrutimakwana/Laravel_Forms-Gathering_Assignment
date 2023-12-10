<?php

namespace App\Http\Controllers;

use App\Models\employee;

use Illuminate\Http\Request;

use session;
use Hash;
use Alert;

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function emp_login()
    {
        return view('employee/emp_login');
    }
	
	function login_auth(Request $request)
    {
        $data=employee::where('emp_name','=',$request->emp_name)->first();
		if($data)
		{
			if(Hash::check($request->emp_password,$data->emp_password))
			{
				// session create
				session()->put('id',$data->id);
				session()->put('emp_name',$data->emp_name);
				
				// use session => session('name') / // session()->get('name')
				
				Alert::success('Congrats', 'You\'ve Successfully Login');
				return redirect('emp_dashboard');
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
		session()->pull('firstname');
		Alert::success('Congrats', 'You\'ve Successfully Logout');
		return redirect('emp_login');
		
    }
	
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(employee $employee)
    {
        //
    }
}
