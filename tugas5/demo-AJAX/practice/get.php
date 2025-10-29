<?php
$array=[
    [
        'id'=>1,
        'name'=>'Franz Kafka',
        'address'=>'Malang'
    ],
    [
        'id'=>2,
        'name'=>'Fyodor Dostoevsky',
        'address'=>'Malang'
    ],
    [
        'id'=>3,
        'name'=>'Jane Austen',
        'address'=>'Malang'
    ]
    ];
header("Content-type/html; charset=UTF-8");
header("Content-type:application/json");
echo json_encode($array, JSON_PRETTY_PRINT);
?>