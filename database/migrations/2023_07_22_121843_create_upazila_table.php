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
        Schema::create('upazila', function (Blueprint $table) {
            $table->increments('upazila_id');
            $table->string('upazila_slug',80)->nullable();
            $table->tinyInteger('district_id');
            $table->tinyInteger('division_id')->nullable();
            $table->string('upazila_name',70)->nullable();
            $table->string('upazila_bn_name',70)->nullable();

            $table->tinyInteger('position')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->integer('creator')->nullable();
            $table->integer('modifier')->nullable();
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
        Schema::dropIfExists('upazila');
    }
};
