<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
          $table->string('name');
            $table->string('lastName');
            $table->string('email');
            $table->string('dateNaiss');
            $table->string('numCNSS');
            $table->string('etat');
            $table->string('rendezVous');

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
        Schema::dropIfExists('patients');
    }
}
