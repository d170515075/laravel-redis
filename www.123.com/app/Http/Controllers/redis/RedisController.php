<?php

namespace App\Http\Controllers\redis;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    public function redis(){
        Redis::set("name",'wang');//设置值
        echo Redis::get("name");//获取值

    }
}
