<?php

namespace App\Admin\Controllers\Config;

use App\Admin\Repositories\Item;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class ItemController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Item(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('class');
            $grid->column('quality');
            $grid->column('type');
            $grid->column('medindex');
            $grid->column('icon');
            $grid->column('name');
            $grid->column('desc');
            $grid->column('level');
            $grid->column('price');
            $grid->column('sale_price');
            $grid->column('rule');
            $grid->column('num');
            $grid->column('script_id');
            $grid->column('skill_id');
            $grid->column('is_cost');
            $grid->column('need_skill');
            $grid->column('need_skill_level');
            $grid->column('own_num');
            $grid->column('obj_type');
            $grid->column('type_desc');
            $grid->column('quality_level');
            $grid->column('recipe_id');
            $grid->column('color');
            $grid->column('subclass');
            $grid->column('is_boardcast');
        
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
        return Show::make($id, new Item(), function (Show $show) {
            $show->field('id');
            $show->field('class');
            $show->field('quality');
            $show->field('type');
            $show->field('medindex');
            $show->field('icon');
            $show->field('name');
            $show->field('desc');
            $show->field('level');
            $show->field('price');
            $show->field('sale_price');
            $show->field('rule');
            $show->field('num');
            $show->field('script_id');
            $show->field('skill_id');
            $show->field('is_cost');
            $show->field('need_skill');
            $show->field('need_skill_level');
            $show->field('own_num');
            $show->field('obj_type');
            $show->field('type_desc');
            $show->field('quality_level');
            $show->field('recipe_id');
            $show->field('color');
            $show->field('subclass');
            $show->field('is_boardcast');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Item(), function (Form $form) {
            $form->display('id');
            $form->text('class');
            $form->text('quality');
            $form->text('type');
            $form->text('medindex');
            $form->text('icon');
            $form->text('name');
            $form->text('desc');
            $form->text('level');
            $form->text('price');
            $form->text('sale_price');
            $form->text('rule');
            $form->text('num');
            $form->text('script_id');
            $form->text('skill_id');
            $form->text('is_cost');
            $form->text('need_skill');
            $form->text('need_skill_level');
            $form->text('own_num');
            $form->text('obj_type');
            $form->text('type_desc');
            $form->text('quality_level');
            $form->text('recipe_id');
            $form->text('color');
            $form->text('subclass');
            $form->text('is_boardcast');
        });
    }
}
