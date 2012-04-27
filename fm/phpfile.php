$res = json_decode($_REQUEST['data'], true);
$res["php_message"] = "I am PHP";
echo json_encode($res);