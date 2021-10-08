<?php

namespace App\Http\Controllers;

use App\SubscriptionPlanzz;

use Illuminate\Http\Request;

class SubscriptionPlanzzController extends Controller
{

    public function create(Request $request)
    {

        $subscription = SubscriptionPlanzz::create($request->all());
        
        
        return $subscription;
    }

    public function get_subscriptions()
    {

        $subscriptions = SubscriptionPlanzz::latest()->get();
        
        
        return $subscriptions;
    }

    public function update_subscription(Request $request)
    {

        $subscription=SubscriptionPlanzz::find($id);

        $subscription->update($request->all());

        return $subscription;

    }

    public function delete_subscription(Request $request)
    {

        $subscription=SubscriptionPlanzz::find($id);

        $subscription->update();
        
        return $subscription;

    }

    public function subscription_details($subscription_id)
    {

        $subscription=SubscriptionPlanzz::find($subscription_id);

        
        return $subscription;

    }


}
