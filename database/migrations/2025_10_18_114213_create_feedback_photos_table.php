<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackPhotosTable extends Migration
{
    public function up()
    {
        Schema::create('feedback_photos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('feedback_id');
            $table->string('photo_path');
            $table->timestamps();

            $table->foreign('feedback_id')->references('id')->on('feedback')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('feedback_photos');
    }
}
