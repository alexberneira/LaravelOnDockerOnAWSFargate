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
            $table->id();
            $table->string("firstname");
            $table->string("lastname");
            $table->string("maidenname");
            $table->integer("age");
            $table->enum('gender', ['male', 'female']);
            $table->string("email");
            $table->string("phone");
            $table->string("username");
            $table->string("password");
            $table->date("birthdate");
            $table->string("imagelink");
            $table->string("bloodgroup");
            $table->double("height");
            $table->double("weight");
            $table->string("eyecolor");
            $table->timestamp('created')->useCurrent();
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
