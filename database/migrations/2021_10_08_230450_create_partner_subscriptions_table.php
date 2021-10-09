<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnerSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partner_subscriptions', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('company_id')->unsigned();

            $table->bigInteger('subscription_planzz_id')->unsigned();

            $table->bigInteger('user_id')->unsigned();

            $table->string('status')->default('active');

            $table->date('expiry_date')->nullable();

            $table->foreign('company_id')->references('id')->on('users');

            $table->foreign('subscription_planzz_id')->references('id')->on('subscription_planzzs');

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
        Schema::dropIfExists('partner_subscriptions');
    }
}
