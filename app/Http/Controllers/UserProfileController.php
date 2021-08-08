<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
