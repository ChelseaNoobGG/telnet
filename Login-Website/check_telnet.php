<?php
$host = "maildev"; // หรือ IP address ของ MailDev Docker Container ของคุณ
$port = 1080; // Port ของ MailDev SMTP server

$timeout = 5;
$fp = @fsockopen($host, $port, $errno, $errstr, $timeout);
if (!$fp) {
    echo "error";
} else {
    echo "success";
    fclose($fp);
}
?>
