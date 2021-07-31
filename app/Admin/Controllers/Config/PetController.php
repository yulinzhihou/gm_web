<?php

namespace App\Admin\Controllers\Config;

use App\Admin\Repositories\Pet;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class PetController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Pet(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('class');
            $grid->column('catch_level');
            $grid->column('group');
            $grid->column('is_varition');
            $grid->column('is_baby');
            $grid->column('food_type');
            $grid->column('skill_study');
            $grid->column('positive_skill_one');
            $grid->column('positive_skill_one_percent');
            $grid->column('positive_skill_two');
            $grid->column('positive_skill_two_percent');
            $grid->column('negative_skill_one');
            $grid->column('negative_skill_one_percent');
            $grid->column('negative_skill_two');
            $grid->column('negative_skill_two_percent');
            $grid->column('negative_skill_three');
            $grid->column('negative_skill_three_percent');
            $grid->column('negative_skill_four');
            $grid->column('negative_skill_four_percent');
            $grid->column('negative_skill_five');
            $grid->column('negative_skill_five_percent');
            $grid->column('negative_skill_six');
            $grid->column('negative_skill_six_percent');
            $grid->column('negative_skill_seven');
            $grid->column('negative_skill_seven_percent');
            $grid->column('negative_skill_eight');
            $grid->column('negative_skill_eight_percent');
            $grid->column('negative_skill_nine');
            $grid->column('negative_skill_nine_percent');
            $grid->column('negative_skill_ten');
            $grid->column('negative_skill_ten_percent');
            $grid->column('basic_hp');
            $grid->column('basic_str');
            $grid->column('basic_con');
            $grid->column('basic_spr');
            $grid->column('basic_dex');
            $grid->column('basic_com');
            $grid->column('grow_rate_one');
            $grid->column('grow_rate_two');
            $grid->column('grow_rate_three');
            $grid->column('grow_rate_four');
            $grid->column('grow_rate_five');
            $grid->column('timid');
            $grid->column('cautious');
            $grid->column('loyal');
            $grid->column('shrewd');
            $grid->column('bravery');
            $grid->column('breeding_time');
            $grid->column('same_type');
            $grid->column('extra_one');
            $grid->column('extra_two');
        
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
        return Show::make($id, new Pet(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('class');
            $show->field('catch_level');
            $show->field('group');
            $show->field('is_varition');
            $show->field('is_baby');
            $show->field('food_type');
            $show->field('skill_study');
            $show->field('positive_skill_one');
            $show->field('positive_skill_one_percent');
            $show->field('positive_skill_two');
            $show->field('positive_skill_two_percent');
            $show->field('negative_skill_one');
            $show->field('negative_skill_one_percent');
            $show->field('negative_skill_two');
            $show->field('negative_skill_two_percent');
            $show->field('negative_skill_three');
            $show->field('negative_skill_three_percent');
            $show->field('negative_skill_four');
            $show->field('negative_skill_four_percent');
            $show->field('negative_skill_five');
            $show->field('negative_skill_five_percent');
            $show->field('negative_skill_six');
            $show->field('negative_skill_six_percent');
            $show->field('negative_skill_seven');
            $show->field('negative_skill_seven_percent');
            $show->field('negative_skill_eight');
            $show->field('negative_skill_eight_percent');
            $show->field('negative_skill_nine');
            $show->field('negative_skill_nine_percent');
            $show->field('negative_skill_ten');
            $show->field('negative_skill_ten_percent');
            $show->field('basic_hp');
            $show->field('basic_str');
            $show->field('basic_con');
            $show->field('basic_spr');
            $show->field('basic_dex');
            $show->field('basic_com');
            $show->field('grow_rate_one');
            $show->field('grow_rate_two');
            $show->field('grow_rate_three');
            $show->field('grow_rate_four');
            $show->field('grow_rate_five');
            $show->field('timid');
            $show->field('cautious');
            $show->field('loyal');
            $show->field('shrewd');
            $show->field('bravery');
            $show->field('breeding_time');
            $show->field('same_type');
            $show->field('extra_one');
            $show->field('extra_two');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Pet(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->text('class');
            $form->text('catch_level');
            $form->text('group');
            $form->text('is_varition');
            $form->text('is_baby');
            $form->text('food_type');
            $form->text('skill_study');
            $form->text('positive_skill_one');
            $form->text('positive_skill_one_percent');
            $form->text('positive_skill_two');
            $form->text('positive_skill_two_percent');
            $form->text('negative_skill_one');
            $form->text('negative_skill_one_percent');
            $form->text('negative_skill_two');
            $form->text('negative_skill_two_percent');
            $form->text('negative_skill_three');
            $form->text('negative_skill_three_percent');
            $form->text('negative_skill_four');
            $form->text('negative_skill_four_percent');
            $form->text('negative_skill_five');
            $form->text('negative_skill_five_percent');
            $form->text('negative_skill_six');
            $form->text('negative_skill_six_percent');
            $form->text('negative_skill_seven');
            $form->text('negative_skill_seven_percent');
            $form->text('negative_skill_eight');
            $form->text('negative_skill_eight_percent');
            $form->text('negative_skill_nine');
            $form->text('negative_skill_nine_percent');
            $form->text('negative_skill_ten');
            $form->text('negative_skill_ten_percent');
            $form->text('basic_hp');
            $form->text('basic_str');
            $form->text('basic_con');
            $form->text('basic_spr');
            $form->text('basic_dex');
            $form->text('basic_com');
            $form->text('grow_rate_one');
            $form->text('grow_rate_two');
            $form->text('grow_rate_three');
            $form->text('grow_rate_four');
            $form->text('grow_rate_five');
            $form->text('timid');
            $form->text('cautious');
            $form->text('loyal');
            $form->text('shrewd');
            $form->text('bravery');
            $form->text('breeding_time');
            $form->text('same_type');
            $form->text('extra_one');
            $form->text('extra_two');
        });
    }
}
