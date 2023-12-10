@extends('viewdata.layout.structure')
@section('main_container')

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Mico</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{url('viewdata/css/bootstrap.css')}}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="{{url('viewdata/css/font-awesome.min.css')}}" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <!-- Custom styles for this template -->
  <link href="{{url('viewdata/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{url('viewdata/css/responsive.css')}}" rel="stylesheet" />

</head>

<body class="sub_page"><br>

  <div class="col-md-10">
  <a href="view_cust">
<button class="btn btn-primary pull-right py-2 px-4" type="submit" name="submit" value="Signup" id="sendMessageButton">Back</button>
 </a>
 </div>
 <!-- signup section -->
  <section class="layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Edit Data
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
           <form action="{{url('update/'.$data->id)}}" method="post" enctype="multipart/form-data">
		   @csrf
                <div class="control-group">
				<label><b> Name: </b></label>
                    <input type="text" class="form-control" name="name" value="{{$data->name}}" placeholder="Your Name" >
                    <p class="help-block text-danger"></p>
                </div>
			    
                <div class="control-group">
				<label><b> Email: </b></label>
                    <input type="email" class="form-control" name="email" value="{{$data->email}}" placeholder="Your Email" >
                    <p class="help-block text-danger"></p>
                </div>
			    
			    <div class="control-group">
				<label><b> Gender: </b></label>
                    Male:<input type="radio" name="gender" value="Male" <?php if($data->gen=="Male") { echo "checked";}?>>
				    Female:<input type="radio" name="gender" value="Female" <?php if($data->gen=="Female") { echo "checked";}?>>
                </div>
				
			    <div class="control-group">
                <label for="exampleInputName1"><b>Image Upload</b></label>
                <input type="file" name="file" class="form-control" >
				<img src="{{url('upload/customer/'.$data->file)}}" width="50px" alt="">
                </div>	<br>		
                <div>
				
                <input type="submit" name="submit" value="Save" class="btn btn-primary py-2 px-4" id="sendMessageButton">							
                </div>
        </form>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!-- end contact section -->

  


</body>

</html>

  @endsection