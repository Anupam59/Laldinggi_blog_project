<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_sco', function (Blueprint $table) {
            $table->bigIncrements('news_sco_id');
            $table->bigInteger('news_id');
            $table->string('news_sco_title',300)->nullable();
            $table->string('news_sco_description',400)->nullable();
            $table->string('news_sco_keyword',300)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_sco');
    }
};
