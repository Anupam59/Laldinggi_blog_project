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
        Schema::create('sub_sub_category', function (Blueprint $table) {
            $table->increments('sub_sub_cat_id');
            $table->integer('cat_id');
            $table->integer('sub_cat_id');
            $table->string('sub_sub_cat_title',100)->unique();
            $table->string('sub_sub_cat_slug',100);
            $table->string('sub_sub_cat_en_name',100);
            $table->string('sub_sub_cat_bn_name',100);
            $table->string('sub_sub_cat_en_desc',300);
            $table->string('sub_sub_cat_bn_desc',300);

            $table->string('sub_sub_cat_en_key',300)->nullable();
            $table->string('sub_sub_cat_bn_key',300)->nullable();

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
        Schema::dropIfExists('sub_sub_category');
    }
};
