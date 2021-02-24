<?php

namespace App\Http\Controllers\redis;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    public function redis(){
       // Redis::set("name",'wang');//设置值
       // echo Redis::get("name");//获取值
        //Redis::hset("hash1","id","2000000");
        Redis::hmset("hash2",["id"=>300,"name"=>"ding"]);
      $value=Redis::hgetall("hash2");
      print_r($value);
      //  Redis::command("set",["name",1010]);//使用command
    }
}
