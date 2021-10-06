<?php

namespace App\Admin\Controllers\Online;

use App\Admin\Renderable\CharTable;
use App\Admin\Repositories\Eventlist;
use App\Admin\Repositories\Char as CharRepositories;
use App\Models\EventType;
use App\Models\Char;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class EventlistController extends AdminController
{

    protected $options = null;


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
            $grid->column('charname')->display(function ($charname) {
                $tmp = mb_convert_encoding($charname,'ISO-8859-1','UTF-8');
                return mb_convert_encoding($tmp,'UTF-8','gb18030');
            });;
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
            $grid->hideColumns(['param1','param2','param3','param4','param5','param6','param7','param8','param9','param10','created_at','updated_at']);
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
            $show->field('charname')->display(function ($charname) {
                $tmp = mb_convert_encoding($charname,'ISO-8859-1','UTF-8');
                return mb_convert_encoding($tmp,'UTF-8','gb18030');
            });;
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
            $show->field('param7');
            $show->field('param8');
            $show->field('param9');
            $show->field('param10');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $eventTypes = (new EventType())->all()->toArray();
        array_unshift($eventTypes,['id'=>0,'name'=>'无','desc'=>'无','param_num'=>0]);
        //制作列表需要的数据结构
        $newOption = [];
        foreach ($eventTypes as $value) {
            $newOption[$value['desc']] = $value['param_num'];
        }
        return Form::make(new Eventlist(), function (Form $form) use ($eventTypes,$newOption) {
            $form->display('id');
            $form->selectTable('accname', '账号')
                ->title('请选择需要在线充值的账号')
                ->from(CharTable::make())
                ->model(Char::class, 'aid', 'accname');


            $form->text('charname')->saving(function ($charname) {
                $tmp = mb_convert_encoding($charname,'gb18030','UTF-8');
                return mb_convert_encoding($tmp,'UTF-8','ISO-8859-1');
            })->customFormat(function ($accname) {
                $tmp = mb_convert_encoding($accname,'ISO-8859-1','UTF-8');
                return mb_convert_encoding($tmp,'UTF-8','gb18030');
            })->placeholder('请在上面选择账号弹窗口里面复制对应角色名称！！！');


            //构建数据下拉列表
            $newForm = $form->select('event_type_id','事件类型');
            //通过下拉列表的数据拉取对应的值
            foreach ($eventTypes as $key => $value) {

                $newForm->when($key, function (Form $form) use ($newOption,$value) {
                    for ($i = 1; $i <= $value['param_num']; $i++) {
                        $form->text('参数'.$i)->setElementName('param'.$i)->placeholder($value['param_name_'.$i]);
                    }
                    $form->hidden('event_note')->value($value['name'])->hideInDialog();
                    $form->hidden('event')->value($value['desc'])->hideInDialog();
                })->options(array_keys($newOption));
            }
        });
    }
}
