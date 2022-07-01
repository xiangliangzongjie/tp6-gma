<?php
namespace app\controller;

use app\BaseController;
use stdClass;
use think\facade\Db;

class Casestudy extends BaseController{
    public function page($current){
        $total = Db::table('case_study')->count();
        $totalpages = intval($total / 10) + 1;
        $data=Db::name('case_study')->limit(($current-1)*10,10)->select();
        $result = new stdClass();
        if (intval($current) == 1) {
            $previousPage = 1;
        } else {
            $previousPage = intval($current) - 1;
        } if (intval($current) == $totalpages) {
            $nextPage = $totalpages;
        } else {
            $nextPage = intval($current) + 1;
        }
        $result-> currentpage = intval($current);
        $result-> total = $total;
        $result-> totalpages = $totalpages;
        $result-> previousPage = $previousPage;
        $result-> nextPage = $nextPage;
        $result-> data = $data;
        return json($result);
    }
}
?>