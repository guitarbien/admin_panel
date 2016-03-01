<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncBtnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('func_btns', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('main_id')->comment('main_functions.id');
            $table->integer('sub_id')->comment('sub_functions.id');
            $table->string('name');
            $table->integer('sort_no')->nullable()->comment('排序 使用asc');
            $table->string('status')->default('1')->comment('狀態:1啟用/0停用');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('func_btns');
    }
}
