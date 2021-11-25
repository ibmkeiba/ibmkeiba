<?php

// Content-TypeをJSONに指定する
header('Content-Type: application/json');

$getdata = $_GET['send'];

$array = [
    'data1' => 'black'. $getdata,
    'data2' => '<h1>HTMLを返しました</h1>',
    'data3' => $getdata
];

echo json_encode(compact('array'));

?>
