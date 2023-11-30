<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDobrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dobras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('aluno_id');
            $table->string('subescapular');
            $table->string('tricipital');
            $table->string('peitoral');
            $table->string('axilar_media');
            $table->string('abdominal');
            $table->string('coxa');
            $table->string('supra_iliaca');
            $table->string('peso');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dobras');
    }
}