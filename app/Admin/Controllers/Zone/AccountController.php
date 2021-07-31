<?php

namespace App\Admin\Controllers\Zone;

use App\Admin\Repositories\Zone;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class AccountController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Zone(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('type')->using(['账号数据库','游戏数据库']);
            $grid->column('desc');
            $grid->column('host');
//            $grid->column('username');
//            $grid->column('password');
//            $grid->column('port');
            $grid->column('dbname')->using(['web'=>'web','tlbbdb'=>'tlbbdb']);
            $grid->column('status')->using(['<span style="color: green">正常</span>','<span style="color: red">禁用</span>']);
//            $grid->column('created_at');
//            $grid->column('updated_at')->sortable();

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
        return Show::make($id, new Zone(), function (Show $show) {
            $show->field('id');
            $show->field('type');
            $show->field('desc');
            $show->field('host');
            $show->field('username');
            $show->field('password');
            $show->field('port');
            $show->field('dbname');
            $show->field('status');
//            $show->field('created_at');
//            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Zone(), function (Form $form) {
//            $form->display('id');
            $form->radio('type')->options(['账号数据库','游戏数据库'])->default(0);
            $form->text('desc');
            $form->text('host');
            $form->text('username');
            $form->text('password');
            $form->number('port');
            $form->radio('dbname')->options(['web'=>'web','tlbbdb'=>'tlbbdb'])->default('web');
            $form->radio('status')->options(['正常','禁用'])->default(0);

//            $form->display('created_at');
//            $form->display('updated_at');
        });
    }
}
