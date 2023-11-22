@extends('admin.admin_master')
@section('admin')


<div class="container-full">

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">							
		<div class="icon bg-primary-light rounded w-60 h-60">
			<i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
		</div>
		<div>
			<p class="text-mute mt-20 mb-0 font-size-16">Packages</p>
			<br>
			<h3 class="text-white mb-0 font-weight-500">{{ count($packages) }} <small class="text-success"> </small></h3>
		</div>
	</div>
</div>
</div>
<div class="col-xl-3 col-6">
<div class="box overflow-hidden pull-up">
	<div class="box-body">							
		<div class="icon bg-warning-light rounded w-60 h-60">
			<i class="text-warning mr-0 font-size-24 mdi mdi-car"></i>
		</div>
		<div>
			<p class="text-mute mt-20 mb-0 font-size-16">Direct Message</p>
			<br>
			<h3 class="text-white mb-0 font-weight-500">{{ count($messages) }} <small class="text-success"> </small></h3>
		</div>
	</div>
</div>
</div>
<div class="col-xl-3 col-6">
<div class="box overflow-hidden pull-up">
	<div class="box-body">							
		<div class="icon bg-info-light rounded w-60 h-60">
			<i class="text-info mr-0 font-size-24 mdi mdi-sale"></i>
		</div>
		<div>
			<p class="text-mute mt-20 mb-0 font-size-16">All Comparisons                                            </p>
			
			<br>
			<h3 class="text-white mb-0 font-weight-500">{{ count($comparisons) }}<small class="text-danger"> </small></h3>
		</div>
	</div>
</div>
</div>
<div class="col-xl-3 col-6">
<div class="box overflow-hidden pull-up">
	<div class="box-body">							
		<div class="icon bg-danger-light rounded w-60 h-60">
			<i class="text-danger mr-0 font-size-24 mdi mdi-phone-incoming"></i>
		</div>
		<div>
			<p class="text-mute mt-20 mb-0 font-size-16">Comparisons with User Details </p>
			<h3 class="text-white mb-0 font-weight-500">{{ count($inquiries) }} <small class="text-danger"> </small></h3>
		</div>
	</div>
</div>
</div>
 
 


@endsection