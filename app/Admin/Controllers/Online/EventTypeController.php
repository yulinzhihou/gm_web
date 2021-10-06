<?php

namespace App\Admin\Controllers\Online;

use App\Admin\Repositories\EventType;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class EventTypeController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new EventType(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name')->filter(Grid\Column\Filter\Like::make());
            $grid->column('desc');
            $grid->column('param_num');
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new EventType(), function (Show $show) {
            $show->field('id');
            $show->field('name','事件描述');
            $show->field('desc','事件描述');
            $show->field('param_num','参数个数');
            $show->field('param_name_1','参数1名称');
            $show->field('param_name_2','参数2名称');
            $show->field('param_name_3','参数3名称');
            $show->field('param_name_4','参数4名称');
            $show->field('param_name_5','参数5名称');
            $show->field('param_name_6','参数6名称');
            $show->field('param_name_7','参数7名称');
            $show->field('param_name_8','参数8名称');
            $show->field('param_name_9','参数9名称');
            $show->field('param_name_10','参数10名称');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $option = [
            0 => '无参数',
            1 => '1个',
            2 => '2个',
            3 => '3个',
            4 => '4个',
            5 => '5个',
            6 => '6个',
            7 => '7个',
            8 => '8个',
            9 => '9个',
            10 => '10个'
        ];
        return Form::make(new EventType(), function (Form $form) use ($option) {
            $form->display('id');
            $form->text('name');
            $form->text('desc');
            $newForm = $form->select('param_num','参数个数');
            foreach ($option as $key => $value) {
                $newForm->when($key,function (Form $form) use ($key,$option) {
                    for ($i=1; $i <= $key;$i++) {
                        $form->text('参数'.$i.'名称：')->setElementName('param_name_'.$i);
                    }
                })->options(array_values($option));
            }
        });
    }
}
