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

class Admin extends BaseModel
{
    protected $autoWriteTimestamp = true;
    protected $table = 'admin';
    public $table_name = 'admin';

}