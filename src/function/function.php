<?php
//IE 일경우 리다이렉트
    if (preg_match('/MSIE|Internet Explorer|Trident/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: https://swon.wonchan.net/ie.php');
    }

// 디데이
    $rem = strtotime('2022-07-21 13:10:00') - time(); //디데이 날짜 설정
    $day = floor($rem / 86400);
    $hr  = floor(($rem % 86400) / 3600);
    $min = floor(($rem % 3600) / 60);
    $sec = ($rem % 60);

