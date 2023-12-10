<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Bloscot</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{url('app_blog/css/bootstrap.min.css')}}">
     
      <!-- Responsive-->
      <link rel="stylesheet" href="{{url('app_blog/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{url('app_blog/images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{url('app_blog/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="{{url('app_blog/css/owl.carousel.min.css')}}">
      <link rel="stylesoeet" href="{{url('app_blog/css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
   @include('sweetalert::alert')
      <!-- header section start -->
      <div class="header_section">
         <div class="container-fluid header_main">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="logo" href="index"><img src="{{url('app_blog/images/logo.png')}}"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     
                     <li class="nav-item">
                        <a class="nav-link" href="blog">Blog</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="login">Login</a>
                     </li>
					 
					 <li class="nav-item">
                        <a class="nav-link" href="logout">Logout</a>
                     </li>
					 
                     
                  </ul>
               </div>
            </nav>
         </div>
