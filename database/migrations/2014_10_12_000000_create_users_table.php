<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('date_of_birth')->nullable();
            $table->enum('gender', ['female', 'male']);
            $table->enum('is_active',  ['true', 'false']);
            $table->bigInteger('number')->nullable();
            $table->enum('email_active',['true', 'false'] );
            $table->text('image')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->enum('role',['seeker', 'recruiter','admin']);
            $table->rememberToken();
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
