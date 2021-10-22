<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
        
            $table->string('status')->default('active');

            $table->string('listing_code');

            $table->string('property_name')->nullable();
            $table->string('location')->nullable();
            $table->string('google_map_url')->nullable();
            

            $table->double('price',15,2)->nullable();
            $table->integer('no_units')->unsigned()->default(1);
            $table->string('description')->nullable();
            $table->string('payment_plan')->nullable();

            $table->string('property_type')->nullable();
            $table->string('unit_area')->nullable();
            $table->string('total_area')->nullable();

            $table->integer('worth')->nullable();

            $table->integer('discount')->nullable();
            
            $table->boolean('published')->default(0);
            $table->boolean('approved')->default(0);
            $table->boolean('reserved')->default(0);

            $table->foreign('user_id')->references('id')->on('users');
               

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listings');
    }
}
