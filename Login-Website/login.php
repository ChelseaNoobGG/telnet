<?php
// เชื่อมต่อกับเซิร์ฟเวอร์ telnet
$host = $_POST['hostname'];
$port = $_POST['port'];
$timeout = 5;
$fp = fsockopen($host, $port, $errno, $errstr, $timeout);
if (!$fp) {
    echo "เชื่อมต่อล้มเหลว: $errstr ($errno)";
} else {
    echo "เชื่อมต่อสำเร็จ!!!!!!";
    fclose($fp);
}
?>
