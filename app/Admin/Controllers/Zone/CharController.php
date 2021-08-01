<?php

namespace App\Admin\Controllers\Zone;

use App\Admin\Repositories\Char;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class CharController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Char(), function (Grid $grid) {
            $grid->column('aid')->sortable();
            $grid->column('accname')->filter(Grid\Column\Filter\Like::make())->limit(8,'...');
            $grid->column('charguid');
            $grid->column('charname')->display(function ($charname) {
                $tmp = mb_convert_encoding($charname,'ISO-8859-1','UTF-8');
                return mb_convert_encoding($tmp,'UTF-8','gb18030');
            });
            $grid->column('title')->display(function ($title) {
                $tmp = mb_convert_encoding($title,'ISO-8859-1','UTF-8');
                return mb_convert_encoding($tmp,'UTF-8','gb18030');
            });;
            $grid->column('pw');
            $grid->column('sex')->display(function ($sex){
                if ($sex == 0){
                    return '<span class="label bg-red">女</span>';
                } else {
                    return '<span class="label bg-blue">男</span>';
                }
            })->sortable();
            $grid->column('level')->sortable();
            $grid->column('enegry')->sortable();
            $grid->column('energymax')->sortable();
            $grid->column('outlook');
            $grid->column('scene');
            $grid->column('xpos');
            $grid->column('zpos');
            $grid->column('menpai');
            $grid->column('hp')->sortable();
            $grid->column('mp')->sortable();
            $grid->column('strikepoint');
            $grid->column('str');
            $grid->column('spr');
            $grid->column('con');
            $grid->column('ipr');
            $grid->column('dex');
            $grid->column('points')->sortable();
            $grid->column('logouttime');
            $grid->column('logintime');
            $grid->column('createtime');
            $grid->column('haircolor');
            $grid->column('hairmodel');
            $grid->column('facecolor');
            $grid->column('facemodel');
            $grid->column('vmoney');
            $grid->column('isvalid');
            $grid->column('exp');
            $grid->column('pres');
            $grid->column('mdata');
            $grid->column('mflag');
            $grid->column('relflag');
            $grid->column('settings');
            $grid->column('dbversion');
            $grid->column('shopinfo');
            $grid->column('carrypet');
            $grid->column('guldid');
            $grid->column('teamid');
            $grid->column('headid');
            $grid->column('erecover');
            $grid->column('vigor');
            $grid->column('maxvigor');
            $grid->column('vrecover');
            $grid->column('pwdeltime');
            $grid->column('pinfo');
            $grid->column('bkscene');
            $grid->column('bkxpos');
            $grid->column('bkzpos');
            $grid->column('titleinfo');
            $grid->column('dietime');
            $grid->column('cooldown');
            $grid->column('bankmoney')->sortable();
            $grid->column('bankend');
            $grid->column('rage');
            $grid->column('reserve');
            $grid->column('dinfo');
            $grid->column('defeq');
            $grid->column('guildpoint')->sortable();
            $grid->column('menpaipoint')->sortable();
            $grid->column('gevil');
            $grid->column('pkvalue');
            $grid->column('otime');
            $grid->column('deltime');
            $grid->column('expinfo');
            $grid->column('savetime');
            $grid->column('crc32');
            $grid->column('pvpinfo');
            $grid->column('loginip');
            $grid->column('pkvaluetime');
            $grid->column('fatigue');
            $grid->column('yuanbao')->sortable();
            $grid->column('visualgem');
            $grid->column('isolditem');
            $grid->column('uipoint')->sortable();
            $grid->column('zengdian')->sortable();
            $grid->fixColumns(4);

            // 开启字段选择器功能
            $grid->showColumnSelector();
            // 设置默认隐藏字段
            $grid->hideColumns([
                'charguid','title','pw','strikepoint','enegry','energymax','outlook','scene','xpos','zpos','menpai',
                'logouttime','logintime','createtime','haircolor','hairmodel','uipoint','points',
                'facecolor','facemodel','vmoney','isvalid','exp','pres','mdata','mflag','relflag','settings','dbversion','shopinfo','carrypet',
                'guldid','teamid','headid','erecover','vigor','maxvigor','vrecover','pwdeltime','pinfo','bkscene','bkxpos','bkzpos','titleinfo',
                'dietime','cooldown','bankend','rage','reserve','dinfo','defeq','gevil','pkvalue','otime',
                'deltime','expinfo','savetime','crc32','pvpinfo','loginip','pkvaluetime','fatigue','visualgem','isolditem'
            ]);
            $grid->disableDeleteButton();
            $grid->disableCreateButton(true);
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
        return Show::make($id, new Char(), function (Show $show) {
            $show->field('aid');
            $show->field('accname');
            $show->field('charguid');
            $show->field('charname')->as(function ($charname) {
                $tmp = mb_convert_encoding($charname,'ISO-8859-1','UTF-8');
                return mb_convert_encoding($tmp,'UTF-8','gb18030');
            });;
            $show->field('title')->as(function ($title) {
                $tmp = mb_convert_encoding($title,'ISO-8859-1','UTF-8');
                return mb_convert_encoding($tmp,'UTF-8','gb18030');
            });;
            $show->field('pw');
            $show->field('sex');
            $show->field('level');
            $show->field('enegry');
            $show->field('energymax');
            $show->field('outlook');
            $show->field('scene');
            $show->field('xpos');
            $show->field('zpos');
            $show->field('menpai');
            $show->field('hp');
            $show->field('mp');
            $show->field('strikepoint');
            $show->field('str');
            $show->field('spr');
            $show->field('con');
            $show->field('ipr');
            $show->field('dex');
            $show->field('points');
            $show->field('logouttime');
            $show->field('logintime');
            $show->field('createtime');
            $show->field('haircolor');
            $show->field('hairmodel');
            $show->field('facecolor');
            $show->field('facemodel');
            $show->field('vmoney');
            $show->field('isvalid');
            $show->field('exp');
            $show->field('pres');
            $show->field('mdata');
            $show->field('mflag');
            $show->field('relflag');
            $show->field('settings');
            $show->field('dbversion');
            $show->field('shopinfo');
            $show->field('carrypet');
            $show->field('guldid');
            $show->field('teamid');
            $show->field('headid');
            $show->field('erecover');
            $show->field('vigor');
            $show->field('maxvigor');
            $show->field('vrecover');
            $show->field('pwdeltime');
            $show->field('pinfo');
            $show->field('bkscene');
            $show->field('bkxpos');
            $show->field('bkzpos');
            $show->field('titleinfo');
            $show->field('dietime');
            $show->field('cooldown');
            $show->field('bankmoney');
            $show->field('bankend');
            $show->field('rage');
            $show->field('reserve');
            $show->field('dinfo');
            $show->field('defeq');
            $show->field('guildpoint');
            $show->field('menpaipoint');
            $show->field('gevil');
            $show->field('pkvalue');
            $show->field('otime');
            $show->field('deltime');
            $show->field('expinfo');
            $show->field('savetime');
            $show->field('crc32');
            $show->field('pvpinfo');
            $show->field('loginip');
            $show->field('pkvaluetime');
            $show->field('fatigue');
            $show->field('yuanbao');
            $show->field('visualgem');
            $show->field('isolditem');
            $show->field('uipoint');
            $show->field('zengdian');
//            $show->disableDeleteButton();
//            $show->disableEditButton();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Char(), function (Form $form) {
            $form->display('aid');
            $form->text('accname')->disable();
//            $form->text('charguid');
            $form->text('charname')->saving(function ($charname) {
                $tmp = mb_convert_encoding($charname,'gb18030','UTF-8');
                return mb_convert_encoding($tmp,'UTF-8','ISO-8859-1');
            })->customFormat(function ($accname) {
                $tmp = mb_convert_encoding($accname,'ISO-8859-1','UTF-8');
                return mb_convert_encoding($tmp,'UTF-8','gb18030');
            });
//            $form->text('title')->customFormat(function ($accname) {
//                $tmp = mb_convert_encoding($accname,'ISO-8859-1','UTF-8');
//                return mb_convert_encoding($tmp,'UTF-8','gb18030');
//            });
//            $form->text('pw');
            $form->radio('sex')->options(['女','男']);
            $form->text('level');
            $form->text('enegry');
            $form->text('energymax');
//            $form->text('outlook');
//            $form->text('scene');
//            $form->text('xpos');
//            $form->text('zpos');
//            $form->text('menpai');
            $form->text('hp');
            $form->text('mp');
//            $form->text('strikepoint');
            $form->text('str');
            $form->text('spr');
            $form->text('con');
            $form->text('ipr');
            $form->text('dex');
            $form->text('points');
//            $form->text('logouttime');
//            $form->text('logintime');
//            $form->text('createtime');
//            $form->text('haircolor');
//            $form->text('hairmodel');
//            $form->text('facecolor');
//            $form->text('facemodel');
            $form->text('vmoney');
//            $form->text('isvalid');
            $form->text('exp');
//            $form->text('pres');
//            $form->text('mdata');
//            $form->text('mflag');
//            $form->text('relflag');
//            $form->text('settings');
//            $form->text('dbversion');
//            $form->text('shopinfo');
//            $form->text('carrypet');
//            $form->text('guldid');
//            $form->text('teamid');
//            $form->text('headid');
//            $form->text('erecover');
            $form->text('vigor');
            $form->text('maxvigor');
//            $form->text('vrecover');
//            $form->text('pwdeltime');
//            $form->text('pinfo');
//            $form->text('bkscene');
//            $form->text('bkxpos');
//            $form->text('bkzpos');
//            $form->text('titleinfo');
//            $form->text('dietime');
//            $form->text('cooldown');
            $form->text('bankmoney');
//            $form->text('bankend');
//            $form->text('rage');
//            $form->text('reserve');
//            $form->text('dinfo');
//            $form->text('defeq');
            $form->text('guildpoint');
            $form->text('menpaipoint');
            $form->text('gevil');
//            $form->text('pkvalue');
//            $form->text('otime');
//            $form->text('deltime');
//            $form->text('expinfo');
//            $form->text('savetime');
//            $form->text('crc32');
//            $form->text('pvpinfo');
//            $form->text('loginip');
//            $form->text('pkvaluetime');
//            $form->text('fatigue');
            $form->text('yuanbao');
//            $form->text('visualgem');
//            $form->text('isolditem');
            $form->text('uipoint');
            $form->text('zengdian');

//            $form->disableDeleteButton();
            $form->disableViewButton();
        });
    }
}
