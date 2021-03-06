<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // 
            $table->id();
            $table->string("email")->unique();
            $table->string("nom");
            $table->string("password");
            $table->date("date_naissance")->nullable();
            // $table->biginteger("phone_number")->unique()->nullable();
            $table->biginteger("phone_number")->unique();
            $table->string("age")->nullable();
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
        Schema::dropIfExists('users');
    }
}
