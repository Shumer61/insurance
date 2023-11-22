@extends('frontend.main_master')
@section('content')


<section class="med">
        <div class="med-text">
            <h1>Contact Us </h1>
            <p>MediAdvisorKe would love to hear from you. Kindly use the form below to contact us
             </p>
             <a href="#compare">Contact Us</a>
        </div>

        <div class="med-img">
            <img src="{{ asset('images/med2.png')}}">
        </div>

</section>
<section id="compare">
    <div class="container">
        <h2 class="form-title">Contact Form</h2>
        
		 <form method="post" action="{{route('contact.store')}}" enctype="multipart/form-data">
			 	@csrf
            <div class="form-group">
                <label class="age">First Name:</label>
                <input style="width: 100%; height: 5%" type="text" name="first_name" class="form-control" required="">
            </div>
    
            <div class="form-group">
                <label for="coverage">Second Name:</label>
                <input style="width: 100%; height: 5%" type="text" name="second_name" class="form-control" required="">

            </div>
    
            <div class="form-group">
                <label for="amount">Email:</label>
                <input style="width: 100%; height: 5%" type="email" name="email" class="form-control" required="">
            </div>

            <div class="form-group">
                <label for="amount">Message:</label>
                <input style="width: 100%; height: 5%" type="text" name="message" class="form-control" required="">
            </div>

     
            <button type="submit">Submit</button>
        
        </form>
    </div>
</section>
<!-- submit container end -->



@endsection