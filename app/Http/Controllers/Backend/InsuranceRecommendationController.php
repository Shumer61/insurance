<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InsuranceRecommendation;
use App\Models\Contact;
use App\Models\Benefit;
use App\Models\Exclusion;
use App\Models\Period;
use App\Models\Hospital;
use App\Models\UserDetail;
use App\Models\User;

use Image;
use Carbon\Carbon;


class InsuranceRecommendationController extends Controller
{

public function Index(){

    $inquiries = UserDetail::where('full_name', '!=', NULL)->get();

    $comparisons = UserDetail::all();
    
    $users = User::all();

    $messages = Contact::all();

    $packages = InsuranceRecommendation::all();


    return view('admin.index',compact('inquiries','packages','messages','comparisons'));

  }

  //Gets all the Insurance Packages from DB
    public function PackageView(){

		$packages = InsuranceRecommendation::latest()->get();
		return view('admin.package.package_view',compact('packages'));
	}

//Gets Add Package Page
	public function AddPackage(){
		
		return view('admin.package.package_add');

	}

//Stores Package details to DB
	public function StorePackage(Request $request){

    
        $image = $request->file('image');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

    	Image::make($image)->resize(917,1000)->save('images/logos/'.$name_gen);
    	$save_url = 'images/logos/'.$name_gen;

    	$package_id = InsuranceRecommendation::insertGetId([
      	'insurance_company' => $request->insurance_company,
      	'coverage_type' => $request->coverage_type,
      	'age' => $request->age,
        'pre_exists' => $request->pre_exists,
      	'amount_range' => $request->amount_range,
      	'exact_price' => $request->exact_price,
      	'package_name' => $request->package_name,
      	'package_desc' => $request->package_desc,
      	'image' => $save_url,


      ]);

       $notification = array(
			'message' => 'Package Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('package.view')->with($notification);


	} // end method

// Displays the Edit Details of Chosen Package
	public function EditPackage($id){

		$package = InsuranceRecommendation::findOrFail($id);


		return view('admin.package.package_edit',compact('package'));

	}

//Action for Updating a Package
	public function PackageUpdate(Request $request){

		$package_id = $request->id;

        InsuranceRecommendation::findOrFail($package_id)->update([

        'insurance_company' => $request->insurance_company,
      	'coverage_type' => $request->coverage_type,
      	'age' => $request->age,
        'pre_exists' => $request->pre_exists,
      	'amount_range' => $request->amount_range,
      	'exact_price' => $request->exact_price,
      	'package_name' => $request->package_name,
      	'package_desc' => $request->package_desc,
		
		'updated_at' => Carbon::now(),

         ]);

         $notification = array(
			'message' => 'Package Updated Without Image Successfully',
			'alert-type' => 'success'
		);

         return redirect()->route('package.view')->with($notification);
	}

//Updating the Logo Image for a package
	public function LogoImageUpdate(Request $request){
 	$pro_id = $request->id;
 	$oldImage = $request->old_img;
 	unlink($oldImage);

    $image = $request->file('image');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(917,1000)->save('images/logos/'.$name_gen);
    	$save_url = 'images/logos/'.$name_gen;

    	InsuranceRecommendation::findOrFail($pro_id)->update([
    		'image' => $save_url,
    		'updated_at' => Carbon::now(),

    	]);

         $notification = array(
			'message' => 'Package Image Logo Updated Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

     } // end method

// Action for deleting a Package
  public function PackageDelete($id){
      $package = InsuranceRecommendation::findOrFail($id);
      unlink($package->image);
      InsuranceRecommendation::findOrFail($id)->delete();

      
      $notification = array(
      'message' => 'Package Deleted Successfully',
      'alert-type' => 'success'
    );

      
    return redirect()->back()->with($notification);

     }// end method 





// Action for viewing all messages from DB
  public function ContactView(){

    $contacts = Contact::latest()->get();
    return view('admin.contact.contact_view',compact('contacts'));
  }

// Displays the edit page for a messsage
  public function EditContact($id){

    $contact = Contact::findOrFail($id);


    return view('admin.contact.contact_edit',compact('contact'));

  }

// Update a message from Unreplied to Replied
  public function ContactUpdate(Request $request){

    $contact_id = $request->id;

        Contact::findOrFail($contact_id)->update([
        'status' => $request->status,
        'updated_at' => Carbon::now(),
         ]);

         $notification = array(
      'message' => 'Message Updated Successfully',
      'alert-type' => 'success'
    );

         return redirect()->route('contact.view')->with($notification);
  }

//Delete a message
  public function ContactDelete($id){


      $contact = Contact::findOrFail($id);

      Contact::findOrFail($id)->delete();

      
      $notification = array(
      'message' => 'Message Deleted Successfully',
      'alert-type' => 'success'
    );

      return redirect()->back()->with($notification);
    }



public function AddBenefitPackage(){


    $packages = InsuranceRecommendation::latest()->get();
    


    return view('admin.benefits.add_benefits',compact('packages'));

  }

public function AddBenefits(Request $request){

    $package_id =Benefit::insertGetId([

                'package_id' => $request->package_id,
                'benefit1' => $request->benefit1,
                'limit1' => $request->limit1,

                'benefit2' => $request->benefit2,
                'limit2' => $request->limit2,

                'benefit3' => $request->benefit3,
                'limit3' => $request->limit3,

                'benefit4' => $request->benefit4,
                'limit4' => $request->limit4,

                'benefit5' => $request->benefit5,
                'limit5' => $request->limit5,

                'benefit6' => $request->benefit6,
                'limit6' => $request->limit6,

                'benefit7' => $request->benefit7,
                'limit7' => $request->limit7,
                
            
                'updated_at' => Carbon::now(),

         ]);

         $notification = array(
      'message' => 'Package Updated Without Image Successfully',
      'alert-type' => 'success'
    );

         return redirect()->route('package.view')->with($notification);
  }

public function AddExclusionsToPackage(){


    $packages = InsuranceRecommendation::latest()->get();
    


    return view('admin.exclusions.add_exclusions',compact('packages'));

  }

public function StoreExclusionsToPackage(Request $request){

    $package_id =Exclusion::insertGetId([

                'package_id' => $request->package_id,
                
                'exclusion1' => $request->exclusion1,
                'exclusion2' => $request->exclusion2,
                'exclusion3' => $request->exclusion3,
                'exclusion4' => $request->exclusion4,
                'exclusion5' => $request->exclusion5,
                'exclusion6' => $request->exclusion6,
                'exclusion7' => $request->exclusion7,
                'exclusion8' => $request->exclusion8,
                
            
                'updated_at' => Carbon::now(),

         ]);

         $notification = array(
      'message' => 'Package Updated  Successfully',
      'alert-type' => 'success'
    );

         return redirect()->route('package.view')->with($notification);
  }

public function AddPeriodsToPackage(){


    $packages = InsuranceRecommendation::latest()->get();
    


    return view('admin.periods.add_periods',compact('packages'));

  }

public function StorePeriodsToPackage(Request $request){

    $package_id =Period::insertGetId([

                'package_id' => $request->package_id,
                
                'period1' => $request->period1,
                'period2' => $request->period2,
                'period3' => $request->period3,
                'period4' => $request->period4,
                'period5' => $request->period5,
                'period6' => $request->period6,
                'period7' => $request->period7,
                'period8' => $request->period8,

                'condition1' => $request->condition1,
                'condition2' => $request->condition2,
                'condition3' => $request->condition3,
                'condition4' => $request->condition4,
                'condition5' => $request->condition5,
                
            
                'updated_at' => Carbon::now(),

         ]);

         $notification = array(
      'message' => 'Package Updated Successfully',
      'alert-type' => 'success'
    );

         return redirect()->route('package.view')->with($notification);
  }


public function AddHospitalsToPackage(){


    $packages = InsuranceRecommendation::latest()->get();
    


    return view('admin.hospital.add_hospital',compact('packages'));

  }

public function StoreHospitalsToPackage(Request $request){

    $package_id =Hospital::insertGetId([

                'package_id' => $request->package_id,
                
                'hospital1' => $request->hospital1,
                'hospital2' => $request->hospital2,
                'hospital3' => $request->hospital3,
                'hospital4' => $request->hospital4,
                'hospital5' => $request->hospital5,
                'hospital6' => $request->hospital6,
                'hospital7' => $request->hospital7,
                'hospital8' => $request->hospital8,
                
            
                'updated_at' => Carbon::now(),

         ]);

         $notification = array(
      'message' => 'Package Updated  Successfully',
      'alert-type' => 'success'
    );

         return redirect()->route('package.view')->with($notification);
  }

//Gets all the Insurance Packages from DB
    public function UserDetailView(){

        $inquiries = UserDetail::where('full_name', '!=', NULL)->get();

        return view('admin.user_details.view_inquiries',compact('inquiries'));
    }


}
