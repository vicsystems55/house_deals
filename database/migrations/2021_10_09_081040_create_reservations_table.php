<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            
            $table->bigInteger('user_id')->unsigned();

            $table->bigInteger('listing_id')->unsigned();

            $table->string('reservation_code')->nullable();

            $table->string('reserver_name')->nullable();

            $table->string('reserver_email')->nullable();

            $table->string('reserver_phone')->nullable();

            $table->date('expiry_date')->nullable();

            $table->string('status')->default('active');

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
        Schema::dropIfExists('reservations');
    }
}
