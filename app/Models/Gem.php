<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Gem extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'gem';
    public $timestamps = false;

}
