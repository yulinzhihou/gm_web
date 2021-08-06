<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zone', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedTinyInteger('type')->default(0)->comment('数据库类型(0=web,1=tlbb)');
            $table->string('desc')->default('')->comment('数据库名称');
            $table->string('host')->default('127.0.0.1')->comment('数据库地址');
            $table->string('username')->default('root')->comment('用户名');
            $table->string('password')->default('123456')->comment('密码');
            $table->smallInteger('port')->default('3306')->comment('数据库端口');
            $table->string('dbname')->default('')->comment('库名');
            $table->unsignedTinyInteger('status')->default(0)->comment('状态');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zone');
    }
}
