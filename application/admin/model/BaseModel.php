<?php
/**
 * Created by PhpStorm.
 * User: 黑盒子
 * Date: 2019/6/22
 * Time: 16:00
 */

namespace app\admin\model;


use think\Db;
use think\exception\ErrorException;
use think\Model;

class BaseModel extends Model
{
    protected $table = 'admin';
    public $table_name = 'admin';
    protected static $page_size = '10';

    /**
     * 列表搜索
     * @param array $where  ['id'=>'1','name'=>'xx']
     * @param string $field  't.id,t.name'
     * @param bool $need_paginator 是否需要分页数据 不需要就返回所有数据
     * @return $this|\think\Paginator
     * @throws \think\exception\DbException
     */
    public static function search($where = [],$field = 't.*',$need_paginator = true){
        $list = DB::name(self::getTable())->alias('t');

        $list =$list->where($where)->order('id desc')
            ->field($field);
        if($need_paginator){
            $list = $list->paginate(self::$page_size);
        }else{
            $list->select();
        }
        return $list;
    }

    /**
     * 根据id获取数据
     * @param $id
     * @param string $id_db_str
     * @return array|null|\PDOStatement|string|Model
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function getOneById($id,$id_db_str = 'id'){
        $data = Db::name(self::getTable())->where([$id_db_str => $id])->find();
        return $data;
    }

    /**
     * @param $where
     * @return array|null|\PDOStatement|string|Model
     * @throws ErrorException
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function getOneByCondition($where){
        if(!is_array($where)){
            throw new ErrorException(1,'搜索条件为空',self::getName(),67);
        }

        $data = Db::name(self::getTable())->where($where)->find();
        return $data;
    }
}