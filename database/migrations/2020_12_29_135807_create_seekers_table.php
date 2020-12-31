<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeekersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seekers', function (Blueprint $table) {
            $table->bigIncrements('seeker_id');
            $table->string('seeker_email');
            $table->string('seeker_password');
            $table->date('seeker_date_of_birth');
            $table->enum('seeker_gender', ['female', 'male']);
            $table->enum('seeker_is_active',['true', 'false']);
            $table->bigInteger('seeker_number');
            $table->enum('seeker_email_active', ['true', 'false']);
            $table->text('seeker_image');
            $table->string('seeker_first_name');
            $table->string('seeker_last_name');
            $table->enum('role', ['seeker', 'recruiter']);
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
        Schema::dropIfExists('seekers');
    }
}
