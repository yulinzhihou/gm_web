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
//            $grid->column('created_at')->hide();
//            $grid->column('updated_at')->hide();

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
            $show->field('name');
            $show->field('desc');
            $show->field('param_num');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new EventType(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->text('desc');
            $form->text('param_num');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
