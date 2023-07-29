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
            $table->string('upazila_slug',80)->unique();
            $table->tinyInteger('district_id');
            $table->tinyInteger('division_id');
            $table->string('upazila_name',70)->unique();
            $table->string('upazila_bn_name',70)->unique();

            $table->tinyInteger('position')->nullable();
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
        Schema::dropIfExists('upazila');
    }
};
