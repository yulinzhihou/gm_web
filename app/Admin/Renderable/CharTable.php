<?php

namespace App\Admin\Renderable;

use Dcat\Admin\Grid;
use Dcat\Admin\Grid\LazyRenderable;
use App\Models\Char;

class CharTable extends LazyRenderable
{
    public function grid(): Grid
    {
        return Grid::make(new Char(), function (Grid $grid) {
            $grid->column('aid', 'ID')->sortable();
            $grid->column('accname');
            $grid->column('charname')->display(function ($charname) {
                $tmp = mb_convert_encoding($charname,'ISO-8859-1','UTF-8');
                return mb_convert_encoding($tmp,'UTF-8','gb18030');
            });;
            $grid->paginate(10);
            $grid->disableActions();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->like('accname')->width(4);
            });
        });
    }
}
