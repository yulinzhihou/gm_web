<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gem', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('class')->default(0)->comment('基本类型');
            $table->integer('quality')->default(0)->comment('品质');
            $table->integer('type')->default(0)->comment('类别');
            $table->integer('index')->default(0)->comment('宝石索引');
            $table->string('icon')->default('')->comment('图标');
            $table->integer('rule')->default(0)->comment('适应规则');
            $table->string('name')->default('')->comment('名称');
            $table->text('desc')->comment('说明');
            $table->integer('price')->default(0)->comment('基本价格');
            $table->integer('sale_price')->default(0)->comment('出售价格');
            $table->integer('hp_max_value')->default(0)->comment('增加hp的上限');
            $table->integer('hp_max_percent')->default(0)->comment('增加百分比hp上限');
            $table->integer('hp_back_value')->default(0)->comment('加快回复HP速度');
            $table->integer('mp_max_value')->default(0)->comment('增加mp的上限');
            $table->integer('mp_max_percent')->default(0)->comment('增加百分比mp上限');
            $table->integer('mp_back_value')->default(0)->comment('加快回复mp速度');
            $table->integer('cold_att')->default(0)->comment('冰攻');
            $table->integer('cold_def')->default(0)->comment('冰抗');
            $table->integer('cold_keep_time')->default(0)->comment('减少冰冻迟缓时间');
            $table->integer('fire_att')->default(0)->comment('火攻');
            $table->integer('fire_def')->default(0)->comment('火抗');
            $table->integer('fire_keep_time')->default(0)->comment('减少火烧持续时间');
            $table->integer('light_att')->default(0)->comment('玄攻');
            $table->integer('light_def')->default(0)->comment('玄抗');
            $table->integer('light_keep_time')->default(0)->comment('减少电击眩晕时间');
            $table->integer('postion_att')->default(0)->comment('毒攻');
            $table->integer('postion_def')->default(0)->comment('毒抗');
            $table->integer('postion_keep_time')->default(0)->comment('减少中毒时间');
            $table->integer('def_all_percent')->default(0)->comment('按百分比抵消所有属性攻击');
            $table->integer('phy_attack')->default(0)->comment('外攻攻击');
            $table->integer('phy_attack_percent')->default(0)->comment('外攻增加百分比攻击');
            $table->integer('add_phy_attack_percent')->default(0)->comment('对基础外攻增加百分比攻击');
            $table->integer('phy_def')->default(0)->comment('外攻防御');
            $table->integer('phy_def_percent')->default(0)->comment('外攻增加百分比防御');
            $table->integer('add_phy_def_percent')->default(0)->comment('对基础外攻增加百分比防御');
            $table->integer('miss_phy_def_percent')->default(0)->comment('按百分比抵消外攻伤害');
            $table->integer('mag_attack')->default(0)->comment('外攻攻击');
            $table->integer('mag_attack_percent')->default(0)->comment('内攻增加百分比攻击');
            $table->integer('add_mag_attack_percent')->default(0)->comment('对基础内攻增加百分比攻击');
            $table->integer('mag_def')->default(0)->comment('内攻防御');
            $table->integer('mag_def_percent')->default(0)->comment('内攻增加百分比防御');
            $table->integer('add_mag_def_percent')->default(0)->comment('对基础内攻增加百分比防御');
            $table->integer('miss_mag_def_percent')->default(0)->comment('按百分比抵消内攻伤害');
            $table->integer('attach_speed')->default(0)->comment('攻击速度');
            $table->integer('mag_cold_time')->default(0)->comment('魔法冷却速度');
            $table->integer('hit')->default(0)->comment('命中');
            $table->integer('miss')->default(0)->comment('闪避');
            $table->integer('critical_att')->default(0)->comment('会心攻击');
            $table->integer('ignore_percent')->default(0)->comment('无视对方防御比率');
            $table->integer('move_percent')->default(0)->comment('移动速度百分比');
            $table->integer('attack_back')->default(0)->comment('伤害反射');
            $table->integer('attach_cost')->default(0)->comment('伤害由内力抵消');
            $table->integer('str')->default(0)->comment('力量');
            $table->integer('spr')->default(0)->comment('灵气');
            $table->integer('con')->default(0)->comment('体力');
            $table->integer('com')->default(0)->comment('定力');
            $table->integer('dex')->default(0)->comment('身法');
            $table->integer('critical_def')->default(0)->comment('会心防御');
            $table->integer('qian_neng')->default(0)->comment('潜能');
            $table->integer('hp_sto')->default(0)->comment('生命偷取');
            $table->integer('mp_sto')->default(0)->comment('内力偷取');
            $table->integer('add_skill_lv')->default(0)->comment('增加某个技能等级');
            $table->integer('add_all_skill_lv')->default(0)->comment('增加所有技能等级');
            $table->integer('spe_skill_rate')->default(0)->comment('特殊技能发动概率');
            $table->integer('Resist_cold_def')->default(0)->comment('降低目标冰抵抗');
            $table->integer('Resist_fire_def')->default(0)->comment('降低目标火抵抗');
            $table->integer('Resist_light_def')->default(0)->comment('降低目标玄抵抗');
            $table->integer('Resist_postion_def')->default(0)->comment('降低目标毒抵抗');
            $table->integer('basic_phy_attack')->default(0)->comment('基础外攻');
            $table->integer('basic_mag_attack')->default(0)->comment('基础内攻');
            $table->integer('basic_phy_def')->default(0)->comment('基础外攻防御');
            $table->integer('basic_mag_def')->default(0)->comment('基础内攻防御');
            $table->integer('basic_hit')->default(0)->comment('基础命中');
            $table->integer('basic_miss')->default(0)->comment('基础闪避');
            $table->string('color')->default('')->comment('颜色值(R,G,B,A)');
            $table->string('desc_type')->default('')->comment('类型描述');
            $table->integer('special_id')->default(0)->comment('特效索引');
            $table->integer('color_code')->default(0)->comment('颜色');
            $table->integer('is_boradcast')->default(0)->comment('是否广播');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gem');
    }
}
