<?php
require_once ("../function/function.php");

?>

<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--구글 폰트-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jua&display=swap" rel="stylesheet">
  <title>Menu - 메뉴</title>
</head>

<body>
  <style>
    * {
      font-family: 'Jua', sans-serif;
    }

    body {
      background-color: #202124;
      color: white;
    }

    hr {
      border-top: 3px solid rgb(255, 255, 255);
    }

    .h1 {
      font-size: 50px;
      -webkit-text-stroke: 4px rgb(0, 0, 0);
      color: rgb(255, 251, 0);
    }

    .h2 {
      font-size: 28px;
    }

    .h2-admin {
      font-size: 20px;
      color: red;
      text-decoration: underline;
    }

    footer {
      text-align: center;
    }

    .power-service-footer {
      font-size: 15px;
    }

    .power-service-footer-detail {
      color: #0056B3;
    }

    a {
      text-decoration: none;
      color: white;
    }
  </style>
  <div class="h1">Menu</div>
  <hr>
  <a href="https://swon.wonchan.net/">
    <div class="h2">메인 페이지</div>
  </a>
  <hr>
  <a href="https://swon.wonchan.net/notice/">
    <div class="h2">공지 사항</div>
  </a>
  <hr>
  <a href="https://swon.wonchan.net/unknown/">
    <div class="h2">익명 게시판</div>
  </a>
  <hr>
   <a href="http://swon.gen.ms.kr">
    <div class="h2">광주 송원중학교 홈페이지</div>
  </a>
  <hr>
     <a href="https://forms.gle/7Snah1bAzoh9n9Es9" target="_blank">
    <div class="h2">버그 신고(📢), 웹사이트 피드백</div>
  </a>
  <hr>
  <footer>

    <br>
    &copy; Developed, Designed with ❤️ by
    이원찬(개발), 윤어신(디자인), 이용우(도움)<br>
    현재 접속자 수:<!--https://whos.amung.us/을 이용하여 접속자수를 출력하세요!-->
  </footer>
  
</body>

</html>