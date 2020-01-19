<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTalkProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_talk_projects', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('full_name');
			$table->string('email');
			$table->string('phone');
			$table->string('company_name')->nullable();
			$table->string('message');
			$table->string('file')->nullable();
			$table->string('where_find_us')->nullable();
			$table->string('budget');
			$table->string('website_url')->nullable();
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
        Schema::dropIfExists('customer_talk_projects');
    }
}
