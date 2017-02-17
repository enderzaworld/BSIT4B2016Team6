<?php
include "smsGateway.php"
$smsGateway = new SmsGateway('demo@smsgateway.me', 'password')

$deviceID = 1;
$number = '+44771232343';
$message = 'Hello World!';

$result = $smsGateway->sendMessageToNumber($number, $message, $deviceID);
?>