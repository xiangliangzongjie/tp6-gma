<?php
// 应用公共文件
function response($code=200, $msg='success', $data=[])
{
    $res = [
        'code' => $code,
        'msg' => $msg,
        'data' => $data
    ];
    json($res)->send();die;
}
?>