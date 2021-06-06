<?php
$arr = [1,2,3,4,5];
$item = [
    'title'=>'第三个php文件',
    'create_time'=>date('Y-m-d H:i:s',time())
];
echo json_encode($arr);
echo json_encode($item);