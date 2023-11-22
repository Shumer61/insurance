@extends('admin.admin_master')
@section('admin')


  <!-- Content Wrapper. Contains page content -->
  
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 

		<!-- Main content -->
			<section class="content">
			  	<div class="row">
					<div class="col-12">

						 <div class="box">
							<div class="box-header with-border">
							  <h3 class="box-title">Messages List <span class="badge badge-pill badge-danger"> {{ count($contacts) }} </span></h3>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<div class="table-responsive">
								  <table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>First Name </th>
											<th>Second  Name</th>
											<th>Email </th>
											<th>Message</th>
											<th> Feedback</th>
											<th>Actions</th>
											 
										</tr>
									</thead>
										<tbody>
										 @foreach($contacts as $item)
										 <tr>
											<td> {{ $item->first_name }}</td>
											<td>{{ $item->second_name }}</td>
											 <td>{{ $item->email }}</td>
											 <td>{{ $item->message }}</td>

											 <td>{{ $item->status }}</td>

											 


											<td width="30%">
												 
												 <a href="{{ route('contact.edit',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>

												 <a href="{{ route('contact.delete',$item->id) }}" class="btn btn-danger" title="Delete Data" >
												 	<i class="fa fa-trash"></i></a>
											</td>
																 
										 </tr>
										  @endforeach
										</tbody>
							 
						  			</table>
								</div>
							</div>
						<!-- /.box-body -->
				  		</div>
				  <!-- /.box -->

				          
					</div>
				<!-- /.col -->

	 
	 


			  </div>
			  <!-- /.row -->
			</section>
		<!-- /.content -->
	  
	  </div>
  



@endsection