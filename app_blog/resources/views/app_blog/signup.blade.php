@extends('app_blog.layout.structure')
@section('main_container')
  
  <!-- signup section start -->
      <div class="contact_section layout_padding">
         <div class="container">
		   <div class="heading_container"><br>
           <h2>
          Signup Page
           </h2>
           </div>
            <div class="row">
               <div class="col-md-6">
			   <div class="form_container">
                  <form action="{{url('/signup')}}" method="post" enctype="multipart/form-data">
		   @csrf
                <div class="control-group">
				<label><b> Name: </b></label>
                    <input type="text" class="form-control" name="name" value="{{ old('name')}}" placeholder="Your Name" >
					@error('name')
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror
                    <p class="help-block text-danger"></p>
                </div>
			    
                <div class="control-group">
				<label><b> Email: </b></label>
                    <input type="email" class="form-control" name="email" value="{{ old('email')}}" placeholder="Your Email" >
					@error('email')
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror
                    <p class="help-block text-danger"></p>
                </div>
				
				<div class="control-group">
				<label><b> Password: </b></label>
                    <input type="password" class="form-control" name="password" value="{{ old('password')}}" placeholder="Your Password" >
					@error('password')
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror
                    <p class="help-block text-danger"></p>
                </div>
                
                <div class="control-group">
				<label><b> Contact no: </b></label>
                    <input type="number" class="form-control" name="contact_no" value="{{ old('contact_no')}}" placeholder="Your Contact No" >
                    @error('contact_no')
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					<p class="help-block text-danger"></p>
                </div>
			    
			    <div class="control-group">
				<label><b> Gender: </b></label>
                    Male:<input type="radio" name="gender" value="Male" checked>
				    Female:<input type="radio" name="gender" value="Female">
                </div>
				
			    <div class="control-group">
                <label for="exampleInputName1"><b>Image Upload</b></label>
                <input type="file" name="file" class="form-control" >
                    @error('file')
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror
				</div>			
                <div><br>
				<a href="login"> If You Already Register Then Click Login</a><br><br>
                <button class="btn btn-primary py-2 px-5" type="submit" name="submit" value="Signup" id="sendMessageButton">Signup</button>								
                </div>
        </form>
               </div>
            </div>
         </div>
      </div>
      <!-- signup section end -->
     
    @endsection 