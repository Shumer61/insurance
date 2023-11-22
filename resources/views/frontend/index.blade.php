@extends('frontend.main_master')
@section('content')




<section class="med">
        <div class="med-text">
            <h1>MediAdvisorKe</h1>
            <p>MediAdvisorKe is your go-to source for medical health 
                insurance guidance in Kenya. We simplify the selection of 
                the right insurance coverage with comprehensive insights, easy policy 
                comparisons, and user-friendly resources. Whether you're an individual 
                or a business owner, we empower you to make informed decisions for a healthier 
                and more secure future.
             </p>
             <a href="#compare">Compare</a>
        </div>

        <div class="med-img">
            <img src="images\med1.png">
        </div>

</section>
 <!-- middle end -->
<!-- insurance -->
        <section class="card " id="insurance">
            <div class="card_container bd-container">
                <div class="card_glass">
                    <img src="images\med2.png" alt="" class="card_img">

                    <div class="card_data">
                        <h3 class="card_title">CIC Insurance</h3>
                        <p class="card_details">
                            CIC Medical Health Cover is a top healthcare insurer in Kenya,
                             offering comprehensive coverage, including preventive healthcare,
                              and an extensive network of healthcare providers, making them a trusted
                               choice for health insurance in the country.
                        </p>
                    </div>
                    <a href="#" class="card_button">Know more</a>
                </div>

                <div class="card_glass">
                    <img src="images\med3.png" alt="" class="card_img">

                    <div class="card_data">
                        <h3 class="card_title">AAR Insurance</h3>
                        <p class="card_details">AAR Medical Health Covers in Kenya provide comprehensive 
                            health insurance with a focus on accessibility and quality care, offering services 
                            such as hospitalization, outpatient care, and wellness programs through a broad network 
                            of providers.
                        </p>
                    </div>
                    <a href="#" class="card_button">Know more</a>
                </div>

                <div class="card_glass">
                    <img src="images\med4.png" alt="" class="card_img">

                    <div class="card_data">
                        <h3 class="card_title">APA Insurance</h3>
                        <p class="card_details">APA and AAR are leading health insurance providers in Kenya, 
                            offering comprehensive coverage and extensive healthcare networks for accessible and 
                            reliable medical services. 
                        </p>
                    </div>
                    <a href="#" class="card_button">Know more</a>
                </div>
            </div>
        </section>

<!-- insurance end -->

<!-- submit container -->

<section id="compare">
    <div class="container">
        
        
		 <form method="post" action="{{route('recommendations.get')}}" enctype="multipart/form-data">
			 	@csrf
            <section>
                <h2 class="form-title">Insurance Selection</h2>
                <div class="form-group">
                    <label class="age">Select Age Range:</label>
                    <select id="age" name="age">
                        <option value="under18">Under 18</option>
                        <option value="18to30">18 to 30</option>
                        <option value="31to50">31 to 50</option>
                        <option value="above50">Above 50</option>
                    </select>
                </div>
        
                <div class="form-group">
                    <label for="coverage">Select Coverage Type:</label>
                    <select id="coverage" name="coverage">
                        <option value="individual">Individual</option>
                        <option value="corporate">Corporate</option>
                        <option value="family">Family</option>
                    </select>

                </div>

                <div class="form-group">
                    <label for="pre_exists">Do you have any pre-existing conditions:</label>
                    <select id="coverage" name="pre_exists">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>

                </div>
        
                <div class="form-group">
                    <label for="amount">Select Amount Range:</label>
                    <select id="amount" name="amount">
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                    </select>
                </div>
            </section>

            <section>
                <h2 class="form-title">About You (Optional)</h2>
                <div class="form-group">
                    <label class="age">Full Names:</label>
                    <input style="width: 100%;" type="text" name="full_name" class="form-control" >
                </div>
        
                <div class="form-group">
                    <label for="coverage">Your Email Address:</label>
                    <input style="width: 100%;" type="email" name="email" class="form-control" >

                </div>

                <div class="form-group">
                    <label for="pre_exists">Your Phone Number:</label>
                    <input style="width: 100%;" type="phone" name="phone" class="form-control" >
                </div>
            </section>


     
            <button type="submit">Submit</button>
        
        </form>
    </div>
</section>
<!-- submit container end -->











@endsection