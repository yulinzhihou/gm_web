<?php
namespace App\Admin\Grid\Tools;

use App\Models\Item;
use Dcat\Admin\Grid\Tools\AbstractTool;
use Illuminate\Support\Facades\Redis;

class SyncItem extends AbstractTool
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
        $equips = file_get_contents(public_path()."/config_file/CommonItem.txt");
        $header = [
            'id','class','quality','type','medindex','icon','name','desc',
            'level','price','sale_price','rule','num','script_id','skill_id',
            'is_cost','need_skill','need_skill_level','own_num','obj_type',
            'type_desc','quality_level','recipe_id','color','subclass','is_boardcast'
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
            Redis::hmset('item',$newCols);
            $ret = Item::updateOrCreate(['id'=>$cols[0]],$allData);
            $result = $result && $ret;
        }
        Redis::hmset('item_id_name',['id_names'=>json_encode($idNames),'ids'=>json_encode($ids)]);
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