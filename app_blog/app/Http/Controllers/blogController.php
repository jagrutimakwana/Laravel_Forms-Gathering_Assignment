<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

use Hash;
use Session;

use Alert;

class blogController extends Controller
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
        return view('app_blog/blog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new blog;
		$data->title=$request->title;
		$data->content=$request->content;
		
		$data->save();
		Alert::success('Congrats', 'You\'ve Successfully Add Blog');
		return redirect('/viewblog');
    }

    /**
     * Display the specified resource.
     */
    public function show(blog $blog)
    {
        $data=blog::all();
		return view('app_blog/viewblog',['data_blog'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(blog $blog,$id)
    {
        $data=blog::find($id);
		return view('app_blog/editblog',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, blog $blog,$id)
    {
        $data=blog::find($id);
		$data->title=$request->title;
		$data->content=$request->content;
		
		$data->update();
		Alert::success('Congrats', 'You\'ve Successfully Updated');
		return redirect('/viewblog');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blog $blog,$id)
    {
        // get id data img
		$data=blog::find($id);   //get only one data in string
		$filename=$data->file;
		
		// data delete with unlink image
		blog::find($id)->delete();
		if($filename!="")
		{
			unlink('upload/customer/'.$filename);
		}
		Alert::success('Congrats', 'You\'ve Successfully Deleted');
        return redirect()->back();
    }
}
