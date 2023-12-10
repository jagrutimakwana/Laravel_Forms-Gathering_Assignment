@extends('app_blog.layout.structure')
@section('main_container')
  
  <!-- login section start -->
      <div class="contact_section layout_padding">
         <div class="container">
		   <div class="heading_container"><br>
           <h2>
          Login Page
           </h2>
           </div>
            <div class="row">
               <div class="col-md-6">
			   <div class="form_container">
                 <form action="{{url('/login_auth')}}" method="post">
                     @csrf      
                            <div class="control-group">
							<label><b>Email: </b></label>
                                <input type="email" class="form-control p-4" name="email" placeholder="Your Email" >
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
							<label><b>Password: </b></label>
                                <input type="password" class="form-control p-4" name="password" placeholder="Your Password" >
                                <p class="help-block text-danger"></p>
                            </div>
							<a href="signup">Not Register Click Here To Signup</a><br><br>
							<a class="forgot" href="#">Forgot Your Password?</a><br><br>
                            
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit" name="submit" id="sendMessageButton">Login</button>
                            </div>
                        </form>
               </div>
            </div>
         </div>
      </div>
      <!-- login section end -->
     
    @endsection 