<?php
namespace App\Admin\Controllers\Api;

use App\Models\Char;
use Dcat\Admin\Http\Controllers\AdminController;

class ApiController extends AdminController
{
    public function chars()
    {
        return Char::all();
    }
}
