<?php
// 網頁要先打開session1之後2才有反應
session_start();

$name = 'yamada';
$age = 30;

$_SESSION['name'] = $name;
$_SESSION['age'] = $age;

$sid = session_id();
echo $sid;