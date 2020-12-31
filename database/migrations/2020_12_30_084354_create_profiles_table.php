<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('profile_id');
            $table->bigInteger('account_id');
            $table->year('ex_start_date');
            $table->year('ex_end_date');
            $table->string('job_title');
            $table->string('company_name');
            $table->string('description');
            $table->bigInteger('current_salary');
            $table->string('cv_file')->nullable();
            $table->string('skill_name');
            $table->string('degree');
            $table->string('major');
            $table->string('university');
            $table->year('uni_starting_date');
            $table->year('uni_completion_date');
            $table->text('brief');
            $table->string('company_desc');
            $table->year('company_founding_date');
            $table->string('company_website_url');
            $table->text('company_logo');
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
        Schema::dropIfExists('profiles');
    }
}
