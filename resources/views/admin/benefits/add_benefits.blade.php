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
			  <h4 class="box-title">Add Package Benefits </h4>
			   
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

			  <form method="post" action="{{ route('update-benefit-store') }}" enctype="multipart/form-data" >
					 	@csrf
				

				<div class="row">
					<div class="col-12">	
						<div class="row"> <!-- start 7th row  -->
						
							<div class="col-md-12">

								<div class="form-group">
										<h5>Package Select <span class="text-danger">*</span></h5>
										<div class="controls">
											<select name="package_id" class="form-control" required="" >
												<option value="" selected="" disabled="">Package Select</option>
												@foreach($packages as $package)
									 			<option value="{{ $package->id }}">{{ $package->package_name }}</option>	
												@endforeach
											</select>
												@error('package_id') 
											 <span class="text-danger">{{ $message }}</span>
											 @enderror 
											 </div>
								</div>
										
							</div> <!-- end col md 4 -->
							
						</div> <!-- end 7th row  -->					
					</div>
				</div>

				<div class="row">
					<div class="col-12">	
						<div class="row"> <!-- start 7th row  -->
							<div class="col-md-6">

							    <div class="form-group">
									<h5>Benefit 1<span class="text-danger">*</span></h5>
									<div class="controls">
									<textarea name="benefit1" id="textarea" class="form-control"  placeholder="Textarea text"></textarea>     
							 		 </div>
								</div>
								
							</div> <!-- end col md 6 -->

							<div class="col-md-6">

							    <div class="form-group">
									<h5>Limit <span class="text-danger">*</span></h5>
									<div class="controls">
									<textarea name="limit1" id="textarea" class="form-control"  placeholder="Textarea text"></textarea>     
							 		 </div>
								</div>
								 
								
							</div> <!-- end col md 6 -->		 
							
						</div> <!-- end 7th row  -->					
					</div>
				</div>

				<div class="row">
					<div class="col-12">	
						<div class="row"> <!-- start 7th row  -->
							<div class="col-md-6">

							    <div class="form-group">
									<h5>Benefit 2: <span class="text-danger">*</span></h5>
									<div class="controls">
									<textarea name="benefit2" id="textarea" class="form-control"  placeholder="Textarea text"></textarea>     
							 		 </div>
								</div>
								
							</div> <!-- end col md 6 -->

							<div class="col-md-6">

							    <div class="form-group">
									<h5>Limit 2:<span class="text-danger">*</span></h5>
									<div class="controls">
									<textarea name="limit2" id="textarea" class="form-control"  placeholder="Textarea text"></textarea>     
							 		 </div>
								</div>
								 
								
							</div> <!-- end col md 6 -->		 
							
						</div> <!-- end 7th row  -->					
					</div>
				</div>

				<div class="row">
					<div class="col-12">	
						<div class="row"> <!-- start 7th row  -->
							<div class="col-md-6">

							    <div class="form-group">
									<h5>Benefit 3:<span class="text-danger">*</span></h5>
									<div class="controls">
									<textarea name="benefit3" id="textarea" class="form-control"  placeholder="Textarea text"></textarea>     
							 		 </div>
								</div>
								
							</div> <!-- end col md 6 -->

							<div class="col-md-6">

							    <div class="form-group">
									<h5>Limit 3:<span class="text-danger">*</span></h5>
									<div class="controls">
									<textarea name="limit3" id="textarea" class="form-control"  placeholder="Textarea text"></textarea>     
							 		 </div>
								</div>
								 
								
							</div> <!-- end col md 6 -->		 
							
						</div> <!-- end 7th row  -->					
					</div>
				</div>
				<div class="row">
					<div class="col-12">	
						<div class="row"> <!-- start 7th row  -->
							<div class="col-md-6">

							    <div class="form-group">
									<h5>Benefit 4:<span class="text-danger">*</span></h5>
									<div class="controls">
									<textarea name="benefit4" id="textarea" class="form-control"  placeholder="Textarea text"></textarea>     
							 		 </div>
								</div>
								
							</div> <!-- end col md 6 -->

							<div class="col-md-6">

							    <div class="form-group">
									<h5>Limit 4<span class="text-danger">*</span></h5>
									<div class="controls">
									<textarea name="limit4" id="textarea" class="form-control"  placeholder="Textarea text"></textarea>     
							 		 </div>
								</div>
								 
								
							</div> <!-- end col md 6 -->		 
							
						</div> <!-- end 7th row  -->					
					</div>
				</div>
				<div class="row">
					<div class="col-12">	
						<div class="row"> <!-- start 7th row  -->
							<div class="col-md-6">

							    <div class="form-group">
									<h5>Benefit 5:<span class="text-danger">*</span></h5>
									<div class="controls">
									<textarea name="benefit5" id="textarea" class="form-control"  placeholder="Textarea text"></textarea>     
							 		 </div>
								</div>
								
							</div> <!-- end col md 6 -->

							<div class="col-md-6">

							    <div class="form-group">
									<h5>Limit 5:<span class="text-danger">*</span></h5>
									<div class="controls">
									<textarea name="limit5" id="textarea" class="form-control"  placeholder="Textarea text"></textarea>     
							 		 </div>
								</div>
								 
								
							</div> <!-- end col md 6 -->		 
							
						</div> <!-- end 7th row  -->					
					</div>
				</div>
				<div class="row">
					<div class="col-12">	
						<div class="row"> <!-- start 7th row  -->
							<div class="col-md-6">

							    <div class="form-group">
									<h5>Benefit 6:<span class="text-danger">*</span></h5>
									<div class="controls">
									<textarea name="benefit6" id="textarea" class="form-control"  placeholder="Textarea text"></textarea>     
							 		 </div>
								</div>
								
							</div> <!-- end col md 6 -->

							<div class="col-md-6">

							    <div class="form-group">
									<h5>Limit 6: <span class="text-danger">*</span></h5>
									<div class="controls">
									<textarea name="limit6" id="textarea" class="form-control"  placeholder="Textarea text"></textarea>     
							 		 </div>
								</div>
								 
								
							</div> <!-- end col md 6 -->		 
							
						</div> <!-- end 7th row  -->					
					</div>
				</div>
				<div class="row">
					<div class="col-12">	
						<div class="row"> <!-- start 7th row  -->
							<div class="col-md-6">

							    <div class="form-group">
									<h5>Benefit 7:<span class="text-danger">*</span></h5>
									<div class="controls">
									<textarea name="benefit7" id="textarea" class="form-control"  placeholder="Textarea text"></textarea>     
							 		 </div>
								</div>
								
							</div> <!-- end col md 6 -->

							<div class="col-md-6">

							    <div class="form-group">
									<h5>Limit 7:<span class="text-danger">*</span></h5>
									<div class="controls">
									<textarea name="limit7" id="textarea" class="form-control"  placeholder="Textarea text"></textarea>     
							 		 </div>
								</div>
								 
								
							</div> <!-- end col md 6 -->		 
							
						</div> <!-- end 7th row  -->					
					</div>
				</div>
				

					 
				<div class="text-xs-right">
					<input type="submit" class="btn btn-rounded btn-primary mb-5"  value="Update Benefits">
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