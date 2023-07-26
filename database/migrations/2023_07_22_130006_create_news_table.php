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
        Schema::create('news', function (Blueprint $table) {
            $table->increments('news_id');
            $table->string('news_head_title',400);
            $table->string('news_slug',400);
            $table->string('news_head_caption_tag',150)->nullable();
            $table->string('news_details_brief',500)->nullable();
            $table->longText('news_details')->nullable();

            $table->string('news_image',100)->nullable();
            $table->string('news_image_caption',300)->nullable();

            $table->string('news_vidos',300)->nullable();
            $table->string('news_vidos_caption',300)->nullable();

            $table->string('news_audio',100)->nullable();
            $table->string('news_audio_caption',300)->nullable();

            $table->string('news_source',300)->nullable();
            $table->string('news_source_link',300)->nullable();

            $table->string('news_area',100)->nullable();
            $table->string('news_zone',100)->nullable();

            $table->string('news_writer',300)->nullable();
            $table->string('news_reporter',300)->nullable();

            $table->tinyInteger('cat_id')->nullable();
            $table->tinyInteger('sub_cat_id')->nullable();
            $table->tinyInteger('sub_sub_cat_id')->nullable();

            $table->tinyInteger('news_page_id')->nullable();
            $table->tinyInteger('news_type_id')->nullable();

            $table->tinyInteger('news_status_id')->nullable();
            $table->tinyInteger('status')->default(1);

            $table->integer('approver')->nullable();
            $table->integer('creator');
            $table->integer('modifier');
            $table->timestamp('publish_date');
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
        Schema::dropIfExists('news');
    }
};
