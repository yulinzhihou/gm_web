<?php

namespace App\Admin\Controllers\Zone;

use App\Admin\Repositories\Account;
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
        return Grid::make(new Account(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name')->filter(Grid\Column\Filter\Like::make());;
//            $grid->column('password');
            $grid->column('question');
//            $grid->column('answer');
//            $grid->column('email');
//            $grid->column('qq');
//            $grid->column('tel');
//            $grid->column('address');
//            $grid->column('id_type');
//            $grid->column('id_card');
            $grid->column('point');
            $grid->column('is_online')->display(function ($isOnline){
                if ($isOnline == 0) {
                    return '<span class="label bg-red">离线</span>';
                } else {
                    return '<span class="label bg-red">在线</span>';
                }
            });
            $grid->filter(function (Grid\Filter $filter) {
                $filter->like('name');

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
        return Show::make($id, new Account(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('password');
            $show->field('question');
            $show->field('answer');
            $show->field('email');
            $show->field('qq');
            $show->field('tel');
            $show->field('address');
            $show->field('id_type');
            $show->field('id_card');
            $show->field('point');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Account(), function (Form $form) {
            $form->text('name')->rules('required')->rules(function (Form $form) {
                // 如果不是编辑状态，则添加字段唯一验证
//                if (!$id = $form->model()->id) {
//                    return 'unique:account,name';
//                }
            })->saving(function ($name) {
                $arr = explode('@',$name);
                return count($arr) > 1 ? $name : $name.'@game.sohu.com';
            });
            $form->password('password')->saving(function ($password) {
                return md5($password);
            });
            $form->text('question');
            $form->text('answer');
            $form->text('email');
            $form->text('qq')->default('123456');
            $form->text('tel')->default('18888888888');
            $form->text('address')->default(str_shuffle('东京奥运会羽毛球女单决赛中国代表队选手陈雨菲击败中国台北选手戴资颖夺得金牌这是中国羽毛球队第2金中国代表团第24金'));
            $form->text('id_type')->default('idCard');
            $form->text('id_card')->default('88888888');
            $form->text('point')->default(0);
        });
    }
}
