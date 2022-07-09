<?php

require_once ("../function/function.php");
require_once ("../function/function_today.php");
require_once ("../function/function_parameter.php");


?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--css 연결-->
    <link rel="stylesheet" href="https://static-cdn.wonchan.net/swon/css/style.css">
    <!--메뉴-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
    <!--google-font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jua&display=swap" rel="stylesheet">
    <title>시간표, 학사일정</title>
</head>

<body>

    <header>
        <h4>여름 방학 시작 까지:<?php if ($day) echo "$day"; ?>일
            <?php if ($hr) echo "$hr"; ?>시간
            <?php if ($min) echo "$min"; ?>분
            <?php if ($sec) echo "$sec"; ?> 초 <br>
            <?php echo "여름 방학 시작 까지 "; ?>
            <?php echo $day * 24 + $hr .  "시간 ";
            echo $min . "분 " . $sec . "초 " . " 남음"; ?></h4>
        <nav>
            <span>
                <a href="aside.php" style="color: white;"> 메뉴</a>
            </span>
        </nav>
    </header>

    <main>
        <div class="grid">
            <div class="h1">시간표</div>
            <div class="h6"> <?php echo "현재시간: " . $datetime; ?></div>
            <table border="1">
                <tr>
                    <td>교시</td>
                    <td>과목</td>
                </tr>
                <tr>
                    <!--1교시-->
                    <td>1교시</td>
                    <td><?php echo $xml1->row[0]->ITRT_CNTNT; ?></td>
                </tr>
                <tr>
                    <!--2교시-->
                    <td>2교시</td>
                    <td><?php echo $xml2->row[0]->ITRT_CNTNT; ?></td>
                </tr>
                <tr>
                    <!--3교시-->
                    <td>3교시</td>
                    <td><?php echo $xml3->row[0]->ITRT_CNTNT; ?></td>
                </tr>
                <tr>
                    <!--4교시-->
                    <td>4교시</td>
                    <td><?php echo $xml4->row[0]->ITRT_CNTNT; ?></td>
                </tr>
                <tr>
                    <!--5교시-->
                    <td>5교시</td>
                    <td><?php echo $xml5->row[0]->ITRT_CNTNT; ?></td>
                </tr>
                <tr>
                    <!--6교시-->
                    <td>6교시</td>
                    <td><?php echo $xml6->row[0]->ITRT_CNTNT; ?></td>
                </tr>
                <tr>
                    <!--7교시-->
                    <td>7교시</td>
                    <td><?php echo $xml7->row[0]->ITRT_CNTNT; ?></td>
                </tr>
            </table>
        </div>
        <div class="h6"><a href="https://swon.wonchan.net/detail/time/?grade=<?php echo $_GET['grade'];?>&class=<?php echo $_GET['class'];?>">내일(전체) 시간표 보기</a></div>
        <br>
        <br>
        <div class="h1">급식표</div>

        <?php  //php 페이지 리다이렉트
        $mobile_agent = "/(iPod|iPhone|Android|BlackBerry|SymbianOS|SCH-M\d+|Opera Mini|Windows CE|Nokia|SonyEricsson|webOS|PalmOS)/";

        if (preg_match($mobile_agent, $_SERVER['HTTP_USER_AGENT'])) {
            echo '   <div class="h6">양 옆으로 밀면 수요일, 목요일, 금요일 식사를 볼 수 있습니다.</div>'; //모바일
        }
        ?>

        <hr>
        <iframe src="meal/7-meal.php" width="96%" onload="this.style.height=(this.contentWindow.document.body.scrollHeight+30)+'px';" frameborder=0 framespacing=0 marginheight=0 marginwidth=0 scrolling=yes vspace=0></iframe>


        <?php
        //오늘
        $oneul = $xml8->row[0]->EVENT_NM;
        //내일
        $naeil = $xml9->row[0]->EVENT_NM;
        //모레
        $more = $xml10->row[0]->EVENT_NM;
        ?>



        <br><br>
        <div class="h1">학사일정</div>
        <hr>
        <br><br>
        <div class="h3-detail">오늘<br>
            <?php
            if (isset($oneul)) {
                echo $oneul;
            } else {
                echo "학사일정이 없음";
            }
            ?></div><br><br>
        <div class="h3-detail-2">내일<br>
            <?php
            if (isset($naeil)) {
                echo $naeil;
            } else {
                echo "학사일정이 없음";
            }
            ?></div><br><br>
        <div class="h3-detail-3">모레<br>
            <?php
            if (isset($more)) {
                echo $more;
            } else {
                echo "학사일정이 없음";
            }
            ?></div>
        <br><br>
        <div class="h6"><a href="https://swon.wonchan.net/detail/school-sch/">전체 학사일정 보기</a></div>
        <br><br>
        <hr>

        &copy; Developed, Designed with ❤️ by
        이원찬(개발), 윤어신(디자인), 이용우(도움)
        <div class="power-service-footer">
현재 접속자 수:<!--https://whos.amung.us/을 이용하여 접속자수를 출력하세요!-->
        </div><br>


    </main>

</body>

</html>
