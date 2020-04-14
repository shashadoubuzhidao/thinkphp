<?php
namespace app\index\controller;
use think\Db;

class Index
{
    public function index()
    {
        //phpinfo();
        $list = Db::table('testtab')->select();
        var_dump($list);
        die;
    }
}
