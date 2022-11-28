<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_tbl', function (Blueprint $table) {
            $table->bigIncrements('emp_id');
            $table->string('emp_name',20);
            $table->string('emp_email')->unique();
            $table->string('emp_mobile',20);
            $table->string('emp_city',20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emp_tbl');
    }
}
