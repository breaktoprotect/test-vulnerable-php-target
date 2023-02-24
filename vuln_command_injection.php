<?php
// Justa  comment test
$ip = $_GET['ip'];

$result = shell_exec("ping -c 3 " . $ip);
echo $result;
?>
