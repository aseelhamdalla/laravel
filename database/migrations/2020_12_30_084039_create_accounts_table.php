<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->bigIncrements('account_id');
            $table->string('email');
            $table->string('password');
            $table->date('date_of_birth');
            $table->enum('gender', ['female', 'male']);
            $table->enum('is_active',  ['true', 'false']);
            $table->bigInteger('number');
            $table->enum('email_active',['true', 'false'] );
            $table->text('image');
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('role',['seeker', 'recruiter','admin']);
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
        Schema::dropIfExists('accounts');
    }
}
