<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainFunctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_functions', function (Blueprint $table) {
            $table->increments('id');
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
        Schema::drop('main_functions');
    }
}
