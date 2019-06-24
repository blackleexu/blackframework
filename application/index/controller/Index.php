<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        return 'hello forward';
    }

    public function forward(){
        return 'forward';
    }

}
