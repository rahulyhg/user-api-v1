<?php

include_once 'include.php';

$params = array(
    'start' => '2016-01-01 00:00:00',
    'end' => '2016-01-31 00:00:00',
//    'version' => 2
);

$zd = new \Zadarma_API\Client(KEY, SECRET);
$answer = $zd->call('/v1/statistics/pbx/', $params);
$answerObject = json_decode($answer);

if ($answerObject->status == 'success') {
    print_r($answerObject->stats);
} else {
    echo $answerObject->message;
}
