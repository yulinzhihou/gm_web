<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Gem extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'gem';
    public $timestamps = false;
    protected $fillable = [
        'id','class','quality','type','index','icon','rule','name','desc','price','sale_price','hp_max_value','hp_max_percent',
        'hp_back_value','mp_max_value','mp_max_percent','mp_back_value','cold_att','cold_def','cold_keep_time','fire_att','fire_def',
        'fire_keep_time','light_att','light_def','light_keep_time','postion_att','postion_def','postion_keep_time','def_all_percent',
        'phy_attack','phy_attack_percent','add_phy_attack_percent','phy_def','phy_def_percent','add_phy_def_percent','miss_phy_def_percent',
        'mag_attack','mag_attack_percent','add_mag_attack_percent','mag_def','mag_def_percent','add_mag_def_percent','miss_mag_def_percent',
        'attach_speed','mag_cold_time','hit','miss','critical_att','ignore_percent','move_percent','attack_back','attach_cost','str','spr',
        'con','com','dex','critical_def','qian_neng','hp_sto','mp_sto','add_skill_lv','add_all_skill_lv','spe_skill_rate','Resist_cold_def',
        'Resist_fire_def','Resist_light_def','Resist_postion_def','basic_phy_attack','basic_mag_attack','basic_phy_def','basic_mag_def',
        'basic_hit','basic_miss','color','desc_type','special_id','color_code','is_boradcast'
    ];

}
