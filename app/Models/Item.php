<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'item';
    public $timestamps = false;

}
