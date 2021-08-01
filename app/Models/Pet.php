<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'pet';
    public $timestamps = false;
    protected $fillable = [
        'id','name','class','catch_level','group','is_varition','is_baby','food_type','skill_study',
        'positive_skill_one','positive_skill_one_percent','positive_skill_two','positive_skill_two_percent',
        'negative_skill_one','negative_skill_one_percent','negative_skill_two','negative_skill_two_percent',
        'negative_skill_three','negative_skill_three_percent','negative_skill_four','negative_skill_four_percent',
        'negative_skill_five','negative_skill_five_percent','negative_skill_six','negative_skill_six_percent','negative_skill_seven',
        'negative_skill_seven_percent','negative_skill_eight','negative_skill_eight_percent','negative_skill_nine',
        'negative_skill_nine_percent','negative_skill_ten','negative_skill_ten_percent','basic_hp','basic_str','basic_con',
        'basic_spr','basic_dex','basic_com','grow_rate_one','grow_rate_two','grow_rate_three','grow_rate_four','grow_rate_five',
        'timid','cautious','loyal','shrewd','bravery','breeding_time','same_type','extra_one','extra_two'
    ];

}
