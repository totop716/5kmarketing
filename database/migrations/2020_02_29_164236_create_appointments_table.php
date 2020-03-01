<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status');
            $table->string('leadtype');
            $table->string('nameofclient');
            $table->date('appointmentdate');
            $table->time('appointmenttime');
            $table->string('citylocation');
            $table->integer('noofpolicysold');
            $table->string('companysold');
            $table->string('productsold');
            $table->string('monthlypremium');
            $table->boolean('additionalsale');
            $table->string('availablething');
            $table->boolean('talkretirement');
            $table->boolean('rebookatime');
            $table->text('twothingbetterdone');
            $table->string('howmanyreferral');
            $table->string('nosaleaddress1');
            $table->string('nosaleaddress2');
            $table->string('nosalecity');
            $table->string('nosalestate');
            $table->string('nosalezip');
            $table->text('whathappen');
            $table->boolean('wasrescheduled');
            $table->bigInteger('user_id');
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
        Schema::dropIfExists('appointments');
    }
}
