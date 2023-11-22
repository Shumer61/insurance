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
							  <h3 class="box-title">Package List <span class="badge badge-pill badge-danger"> {{ count($packages) }} </span></h3>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<div class="table-responsive">
								  <table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>Image </th>
											<th>Insurance Company</th>
											<th>Coverage Type </th>
											<th>Age</th>
											<th> Exact Price</th>
											<th>Package Name </th>
											<th>Actions</th>
											 
										</tr>
									</thead>
										<tbody>
										 @foreach($packages as $item)
										 <tr>
											<td> <img src="{{ asset($item->image) }}" style="width: 60px; height: 50px;">  </td>
											<td>{{ $item->insurance_company }}</td>
											 <td>{{ $item->coverage_type }}</td>
											 <td>{{ $item->age }}</td>

											 <td>{{ $item->exact_price }}</td>

											 <td> {{ $item->package_name }}</td>


											<td width="30%">
												 
												 <a href="{{ route('package.edit',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>

												 <a href="{{ route('package.delete',$item->id) }}" class="btn btn-danger" title="Delete Data" >
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