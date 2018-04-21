<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Request;

class User extends Model
{
    //
    public function signup()
    {
      
      //检查用户名，密码是否为空，用户名是否为空，加密密码，存入数据库
      if(!Request::get('username') || !Request::get('password'))
        return ['status'=>0,'msg'=>'用户名或者密码不可为空'];
    }
}
