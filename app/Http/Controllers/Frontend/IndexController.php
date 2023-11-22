<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InsuranceRecommendation;
use App\Models\UserDetail;
use App\Models\Contact;
use App\Models\Benefit;
use App\Models\Exclusion;
use App\Models\Period;
use App\Models\Hospital;

class IndexController extends Controller
{
	//For querying the results and storing user's details
    public function GetRecommendations(Request $request){

    	$recommendations = InsuranceRecommendation::where('coverage_type', $request->coverage)
	    ->where('age', $request->age)
	    ->where('amount_range', $request->amount)
	    ->where('pre_exists', $request->pre_exists)
	    ->get();


	    $user_detail_id = UserDetail::insertGetId([
	  	'full_name' => $request->full_name,
	  	'email' => $request->email,
	  	'phone' => $request->phone,
	  	'coverage_type' => $request->coverage,

	  	
	  ]);


    	return view('frontend.recommendations', compact('recommendations'));

    }

    // Shows the Contact Page
    public function ContactPage(){

    	
    	return view('frontend.contact');

    }

    // Stores message
	public function StoreContact(Request $request){

		$contact_id = Contact::insertGetId([
	  	'first_name' => $request->first_name,
	  	'second_name' => $request->second_name,
	  	'email' => $request->email,
	  	'message' => $request->message,
	  ]);

	   $notification = array(
			'message' => 'Package Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('contact.page')->with($notification);


	} 


	public function MoreDetailsPage($id){

    $benefits = Benefit::where('package_id',$id)->first();
    $exclusions = Exclusion::where('package_id',$id)->first();
    $periods = Period::where('package_id',$id)->first();
    $hospitals = Hospital::where('package_id',$id)->first();

    $package = InsuranceRecommendation::findOrFail($id);


    return view('frontend.more_details',compact('benefits','package','periods','exclusions','hospitals'));

  }

    
}
