@extends('app_blog.layout.structure')
@section('main_container')
  
  <!-- signup section start -->
      <div class="contact_section layout_padding">
         <div class="container">
		   <div class="heading_container"><br>
           <h2>
         Edit Blog
           </h2>
           </div>
            <div class="row">
               <div class="col-md-6">
			   <div class="form_container">
                  <form action="{{url('update/'.$data->id)}}" method="post" enctype="multipart/form-data">
		          @csrf
                <div class="control-group">
				<label><b> title: </b></label>
                    <input type="text" class="form-control" name="title" value="{{ old('title')}}" placeholder="Enter title" >
					@error('title')
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror
                    <p class="help-block text-danger"></p>
                </div>
			    
                <div class="control-group">
				<label><b> Content: </b></label>
                    <textarea class="form-control" name="content" value="{{ old('content')}}" placeholder="Enter content"></textarea>
					@error('content')
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror
                    <p class="help-block text-danger"></p>
                </div>
				
				<div><br>
				
                <button class="btn btn-primary py-2 px-5" type="submit" name="submit" value="Save" id="sendMessageButton">Save</button>								
                </div>
        </form>
               </div>
            </div>
         </div>
      </div>
      <!-- signup section end -->
     
    @endsection 