<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up()
    {
        Schema::create('pro_pic', function (Blueprint $table) {
            $table->bigIncrements('pic_id');
            $table->binary('pic_image');
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('pro_pic');
    }
};
