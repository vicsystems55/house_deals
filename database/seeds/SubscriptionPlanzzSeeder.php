<?php

use Illuminate\Database\Seeder;

use App\SubscriptionPlanzz;

class SubscriptionPlanzzSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('subscription_planzzs')->insertOrIgnore([
            [
                'name' => '',
                'description' => '',
                'amount' => '',
                'type' => '',
                'sub_type' => '',
            ],
        ]);
    }
}
