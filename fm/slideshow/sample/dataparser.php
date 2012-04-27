<?php
$data = json_decode($_POST['jsonData']);
$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);

$response =  json_encode($arr);
//$response = 'Получено параметров '.count($data).'\n';
//foreach ($data as $key=>$value) {
//    $response .= 'Параметр: '.$key.'; Значение: '.$value.'\n';
//}
echo $response;
?>