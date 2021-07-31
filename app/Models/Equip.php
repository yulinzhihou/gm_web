<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Equip extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'equip';
    public $timestamps = false;

}
