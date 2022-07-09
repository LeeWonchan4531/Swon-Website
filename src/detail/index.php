<?php
require_once ("../function/function.php");
require_once ("../function/function_parameter.php");
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>교육행정정보시스템(나이스)에서 시간표, 학사 일정 등 정보 가져오는 중 입니다.</title>


<?php

    //php 페이지 리다이렉트
    $mobile_agent = "/(iPod|iPhone|iPad)/";

    if (preg_match($mobile_agent, $_SERVER['HTTP_USER_AGENT'])) {
        echo ' <meta http-equiv="refresh" content="2; url=main.php?grade=' . $grade . '&class=' .  $class . '">'; //모바일
    } else {
        echo ' <meta http-equiv="refresh" content="0.1; url=main.php?grade=' . $grade . '&class=' .  $class . '">';
    }
    ?>





</head>

<body>
    <h4>교육행정정보시스템(나이스)에서 시간표, 학사 일정 등을 가져오는 중입니다. </h4>
    <hr>
    <h3>잠시만 기다려 주세요.</h3>
    <?php  //php 페이지 리다이렉트
    $mobile_agent = "/(iPod|iPhone|iPad)/";

    if (preg_match($mobile_agent, $_SERVER['HTTP_USER_AGENT'])) {
        echo "<h4 style='color: red;'>아이폰(아이패드)의 네이버 앱을 사용하시면 웹페이지가 잘 표시 되지 안을 수 있으니 Safari(사파리)나 Chrome(크롬)을 이용해주시기를 바랍니다.</h4>";
    }
    ?>
    <img src="https://static-cdn.wonchan.net/swon/images/loading.svg">
    <style>
        body {
            background-color: black;
            text-align: center;
            color: white;
        }
    </style>

</body>

</html>