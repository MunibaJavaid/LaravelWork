<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->bigIncrements('emp_id');
            $table->string('emp_fn', 20);
            $table->string('emp_email', 20);
            $table->string('emp_mobile', 20);
            $table->string('emp_city', 20);
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('employee');
    }
}
