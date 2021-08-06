<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventlistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventlist', function (Blueprint $table) {
            $table->increments('id');
            $table->string('accname')->default('')->comment('账号');
            $table->string('charname')->default('')->comment('角色名');
            $table->string('event')->default('')->comment('事件标识');
            $table->string('event_note')->default('')->comment('事件说明');
            $table->unsignedTinyInteger('status')->default(0)->comment('执行状态');
            $table->unsignedInteger('request_time')->default(0)->comment('事件请求回执时间');
            $table->string('param1')->default('')->comment('参数1');
            $table->string('param2')->default('')->comment('参数2');
            $table->string('param3')->default('')->comment('参数3');
            $table->string('param4')->default('')->comment('参数4');
            $table->string('param5')->default('')->comment('参数5');
            $table->string('param6')->default('')->comment('参数6');
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
        Schema::dropIfExists('eventlist');
    }
}
