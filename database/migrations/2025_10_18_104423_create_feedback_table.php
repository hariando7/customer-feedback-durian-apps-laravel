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
            $table->string('email')->nullable();
            $table->string('no_wa')->nullable();
            $table->integer('alkoholik')->default(0);
            $table->integer('mengkal')->default(0);
            $table->integer('tidak_masak')->default(0);
            $table->integer('jumlah_juring')->default(0);
            $table->integer('kemanisan')->default(0);
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
