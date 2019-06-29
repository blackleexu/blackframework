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

    /**
     * 数据列表
     * @return mixed
     */
    public function index(){
        $params = input('param.');
        $list = model($this->_table_name)::search($params);
        $this->assign('list',$list);//列表数据
        $this->assign('params',$params);//前端参数集
        $this->assign('table_title',$this->getTableTitle());//顶部显示的标题
        return $this->fetch($this->getIndexView());
    }

    public function getSearchCondition(){

    }

    /**
     * 获取index页面的视图文件
     * @return string
     */
    public function getIndexView(){
        return 'index';
    }

    /**
     * 详情
     * @return mixed
     */
    public function detail(){
        $id = input('param.id',0);
        $data = model($this->_table_name)::getOneById($id);
        return $data;
    }

    public function delete(){

        $this->request->param('id');

    }

    /**
     * 保存数据前置操作
     */
    public function onBeforeSaveAction(){

    }

    /**
     * 保存
     */
    public function saveData(){
        //获取数据
        $post_data = $this->getPostData();
        //是否需要验证数据

        //前置操作

        //保存  是否有id，有id就更新没有就添加

        //后置操作

        //返回结果

    }

    /**
     * 保存数据后置操作
     */
    public function onAfterSaveAction(){

    }


    /**
     * 设置需要获取的参数  'name,sex'  为''的话获取全部参数
     * @return string
     */
    public function getPostNames(){
        return '';
    }

    /**
     * 获取指定的参数
     * @return array|mixed
     */
    public function getPostData(){
        $post_name = $this->getPostNames();
        $post_name_arr = empty($post_name)?[]:explode(',',$post_name);

        $post_data = [];

        if(empty($post_name_arr)){
            $post_data = input('param.');
        }else{
            foreach ($post_name_arr as $name){
                $post_data[$name] = input('param.'.$name);
            }
        }

        return $post_data;
    }


    /**
     * 删除前置操作
     */
    public function deleteBefore(){

    }

    /**
     * 获取页面显示的表头信息
     * @return string
     */
    public function getTableTitle()
    {
        return $this->_table_title;
    }
}