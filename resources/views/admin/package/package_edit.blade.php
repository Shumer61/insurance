@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		  

		<!-- Main content -->
		<section class="content">
 
		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Update Package </h4>
			   
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

  <form method="post" action="{{ route('package-update') }}" enctype="multipart/form-data" >
		 	@csrf
		 	<input type="hidden" name="id" value="{{ $package->id }}">
	<div class="row">
	<div class="col-12">	
		<div class="row"> <!-- start 1st row  -->
			<div class="col-md-4">

				<div class="form-group">
					<h5>Insurance Company <span class="text-danger">*</span></h5>
						<div class="controls">
							<input type="text" name="insurance_company" class="form-control" required="" value="{{ $package->insurance_company }}">
						     @error('insurance_company') 
							 <span class="text-danger">{{ $message }}</span>
							 @enderror
				 	  	</div>
				</div>
				
			</div> <!-- end col md 4 -->
		<div class="col-md-4">

			<div class="form-group">
				<h5>Coverage Type <span class="text-danger">*</span></h5>
					<div class="controls">
						<select name="coverage_type" class="form-control" required="" >
							<option value="{{ $package->coverage_type }}" >{{ $package->coverage_type }}</option>
							<option value="individual" >Individual</option>
							<option value="corporate" >Corporate</option>
							<option value="family" >Family</option>
						</select>
					     @error('coverage_type') 
						 <span class="text-danger">{{ $message }}</span>
						 @enderror
				 	</div>
			</div>
		</div> <!-- end col md 4 -->


		<div class="col-md-4">
				<div class="form-group">
					<h5>Age <span class="text-danger">*</span></h5>
						<div class="controls">
							<select name="age" class="form-control" required="" >
								<option value="{{ $package->age }}" >{{ $package->age }}</option>
								<option value="under18" >under 18</option>
								<option value="18to30" >18 to 30</option>
								<option value="31to50" >31 to 50</option>
								<option value="above50" >Above 50</option>
							</select>
						     @error('age') 
							 <span class="text-danger">{{ $message }}</span>
							 @enderror
					 	</div>
				</div>
				
		</div> <!-- end col md 4 -->
	</div>
</div>


<div class="col-12">
<div class="row"> <!-- start 2nd row  -->
		<div class="col-md-4">

			<div class="form-group">
				<h5>Amount Range <span class="text-danger">*</span></h5>
					<div class="controls">
						<select name="amount_range" class="form-control" required="" >
							<option value="{{ $package->amount_range }}" >{{ $package->amount_range }}</option>
							<option value="low" >Low</option>
							<option value="medium" >Medium</option>
							<option value="high" >High</option>
						</select>
					     @error('amount_range') 
						 <span class="text-danger">{{ $message }}</span>
						 @enderror
				 	</div>
			</div>
				
		</div> <!-- end col md 4 -->

		<div class="col-md-4">

			<div class="form-group">
				<h5>Package Exact Price <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="text" name="exact_price" class="form-control" required="" value="{{ $package->exact_price }}">
					     @error('exact_price') 
						 <span class="text-danger">{{ $message }}</span>
						 @enderror
			 	  	</div>
			</div>
				
		</div> <!-- end col md 4 -->


		<div class="col-md-4">

			<div class="form-group">
				<h5>Package Name <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="text" name="package_name" class="form-control" required="" value="{{ $package->package_name }}">
					     @error('package_name') 
						 <span class="text-danger">{{ $message }}</span>
						 @enderror
			 	  	</div>
			</div>
				
		</div> <!-- end col md 4 -->
			
</div> <!-- end 2nd row  -->	 	
</div>
<div class="col-12">
<div class="row"> 
	<div class="col-md-4">

			<div class="form-group">
				<h5>Pre Existing Condition <span class="text-danger">*</span></h5>
					<div class="controls">
						<select name="pre_exists" class="form-control" required="" >
							<option value="{{ $package->pre_exists }}" >{{ $package->pre_exists }}</option>
							<option value="Yes" >Yes</option>
							<option value="No" >No</option>
							
						</select>
					     @error('pre_exists') 
						 <span class="text-danger">{{ $message }}</span>
						 @enderror
				 	</div>
			</div>
				
		</div> <!-- end col md 4 -->

		</div>
	</div>

		 
<div class="col-12">		 
<div class="row"> <!-- start 8th row  -->
	<div class="col-md-12">

	    <div class="form-group">
			<h5>Package Description  <span class="text-danger">*</span></h5>
				<div class="controls">
					<textarea id="editor1" name="package_desc" rows="10" cols="80" required="" value= "{{ $package->package_desc }}">
						
					</textarea>  
	 		 	</div>
		</div>
				
	</div> <!-- end col md 6 -->
			
</div> <!-- end 8th row  -->
</div>

	 
	



						 
						<div class="text-xs-right">
<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update Package">
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->


 <section class="content">
 	<div class="row">

<div class="col-md-12">
				<div class="box bt-3 border-info">
				  <div class="box-header">
		 <h4 class="box-title">Package Logo Image <strong>Update</strong></h4>
				  </div>

			
		<form method="post" action="{{ route('update-package-logo') }}" enctype="multipart/form-data">
        @csrf

     <input type="hidden" name="id" value="{{ $package->id }}">
    <input type="hidden" name="old_img" value="{{ $package->image }}">

			<div class="row row-sm">
				 
				<div class="col-md-3">

<div class="card">
  <img src="{{ asset($package->image) }}" class="card-img-top" style="height: 130px; width: 280px;">
  <div class="card-body">
     
    <p class="card-text"> 
    	<div class="form-group">
    		<label class="form-control-label">Change Image <span class="tx-danger">*</span></label>
    <input type="file" name="image" class="form-control" onChange="mainThamUrl(this)"  >
     <img src="" id="mainThmb">
    	</div> 
    </p>
   
  </div>
</div> 		
				
				</div><!--  end col md 3		 -->	
				 

			</div>			

			<div class="text-xs-right">
<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update Image">
		 </div>
<br><br>



		</form>		   





				</div>
			  </div>
 

 		
 	</div> <!-- // end row  -->
 	
 </section>
	  </div>
 
 <script type="text/javascript">
      $(document).ready(function() {
        $('select[name="category_id"]').on('change', function(){
            var category_id = $(this).val();
            if(category_id) {
                $.ajax({
                    url: "{{  url('/category/subcategory/ajax') }}/"+category_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                    	$('select[name="subsubcategory_id"]').html('');
                       var d =$('select[name="subcategory_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name_en + '</option>');
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });



 $('select[name="subcategory_id"]').on('change', function(){
            var subcategory_id = $(this).val();
            if(subcategory_id) {
                $.ajax({
                    url: "{{  url('/category/sub-subcategory/ajax') }}/"+subcategory_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                       var d =$('select[name="subsubcategory_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="subsubcategory_id"]').append('<option value="'+ value.id +'">' + value.subsubcategory_name_en + '</option>');
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });
 

    });
    </script>


<script type="text/javascript">
	function mainThamUrl(input){
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#mainThmb').attr('src',e.target.result).width(80).height(80);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}	
</script>


<script>
 
  $(document).ready(function(){
   $('#multiImg').on('change', function(){ //on file input change
      if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
      {
          var data = $(this)[0].files; //this file data
           
          $.each(data, function(index, file){ //loop though each file
              if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                  var fRead = new FileReader(); //new filereader
                  fRead.onload = (function(file){ //trigger function on successful read
                  return function(e) {
                      var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(80)
                  .height(80); //create image element 
                      $('#preview_img').append(img); //append image to output element
                  };
                  })(file);
                  fRead.readAsDataURL(file); //URL representing the file's data.
              }
          });
           
      }else{
          alert("Your browser doesn't support File API!"); //if File API is absent
      }
   });
  });
   
  </script>




@endsection