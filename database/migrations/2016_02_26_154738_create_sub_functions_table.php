<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubFunctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_functions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('main_id')->comment('main_functions.id');
            $table->string('name');
            $table->integer('sort_no')->nullable()->comment('排序 使用asc');
            $table->string('status')->default('1')->comment('狀態:1啟用/0停用');
            $table->timestamps();

            // $table->foreign('main_id')->references('id')->on('main_functions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sub_functions');
    }
}
