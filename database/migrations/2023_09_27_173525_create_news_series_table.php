<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('news_series', function (Blueprint $table) {
            $table->increments('news_series_id');
            $table->string('news_series_title',100)->unique();
            $table->string('news_series_slug',100);
            $table->string('news_series_en_name',100);
            $table->string('news_series_bn_name',100);
            $table->string('news_series_en_desc',300)->nullable();
            $table->string('news_series_bn_desc',300)->nullable();

            $table->string('news_series_en_key',300)->nullable();
            $table->string('news_series_bn_key',300)->nullable();

            $table->tinyInteger('status')->default(1);
            $table->integer('creator');
            $table->integer('modifier');
            $table->timestamp('created_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('modified_date')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_series');
    }
};
