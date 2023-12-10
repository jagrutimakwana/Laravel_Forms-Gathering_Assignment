@extends('app_blog.layout.structure')
@section('main_container')

   <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>View Blog</h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            View Blog
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
											<th>Title</th>
                                            <th>Content</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                       @if(!empty($data_blog))
                                           
                                            @foreach($data_blog as $d)
                                                <tr>
												
                                                    <td>{{$d->id}}</td>
													<td>{{$d->title}}</td>
													<td>{{$d->content}}</td>
                                                    
                                                      <td> 
													  
													  <a href="{{url('/editblog/'.$d->id)}}" class="btn btn-danger me-1">Edit</a>
                                                      <a href="{{url('/viewblog/'.$d->id)}}" class="btn btn-primary me-1">Delete</a>
														
                                                    </td>
                                                </tr>
                                                 @endforeach
												
												@else
													
												     <tr>
												         <td> DATA NO FOUND</td>
													</tr>
													@endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
            </div>
                <!-- /. ROW  -->
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
</body>

</html>

@endsection