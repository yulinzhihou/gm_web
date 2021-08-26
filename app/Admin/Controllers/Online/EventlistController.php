<?php

namespace App\Admin\Controllers\Online;

use App\Admin\Controllers\Zone\CharController;
use App\Admin\Renderable\CharTable;
use App\Admin\Repositories\Eventlist;
use App\Models\Char;
use App\Models\EventType;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class EventlistController extends AdminController
{

    protected $options = [
        3 => '显示文本框',
        4 => '显示编辑器',
        5 => '显示文件上传',
        6 => '还是显示文本框',
    ];



    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Eventlist(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('accname');
            $grid->column('charname');
            $grid->column('event');
            $grid->column('event_note');
            $grid->column('status');
            $grid->column('request_time');
            $grid->column('param1');
            $grid->column('param2');
            $grid->column('param3');
            $grid->column('param4');
            $grid->column('param5');
            $grid->column('param6');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->showColumnSelector();
            $grid->hideColumns(['param1','param2','param3','param4','param5','param6','created_at','updated_at']);
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
        return Show::make($id, new Eventlist(), function (Show $show) {
            $show->field('id');
            $show->field('accname');
            $show->field('charname');
            $show->field('event');
            $show->field('event_note');
            $show->field('status');
            $show->field('request_time');
            $show->field('param1');
            $show->field('param2');
            $show->field('param3');
            $show->field('param4');
            $show->field('param5');
            $show->field('param6');
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
        return Form::make(new Eventlist(), function (Form $form) {
            $form->display('id');
            $form->selectTable('form1.select-table', '账号')
                ->title('请选择需要在线充值的账号')
                ->from(CharTable::make())
                ->model(Char::class, 'aid', 'accname');

            //构建数据下拉列表
            $newForm = $form->select('select','事件类型');
            //通过下拉列表的数据拉取对应的值
            foreach ($this->options as $key => $option) {
                $newForm->when($key, function (Form $form) use ($key) {
                    for ($i = 1; $i <=$key; $i++) {
                        $form->text('参数'.$i);
                    }
                })
                ->options($this->options);
            }


//            $form->selectTable('charname','角色名')
//                ->title('char_name')
//                ->from(\App\Admin\Repositories\Char::make())
//                ->model(Char::class,'aid','accname');
//            $form->selectTable('form1.select-table', 'Select Table')
//                ->title('Char')
//                ->from(Char::make())
//                ->model(Char::class, 'aid', 'accname');
//            $form->text('event');
//            $form->text('event_note');
//            $form->text('status');
//            $form->text('request_time');
//            $form->text('param1');
//            $form->text('param2');
//            $form->text('param3');
//            $form->text('param4');
//            $form->text('param5');
//            $form->text('param6');

//            $form->display('created_at');
//            $form->display('updated_at');
        });
    }
}
