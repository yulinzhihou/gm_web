<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'item';
    public $timestamps = false;
    protected $fillable = [
        'id','class','quality','type','medindex','icon','name','desc',
        'level','price','sale_price','rule','num','script_id','skill_id',
        'is_cost','need_skill','need_skill_level','own_num','obj_type',
        'type_desc','quality_level','recipe_id','color','subclass','is_boardcast'
    ];

}
