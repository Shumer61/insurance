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
							  <h3 class="box-title">User Inquiry List <span class="badge badge-pill badge-danger"> {{ count($inquiries) }} </span></h3>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<div class="table-responsive">
								  <table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>Inquiry ID </th>
											<th>Name</th>
											<th>Email </th>
											<th>Phone</th>
											<th> Coverage Type Inquired About</th>
											
											
											 
										</tr>
									</thead>
										<tbody>
										 @foreach($inquiries as $item)
										 <tr>
											
											<td>{{ $item->id }}</td>
											 <td>{{ $item->full_name }}</td>
											 <td>{{ $item->email }}</td>

											 <td>{{ $item->phone }}</td>

											 <td> {{ $item->coverage_type}}</td>


											
																 
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