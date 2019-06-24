<?php
/**
 * Created by PhpStorm.
 * User: 黑盒子
 * Date: 2019/6/22
 * Time: 15:46
 */

namespace app\admin\controller;


use think\Controller;

class BaseController extends Controller
{
    public $_table_title = '标题'; //列表显示的标题
    public $_table_name = 'admin';//模型名

    public function index(){
        $params = input('param.');
        $list = model($this->_table_name)->search($params);
        $this->assign('list',$list);
        $this->assign('table_title',$this->_table_title);
        return $this->fetch($this->getIndexView());
    }

    public function getIndexView(){
        return 'index';
    }

    /**
     * 详情
     */
    public function detail(){

    }

    public function delete(){

        $this->request->param('id');

    }

    /**
     * 保存
     */
    public function saveData(){

    }

    public function deleteBefore(){

    }

    /**
     * @return string
     */
    public function getTableTitle()
    {
        return $this->_table_title;
    }

    /**
     * @param string $table_title
     */
    public function setTableTitle($table_title)
    {
        $this->_table_title = $table_title;
    }

}