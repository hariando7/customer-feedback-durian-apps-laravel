<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackTable extends Migration
{
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('panelist_name')->nullable();
            $table->integer('color')->default(0); 
            $table->integer('aroma')->default(0);
            $table->integer('texture_creamy')->default(0);
            $table->integer('texture_smooth')->default(0);
            $table->integer('sweet')->default(0);
            $table->integer('bitter')->default(0);
            $table->integer('alcohol')->default(0);
            $table->integer('total_score')->default(0);
            $table->text('note')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('feedback');
    }
}
