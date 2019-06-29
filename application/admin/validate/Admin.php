<?php

namespace app\admin\validate;

use think\Validate;

class Admin extends Validate
{
    protected $rule=[
        ['name'=>'require|max:10|chsDash','请填写管理员名|管理员名不能超过10位|管理员名只能是汉字、字母、数字和下划线_及破折号-'],
    ];
}
