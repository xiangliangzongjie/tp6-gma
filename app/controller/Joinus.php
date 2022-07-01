<?php
namespace app\controller;
use app\BaseController;
use think\facade\Db;
class Joinus extends BaseController{
    public function page(){
        $result = Db::table('joinus')->select();
        return json($result);
    }
} 

?>