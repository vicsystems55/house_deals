<?php

use Illuminate\Database\Seeder;



class PropertyFeaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('property_features')->insertOrIgnore([

            [
                'name' => '24 hrs electricity',
             
            ],

            [
                'name' => 'Automated Gate Access
                ',
             
            ],

            [
                'name' => 'Home automation',
             
            ],

            [
                'name' => 'Internet Infrastructure',
             
            ],

            [
                'name' => 'Recreation and Sports',
             
            ],

            [
                'name' => 'Solar',
             
            ],


        ]);
    }
}
