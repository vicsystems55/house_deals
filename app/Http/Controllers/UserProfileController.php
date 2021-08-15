<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\UserProfile;
use App\CompanyProfile;

class UserProfileController extends Controller
{
    //

    public function update_bank_details(Request $request)
    {
        # code...

        $user_id = Auth::user()->id;

        try {
            //code...
            $data = [
                "type" => "nuban",
                "name" => $request->account_name,
                "description" => "Arkflix Affiliate",
                "account_number" => $request->account_number,
                
                "bank_code" => $request->bank_code,
                "currency" => "NGN"
            ];
    
            $createRecipient = Paystack::createRecipient($data);

           


            $bank_details = UserProfile::create([
                'user_id' => $user_id,
                'account_name' => $request->account_name,
                'account_number' => $request->account_number,
                'bank_code' => $request->bank_code,
            ]);

            // dd($bank_details);

            return back()->with('update_bank_details_msg', 'Bank details registered');

        } catch (\Throwable $th) {
            //throw $th;

            return back()->with('update_bank_details_msg', 'Could  not register bank details');
        }


    }

    public function update_email(Request $request)
    {
        # code...

        $email = User::create($request->all());

        dd($email);


    }

    public function profile_incomplete()
    {
        
        
        return view('profile_incomplete');
    }

    public function update_profile(Request $request)
    {
        # code...

        $request->validate([
            'name' => 'required',
            'managing_director_name' => 'required',
            'business_name' => 'required',
            'cac_no' => 'required',
            'business_address' => 'required',
            'business_website' => 'required',
            'business_email' => 'required',
            'contact_person' => 'required',
           
            // 'amount' => 'required|numeric|min:99700|between:0,99.99',
            // 'number_of_accounts' => 'required|numeric|min:1|max:15',
            // 'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            
        ]);




        return back()->with('update_profile_msg', 'Profile Update successful!!');


    }

    
}
