<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('class')->default('3306')->comment('类别');
            $table->integer('quality')->default(0)->comment('品质');
            $table->integer('type')->default(0)->comment('类型');
            $table->integer('medindex')->default(0)->comment('物品索引');
            $table->string('icon')->default('')->comment('图标资源');
            $table->string('name')->default('')->comment('物品名称');
            $table->text('desc')->comment('物品描述');
            $table->integer('level')->default(0)->comment('等级');
            $table->integer('price')->default(0)->comment('价格');
            $table->integer('sale_price')->default(0)->comment('卖出价格');
            $table->integer('rule')->default(0)->comment('适应规则');
            $table->integer('num')->default(0)->comment('叠放数量');
            $table->integer('script_id')->default(0)->comment('脚本ID');
            $table->integer('skill_id')->default(0)->comment('技能ID');
            $table->integer('is_cost')->default(0)->comment('是否消耗');
            $table->integer('need_skill')->default(0)->comment('需求技能');
            $table->integer('need_skill_level')->default(0)->comment('需求技能等级');
            $table->integer('own_num')->default(0)->comment('最大持有量');
            $table->integer('obj_type')->default(0)->comment('选择对象类型');
            $table->string('type_desc')->default('')->comment('类型描述');
            $table->integer('quality_level')->default(0)->comment('档次等级');
            $table->integer('recipe_id')->default(0)->comment('配方ID');
            $table->integer('color')->default(0)->comment('颜色');
            $table->integer('subclass')->default(0)->comment('subclass');
            $table->integer('is_boardcast')->default(0)->comment('是否广播');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item');
    }
}
