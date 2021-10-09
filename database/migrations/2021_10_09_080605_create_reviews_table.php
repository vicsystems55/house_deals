<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('user_id')->unsigned()->nullable();

            $table->bigInteger('company_id')->unsigned();

            $table->bigInteger('listing_id')->unsigned();

            $table->string('name');

            $table->string('email');

            $table->string('phone');

            $table->string('status')->default('active');

            $table->foreign('company_id')->references('id')->on('users');

            $table->foreign('user_id')->references('id')->on('users');

            $table->foreign('listing_id')->references('id')->on('listings');

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
        Schema::dropIfExists('reviews');
    }
}
