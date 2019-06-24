<?php
/**
 * Created by PhpStorm.
 * User: 黑盒子
 * Date: 2019/6/22
 * Time: 16:00
 */

namespace app\admin\model;


use think\Db;
use think\Model;

class Admin extends Model
{
    protected $autoWriteTimestamp = true;
    protected $table = 'admin';
    public $table_name = 'admin';

    /**
     * @param array $where  ['id'=>'1','name'=>'xx']
     * @return $this|\think\Paginator
     * @throws \think\exception\DbException
     */
    public static function search($where = []){
        $list = DB::name(self::getTable())->alias('t');
        $field = 't.*';

        unset($where['page']);

        $list =$list->where($where)->order('id desc')
            ->field($field)
            ->paginate(1);
        return $list;
    }

    public function getSearchCondition(){
        return [];
    }

    protected static function beforeInsert($callback, $override = false)
    {
    }

    protected static function beforeDelete($callback, $override = false)
    {

    }

    protected static function afterDelete($callback, $override = false)
    {
    }
}