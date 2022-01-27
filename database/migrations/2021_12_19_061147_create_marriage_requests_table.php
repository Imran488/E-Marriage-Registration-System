<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarriageRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marriage_requests', function (Blueprint $table) {
            $table->id();
            // $table->integer('user_id');
            $table->string('marriagedate');
            $table->string('name');
            $table->string('nid');
            $table->string('date');
            $table->string('address');
            $table->string('email');
            $table->string('contactnumber');
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('marriage_requests');
    }
}
