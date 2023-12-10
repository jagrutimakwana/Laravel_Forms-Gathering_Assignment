@extends('viewdata.layout.structure')
@section('main_container')

<br>

<div class="col-md-10">
<a href="signup">
<button class="btn btn-primary pull-right py-2 px-4" type="submit" name="submit" value="Signup" id="sendMessageButton">Add</button>
</a> 
 </div>

   <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Manage Customer</h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Customer
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
											<th>Name</th>
                                            <th>Email</th>
											<th>Contact_no</th>
											<th>Gender</th>
											<th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                       @if(!empty($data_customer))
                                           
                                            @foreach($data_customer as $d)
                                                <tr>
												
                                                    <td>{{$d->id}}</td>
													<td>{{$d->name}}</td>
													<td>{{$d->email}}</td>
													<td>{{$d->contact_no}}</td>
													<td>{{$d->gender}}</td>
													<td><img src="{{url('/upload/customer/'.$d->file)}}" width="50px"></td>
                                                    
                                                      <td> 
													  
													  <a href="{{url('/editdata/'.$d->id)}}" class="btn btn-danger me-1">Edit</a>
                                                      <a href="{{url('/view_cust/'.$d->id)}}" class="btn btn-primary me-1">Delete</a>
														
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