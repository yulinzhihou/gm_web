<?php
namespace App\Admin\Grid\Tools;

use App\Models\Equip;
use Dcat\Admin\Grid\Tools\AbstractTool;
use Illuminate\Support\Facades\Redis;

class SyncEquip extends AbstractTool
{
    /**
     * 按钮样式定义，默认 btn btn-white waves-effect
     *
     * @var string
     */
    protected $style = 'btn btn-default waves-effect outline';


    /**
     * 按钮文本
     *
     * @return string|void
     */
    public function title()
    {
        return '同步数据';
    }

    /**
     *  确认弹窗，如果不需要则返回空即可
     *
     * @return array|string|void
     */
    public function confirm()
    {
        // 显示标题和内容
        return ['您确定要同步装备数据吗？', '建议：每次换版在服务端执行[upgm]命令，只执行一次即可，重复增加服务器压力'];
    }

    /**
     * 处理请求
     * 如果你的类中包含了此方法，则点击按钮后会自动向后端发起ajax请求，并且会通过此方法处理请求逻辑
     *
     */
    public function handle()
    {
        // 你的代码逻辑
        set_time_limit(0);
        ini_set('max_execution_time', '0');
        $equips = file_get_contents(public_path()."/config_file/EquipBase.txt");
        $header = [
            'id','class','quality','type','index','equip_point','visual','rule','suit_id','suit_value','name','lv','menpai',
            'desc','price','sale_price','max_value','fix_fail_value','max_gem','skill_id','script_id','icon','desc_type','piao_id',
            'is_zz','is_pz','basic_phy_attack','basic_mag_attack','basic_phy_def','basic_mag_def','basic_hit','basic_miss',
            'hp_max_value','hp_max_percent','hp_back_value','mp_max_value','mp_max_percent','mp_back_value','cold_att','cold_def',
            'cold_keep_time','fire_att','fire_def','fire_keep_time','light_att','light_def','light_keep_time','postion_att','postion_def',
            'postion_keep_time','def_all_percent','phy_attack','phy_attack_percent','add_phy_attack_percent','phy_def','phy_def_percent',
            'add_phy_def_percent','miss_phy_def_percent','mag_attack','mag_attack_percent','add_mag_attack_percent','mag_def','mag_def_percent',
            'add_mag_def_percent','miss_mag_def_percent','attach_speed','mag_cold_time','hit','miss','critical_att','ignore_percent','move_percent',
            'attack_back','attach_cost','str','spr','con','com','dex','critical_def','qian_neng','hp_sto','mp_sto','add_skill_lv','add_all_skill_lv',
            'spe_skill_rate','Resist_cold_def','Resist_fire_def','Resist_light_def','Resist_postion_def','quality_rule','begin_attr','attr_min',
            'attr_max','zz_min','zz_max','level_up_id','bag','box','is_boradcast','float_space','quality_level'
        ];
        $data = [];/*总数据*/
        $ids = [];/*所有列表的索引*/
        $idNames = [];/*[id=>1,name=>equipName]*/
        $equip = explode("\n",$equips);
        $result = true;
        foreach($equip as $value){
            if($value=="")continue;
            $cols=explode("\t",mb_convert_encoding(trim($value),'UTF-8','gb18030'));//按竖线进行拆分
            //过滤一些没有内容的行，表头，然后一些注释行。
            if (
                in_array('',$cols) ||
                in_array('INT',$cols) ||
                in_array('int',$cols) ||
                in_array('index',$cols) ||
                in_array('INDEX',$cols) ||
                in_array('Index',$cols)
            ) {
                continue;
            }
            //过滤表头有#号注释行的
            if (strpos($cols[0],'#') === 0 ) {
                continue;
            }

            //判断有没有数据字段不匹配的，比如表头26个字段，内容也必须是这个字段，不然不可能成功
            if (count($header) != count($cols)) {
                continue;
            }
            $allData = array_combine($header,$cols);
            $newCols = [$cols[0]=>json_encode($allData)];
            array_unshift($data,$newCols);
            array_unshift($ids,$allData['id']);
            array_unshift($idNames,['id'=>$allData['id'],'name'=>$allData['name']]);
            Redis::hmset('equip',$newCols);
            $ret = Equip::updateOrCreate(['id'=>$cols[0]],$allData);
            $result = $result && $ret;
        }
        Redis::hmset('equip_id_name',['id_names'=>json_encode($idNames),'ids'=>json_encode($ids)]);
        if ($result) {
            return $this->response()->success('数据同步成功')->refresh();
        } else {
            return $this->response()->error('数据同步失败');
        }

    }

    /**
     * 设置请求参数
     *
     * @return array|void
     */
    public function parameters()
    {
        return [

        ];
    }
}
