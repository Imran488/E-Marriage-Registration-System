<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_forms', function (Blueprint $table) {
            $table->id();
            //Husband Details
            $table->string('fullnameh')->default('');
            $table->string('religion')->default('');
            $table->string('date')->default('');
            $table->string('passportnumber')->default('');
            $table->string('imageh')->default('');
            $table->string('signatureh')->default('');
            $table->string('age')->default('');
            $table->string('txtroomh')->default('');
            $table->string('txtroadh')->default('');
            $table->string('district')->default('');
            $table->string('txtcityh')->default('');
            $table->string('txtpincodeh')->default('');
            //wife Details
            $table->string('fullnamew')->default('');
            $table->string('religionw')->default('');
            $table->string('datew')->default('');
            $table->string('passportnumberw')->default('');
            $table->string('imagew')->default('');
            $table->string('signaturew')->default('');
            $table->string('agew')->default('');
            $table->string('txtroomw')->default('');
            $table->string('txtroadw')->default('');
            $table->string('districtw')->default('');
            $table->string('txtcityw')->default('');
            $table->string('txtpincodew')->default('');
            //witness Details
            $table->string('witnessname1')->default('');
            $table->string('witnessaddress1')->default('');
            $table->string('witnessname2')->default('');
            $table->string('witnessaddress2')->default('');
            $table->string('witnessname3')->default('');
            $table->string('witnessaddress3')->default('');
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
        Schema::dropIfExists('registration_forms');
    }
}
