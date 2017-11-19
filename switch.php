<?php
header("content-type:text/html;charset = utf-8");
$date = date("n");
switch ($date){
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12;
    echo "{$date}月有31天！";
    break;
    case 4:
    case 6:
    case 9:
    case 11:
        echo "{$date}月有30天！";
    break;
    case 2:
        echo"{$date}月有29天！！";
        break;
}

