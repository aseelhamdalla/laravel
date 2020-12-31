<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruiters', function (Blueprint $table) {
            $table->bigIncrements('recruiter_id');
            $table->string('recruiter_email');
            $table->string('recruiter_password');
            $table->date('recruiter_date_of_birth');
            $table->enum('recruiter_gender', ['female', 'male']);
            $table->enum('recruiter_is_active',['true', 'false']);
            $table->bigInteger('recruiter_number');
            $table->enum('recruiter_email_active', ['true', 'false']);
            $table->text('recruiter_image');
            $table->string('recruiter_first_name');
            $table->string('recruiter_last_name');
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
        Schema::dropIfExists('recruiters');
    }
}
