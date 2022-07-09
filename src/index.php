<?php

require_once ("function/function.php");
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--css연결-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jua&display=swap" rel="stylesheet">
    <link href="https://static-cdn.wonchan.net/swon/css/front.css" rel="stylesheet">
    <!--meta-->
    <meta name="description" content="광주 송원중학교 시간표 급식표 - 자신의 학년, 반을 선택해주세요.">
    <meta name="author" content="wonchan">
    <meta name="keywords" content="송원중학교">
    <meta name="subject" content="송원중학교">
    <meta name="Copyright" content=" ⓒ All Rights Reserved.">
    <meta property="og:type" content="website">
    <meta property="og:title" content="광주 송원중학교 시간표 급식표">
    <meta property="og:description" content="광주 송원중학교 시간표 급식표 - 자신의 학년, 반을 선택해주세요.">
    <meta property="og:image" content="https://static-cdn.wonchan.net/swon/images/liteide.png"/>
    <meta property="og:image:width" content="1200px" />
<meta property="og:image:height" content="600px" />
    <title>광주 송원중학교 시간표 급식표 - 자신의 학년, 반을 선택해주세요.</title>
</head>
<body>
<div class="X">
<h1>자신의 학년, 반을 선택해주세요.</h1>
<div style="text-align: center;">여름 방학 시작 까지:<?php if ($day) echo "$day"; ?>일
            <?php if ($hr) echo "$hr"; ?>시간
            <?php if ($min) echo "$min"; ?>분
            <?php if ($sec) echo "$sec"; ?> 초 <br>
            <?php echo "여름 방학 시작 까지 "; ?>
            <?php echo $day * 24 + $hr .  "시간 ";
            echo $min . "분 " . $sec . "초 " . " 남음"; ?></div>
<ul class="SG">
<li class="sgLi">
    <div class="box">
   <h3>Etc.(기타)</h3>
   <ul class="s3">
      <li><a href="https://swon.wonchan.net/notice/">공지사항(광고,개인정보 및 이용약관)</a></li>
      <li><a href="https://swon.wonchan.net/unknown/">익명 게시판</a></li>
      <li><a href="https://stats.uptimerobot.com/8ggzmUX7zl">서버 상태 (사건,사고 기록)</a></li></li>
      <li><a href="http://swon.gen.ms.kr">광주송원중학교 홈페이지</a></li>
      <li><a href="https://forms.gle/7Snah1bAzoh9n9Es9" target="_blank">버그 신고(📢), 웹사이트 피드백</a></li>
      <li>현재 접속자 수:<!--https://whos.amung.us/을 이용하여 접속자수를 출력하세요!--></li>
   </ul> 
    </div>
 </li>
  <li class="sgLi">
    <div class="box">
    <h3>1학년</h3>
    <ul class="df">
      <li><a href="https://swon.wonchan.net/detail/index.php?grade=1&class=1">1학년 1반</a></li>
      <li><a href="https://swon.wonchan.net/detail/index.php?grade=1&class=2">1학년 2반</a></li>
      <li><a href="https://swon.wonchan.net/detail/index.php?grade=1&class=3">1학년 3반</a></li>
      <li><a href="https://swon.wonchan.net/detail/index.php?grade=1&class=4">1학년 4반</a></li>
      <li><a href="https://swon.wonchan.net/detail/index.php?grade=1&class=5">1학년 5반</a></li>
      <li><a href="https://swon.wonchan.net/detail/index.php?grade=1&class=6">1학년 6반</a></li>
      <li><a href="https://swon.wonchan.net/detail/index.php?grade=1&class=7">1학년 7반</a></li>
      <li><a href="https://swon.wonchan.net/detail/index.php?grade=1&class=8">1학년 8반</a></li>
    </ul> 
  </div>
 </li> 
  <li class="sgLi">
    <div class="box">
   <h3>2학년</h3>
   <ul class="s1">
    <li><a href="https://swon.wonchan.net/detail/index.php?grade=2&class=1">2학년 1반</a></li>
    <li><a href="https://swon.wonchan.net/detail/index.php?grade=2&class=2">2학년 2반</a></li>
    <li><a href="https://swon.wonchan.net/detail/index.php?grade=2&class=3">2학년 3반</a></li>
    <li><a href="https://swon.wonchan.net/detail/index.php?grade=2&class=4">2학년 4반</a></li>
    <li><a href="https://swon.wonchan.net/detail/index.php?grade=2&class=5">2학년 5반</a></li>
    <li><a href="https://swon.wonchan.net/detail/index.php?grade=2&class=6">2학년 6반</a></li>
    <li><a href="https://swon.wonchan.net/detail/index.php?grade=2&class=7">2학년 7반</a></li>
    <li><a href="https://swon.wonchan.net/detail/index.php?grade=2&class=8">2학년 8반</a></li>
   </ul>
  </div>
 </li>
  <li class="sgLi">
    <div class="box">
   <h3>3학년</h3>
   <ul class="s2">
      <li><a href="https://swon.wonchan.net/detail/index.php?grade=3&class=1">3학년 1반</a></li>
      <li><a href="https://swon.wonchan.net/detail/index.php?grade=3&class=2">3학년 2반</a></li>
      <li><a href="https://swon.wonchan.net/detail/index.php?grade=3&class=3">3학년 3반</a></li>
      <li><a href="https://swon.wonchan.net/detail/index.php?grade=3&class=4">3학년 4반</a></li>
      <li><a href="https://swon.wonchan.net/detail/index.php?grade=3&class=5">3학년 5반</a></li>
      <li><a href="https://swon.wonchan.net/detail/index.php?grade=3&class=6">3학년 6반</a></li>
      <li><a href="https://swon.wonchan.net/detail/index.php?grade=3&class=7">3학년 7반</a></li>
      <li><a href="https://swon.wonchan.net/detail/index.php?grade=3&class=8">3학년 8반</a></li>
   </ul> 
    </div>
 </li>

</ul>


      <h4 style="text-align: center;"> 
       &copy; Developed, Designed with ❤️ by<br>
        이원찬(개발), 윤어신(디자인), 이용우(도움)
      </h4>      

</div>
</body>
</html>