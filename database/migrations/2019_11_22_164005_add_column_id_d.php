<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnIdD extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('travaille', function (Blueprint $table) {
            $table->unsignedBigInteger('idD') ; 
            $table->foreign('idD')->references('id')->on('doctors') ;
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('travaille', function (Blueprint $table) {
            $table->dropForeign(['idD']) ; 
            //
        });
    }
}
