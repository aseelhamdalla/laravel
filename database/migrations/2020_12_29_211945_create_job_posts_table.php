<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_posts', function (Blueprint $table) {
            $table->bigIncrements('job_id');
            $table->bigInteger('profile_id');
            $table->bigInteger('account_id');
            $table->bigInteger('job_cat_id');
            $table->text('job_desc');
            $table->string('job_city');
            $table->string('street_address');
            $table->enum('job_is_active', ['true','false']);
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
        Schema::dropIfExists('job_posts');
    }
}
