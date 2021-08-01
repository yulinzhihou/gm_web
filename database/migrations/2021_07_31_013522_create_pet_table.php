<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('')->comment('名称');
            $table->integer('class')->default('0')->comment('类型');
            $table->integer('catch_level')->default('0')->comment('可携带等级');
            $table->integer('group')->default('0')->comment('阵营');
            $table->integer('is_varition')->default('0')->comment('是否变异');
            $table->string('is_baby')->default('')->comment('是否宝宝');
            $table->integer('food_type')->default('0')->comment('食物类');
            $table->string('skill_study')->default('')->comment('所能学的技能数');
            $table->integer('positive_skill_one')->default('0')->comment('主动技能1');
            $table->integer('positive_skill_one_percent')->default('0')->comment('主动技能1生成几率（1/100w）');
            $table->integer('positive_skill_two')->default('0')->comment('主动技能2');
            $table->integer('positive_skill_two_percent')->default('0')->comment('主动技能2生成几率（1/100w）');
            $table->integer('negative_skill_one')->default('0')->comment('被动技能1');
            $table->integer('negative_skill_one_percent')->default('0')->comment('被动技能1生成几率（1/100W）');
            $table->integer('negative_skill_two')->default('0')->comment('被动技能2');
            $table->integer('negative_skill_two_percent')->default('0')->comment('被动技能2生成几率（1/100W）');
            $table->integer('negative_skill_three')->default('0')->comment('被动技能3');
            $table->integer('negative_skill_three_percent')->default('0')->comment('被动技能3生成几率（1/100W）');
            $table->integer('negative_skill_four')->default('0')->comment('被动技能4');
            $table->integer('negative_skill_four_percent')->default('0')->comment('被动技能4生成几率（1/100W）');
            $table->integer('negative_skill_five')->default('0')->comment('被动技能5');
            $table->integer('negative_skill_five_percent')->default('0')->comment('被动技能5生成几率（1/100W）');
            $table->integer('negative_skill_six')->default('0')->comment('被动技能6');
            $table->integer('negative_skill_six_percent')->default('0')->comment('被动技能6生成几率（1/100W）');
            $table->integer('negative_skill_seven')->default('0')->comment('被动技能7');
            $table->integer('negative_skill_seven_percent')->default('0')->comment('被动技能7生成几率（1/100W）');
            $table->integer('negative_skill_eight')->default('0')->comment('被动技能8');
            $table->integer('negative_skill_eight_percent')->default('0')->comment('被动技能8生成几率（1/100W）');
            $table->integer('negative_skill_nine')->default('0')->comment('被动技能9');
            $table->integer('negative_skill_nine_percent')->default('0')->comment('被动技能9生成几率（1/100W）');
            $table->integer('negative_skill_ten')->default('0')->comment('被动技能10');
            $table->integer('negative_skill_ten_percent')->default('0')->comment('被动技能10生成几率（1/100W）');
            $table->integer('basic_hp')->default('0')->comment('标准寿命');
            $table->integer('basic_str')->default('0')->comment('标准力量资质');
            $table->integer('basic_con')->default('0')->comment('标准体质资质');
            $table->integer('basic_spr')->default('0')->comment('标准灵气资质');
            $table->integer('basic_dex')->default('0')->comment('标准身法资质');
            $table->integer('basic_com')->default('0')->comment('标准定力资质');
            $table->integer('grow_rate_one')->default('0')->comment('成长率1');
            $table->integer('grow_rate_two')->default('0')->comment('成长率2');
            $table->integer('grow_rate_three')->default('0')->comment('成长率3');
            $table->integer('grow_rate_four')->default('0')->comment('成长率4');
            $table->integer('grow_rate_five')->default('0')->comment('成长率5');
            $table->integer('timid')->default('0')->comment('胆小(1/1000)');
            $table->integer('cautious')->default('0')->comment('谨慎(1/1000)');
            $table->integer('loyal')->default('0')->comment('忠诚(1/1000)');
            $table->integer('shrewd')->default('0')->comment('精明(1/1000)');
            $table->integer('bravery')->default('0')->comment('勇猛(1/1000)');
            $table->integer('breeding_time')->default('0')->comment('繁殖时间（毫秒）');
            $table->integer('same_type')->default('0')->comment('同类参考珍兽类型');
            $table->integer('extra_one')->default('0')->comment('额外1');
            $table->integer('extra_two')->default('0')->comment('额外2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pet');
    }
}
