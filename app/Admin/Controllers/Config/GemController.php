<?php

namespace App\Admin\Controllers\Config;

use App\Admin\Grid\Tools\SyncGem;
use App\Admin\Repositories\Gem;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class GemController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Gem(), function (Grid $grid) {
            $grid->column('id')->filter(Grid\Column\Filter\Like::make())->sortable();
            $grid->column('class');
            $grid->column('quality');
            $grid->column('type');
            $grid->column('index');
            $grid->column('icon');
            $grid->column('rule');
            $grid->column('name')->filter(Grid\Column\Filter\Like::make());
            $grid->column('desc');
            $grid->column('price');
            $grid->column('sale_price');
            $grid->column('hp_max_value');
            $grid->column('hp_max_percent');
            $grid->column('hp_back_value');
            $grid->column('mp_max_value');
            $grid->column('mp_max_percent');
            $grid->column('mp_back_value');
            $grid->column('cold_att');
            $grid->column('cold_def');
            $grid->column('cold_keep_time');
            $grid->column('fire_att');
            $grid->column('fire_def');
            $grid->column('fire_keep_time');
            $grid->column('light_att');
            $grid->column('light_def');
            $grid->column('light_keep_time');
            $grid->column('postion_att');
            $grid->column('postion_def');
            $grid->column('postion_keep_time');
            $grid->column('def_all_percent');
            $grid->column('phy_attack');
            $grid->column('phy_attack_percent');
            $grid->column('add_phy_attack_percent');
            $grid->column('phy_def');
            $grid->column('phy_def_percent');
            $grid->column('add_phy_def_percent');
            $grid->column('miss_phy_def_percent');
            $grid->column('mag_attack');
            $grid->column('mag_attack_percent');
            $grid->column('add_mag_attack_percent');
            $grid->column('mag_def');
            $grid->column('mag_def_percent');
            $grid->column('add_mag_def_percent');
            $grid->column('miss_mag_def_percent');
            $grid->column('attach_speed');
            $grid->column('mag_cold_time');
            $grid->column('hit');
            $grid->column('miss');
            $grid->column('critical_att');
            $grid->column('ignore_percent');
            $grid->column('move_percent');
            $grid->column('attack_back');
            $grid->column('attach_cost');
            $grid->column('str');
            $grid->column('spr');
            $grid->column('con');
            $grid->column('com');
            $grid->column('dex');
            $grid->column('critical_def');
            $grid->column('qian_neng');
            $grid->column('hp_sto');
            $grid->column('mp_sto');
            $grid->column('add_skill_lv');
            $grid->column('add_all_skill_lv');
            $grid->column('spe_skill_rate');
            $grid->column('Resist_cold_def');
            $grid->column('Resist_fire_def');
            $grid->column('Resist_light_def');
            $grid->column('Resist_postion_def');
            $grid->column('basic_phy_attack');
            $grid->column('basic_mag_attack');
            $grid->column('basic_phy_def');
            $grid->column('basic_mag_def');
            $grid->column('basic_hit');
            $grid->column('basic_miss');
            $grid->column('color');
            $grid->column('desc_type');
            $grid->column('special_id');
            $grid->column('color_code');
            $grid->column('is_boradcast');

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

            });

            // 开启字段选择器功能
            $grid->showColumnSelector();
            // 设置默认隐藏字段
            $grid->hideColumns([
                'class','quality','type','index','icon','rule','desc','price','sale_price','hp_max_value','hp_max_percent',
                'hp_back_value','mp_max_value','mp_max_percent','mp_back_value','cold_att','cold_def','cold_keep_time','fire_att','fire_def',
                'fire_keep_time','light_att','light_def','light_keep_time','postion_att','postion_def','postion_keep_time','def_all_percent',
                'phy_attack','phy_attack_percent','add_phy_attack_percent','phy_def','phy_def_percent','add_phy_def_percent','miss_phy_def_percent',
                'mag_attack','mag_attack_percent','add_mag_attack_percent','mag_def','mag_def_percent','add_mag_def_percent','miss_mag_def_percent',
                'attach_speed','mag_cold_time','hit','miss','critical_att','ignore_percent','move_percent','attack_back','attach_cost','str','spr',
                'con','com','dex','critical_def','qian_neng','hp_sto','mp_sto','add_skill_lv','add_all_skill_lv','spe_skill_rate','Resist_cold_def',
                'Resist_fire_def','Resist_light_def','Resist_postion_def','basic_phy_attack','basic_mag_attack','basic_phy_def','basic_mag_def',
                'basic_hit','basic_miss','color','desc_type','special_id','color_code','is_boradcast'
            ]);
            $grid->tools(new SyncGem());
            $grid->disableDeleteButton();
            $grid->disableEditButton();
            $grid->disableQuickEditButton();
//            $grid->disableViewButton();
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
        return Show::make($id, new Gem(), function (Show $show) {
            $show->field('id');
            $show->field('class');
            $show->field('quality');
            $show->field('type');
            $show->field('index');
            $show->field('icon');
            $show->field('rule');
            $show->field('name');
            $show->field('desc');
            $show->field('price');
            $show->field('sale_price');
            $show->field('hp_max_value');
            $show->field('hp_max_percent');
            $show->field('hp_back_value');
            $show->field('mp_max_value');
            $show->field('mp_max_percent');
            $show->field('mp_back_value');
            $show->field('cold_att');
            $show->field('cold_def');
            $show->field('cold_keep_time');
            $show->field('fire_att');
            $show->field('fire_def');
            $show->field('fire_keep_time');
            $show->field('light_att');
            $show->field('light_def');
            $show->field('light_keep_time');
            $show->field('postion_att');
            $show->field('postion_def');
            $show->field('postion_keep_time');
            $show->field('def_all_percent');
            $show->field('phy_attack');
            $show->field('phy_attack_percent');
            $show->field('add_phy_attack_percent');
            $show->field('phy_def');
            $show->field('phy_def_percent');
            $show->field('add_phy_def_percent');
            $show->field('miss_phy_def_percent');
            $show->field('mag_attack');
            $show->field('mag_attack_percent');
            $show->field('add_mag_attack_percent');
            $show->field('mag_def');
            $show->field('mag_def_percent');
            $show->field('add_mag_def_percent');
            $show->field('miss_mag_def_percent');
            $show->field('attach_speed');
            $show->field('mag_cold_time');
            $show->field('hit');
            $show->field('miss');
            $show->field('critical_att');
            $show->field('ignore_percent');
            $show->field('move_percent');
            $show->field('attack_back');
            $show->field('attach_cost');
            $show->field('str');
            $show->field('spr');
            $show->field('con');
            $show->field('com');
            $show->field('dex');
            $show->field('critical_def');
            $show->field('qian_neng');
            $show->field('hp_sto');
            $show->field('mp_sto');
            $show->field('add_skill_lv');
            $show->field('add_all_skill_lv');
            $show->field('spe_skill_rate');
            $show->field('Resist_cold_def');
            $show->field('Resist_fire_def');
            $show->field('Resist_light_def');
            $show->field('Resist_postion_def');
            $show->field('basic_phy_attack');
            $show->field('basic_mag_attack');
            $show->field('basic_phy_def');
            $show->field('basic_mag_def');
            $show->field('basic_hit');
            $show->field('basic_miss');
            $show->field('color');
            $show->field('desc_type');
            $show->field('special_id');
            $show->field('color_code');
            $show->field('is_boradcast');
            $show->disableDeleteButton();
            $show->disableEditButton();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Gem(), function (Form $form) {
            $form->display('id');
            $form->text('class');
            $form->text('quality');
            $form->text('type');
            $form->text('index');
            $form->text('icon');
            $form->text('rule');
            $form->text('name');
            $form->text('desc');
            $form->text('price');
            $form->text('sale_price');
            $form->text('hp_max_value');
            $form->text('hp_max_percent');
            $form->text('hp_back_value');
            $form->text('mp_max_value');
            $form->text('mp_max_percent');
            $form->text('mp_back_value');
            $form->text('cold_att');
            $form->text('cold_def');
            $form->text('cold_keep_time');
            $form->text('fire_att');
            $form->text('fire_def');
            $form->text('fire_keep_time');
            $form->text('light_att');
            $form->text('light_def');
            $form->text('light_keep_time');
            $form->text('postion_att');
            $form->text('postion_def');
            $form->text('postion_keep_time');
            $form->text('def_all_percent');
            $form->text('phy_attack');
            $form->text('phy_attack_percent');
            $form->text('add_phy_attack_percent');
            $form->text('phy_def');
            $form->text('phy_def_percent');
            $form->text('add_phy_def_percent');
            $form->text('miss_phy_def_percent');
            $form->text('mag_attack');
            $form->text('mag_attack_percent');
            $form->text('add_mag_attack_percent');
            $form->text('mag_def');
            $form->text('mag_def_percent');
            $form->text('add_mag_def_percent');
            $form->text('miss_mag_def_percent');
            $form->text('attach_speed');
            $form->text('mag_cold_time');
            $form->text('hit');
            $form->text('miss');
            $form->text('critical_att');
            $form->text('ignore_percent');
            $form->text('move_percent');
            $form->text('attack_back');
            $form->text('attach_cost');
            $form->text('str');
            $form->text('spr');
            $form->text('con');
            $form->text('com');
            $form->text('dex');
            $form->text('critical_def');
            $form->text('qian_neng');
            $form->text('hp_sto');
            $form->text('mp_sto');
            $form->text('add_skill_lv');
            $form->text('add_all_skill_lv');
            $form->text('spe_skill_rate');
            $form->text('Resist_cold_def');
            $form->text('Resist_fire_def');
            $form->text('Resist_light_def');
            $form->text('Resist_postion_def');
            $form->text('basic_phy_attack');
            $form->text('basic_mag_attack');
            $form->text('basic_phy_def');
            $form->text('basic_mag_def');
            $form->text('basic_hit');
            $form->text('basic_miss');
            $form->text('color');
            $form->text('desc_type');
            $form->text('special_id');
            $form->text('color_code');
            $form->text('is_boradcast');
        });
    }
}
