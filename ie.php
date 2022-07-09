<?php
if (preg_match('/MSIE|Internet Explorer|Trident/i', $_SERVER['HTTP_USER_AGENT'])) {
  echo '<!DOCTYPE html>
    <html lang="ko">
    
    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>지원되지 않는 브라우저 입니다. - 브라우저를 업데이트 해주세요!</title>
      <script>
      
      setTimeout(function () {
        window.location = "microsoft-edge:https://swon.wonchan.net' . $_SERVER['REQUEST_URI'] . '";
      }, 50);
      </script>
      
    </head>
    
    <body>
      <style>
        .header {
          width: 100%;
          height: 84px;
          border-bottom: 1px solid #F1F1F1;
          padding-top: 30px;
          padding-left: 50px;
          margin-bottom: 150px;
        }
    
        .logo {
          width: 180px;
          height: 24px;
        }
    
        .image-map {
          text-align: center;
        }
      </style>
      <div class="image-map">
<br><br><br><br>
        <img src="https://static-cdn.wonchan.net/swon/images/ie.png" usemap="#image-map" />
      </div>
    
      <map name="image-map">
        <area target="_blank" alt="Edge Download" title="Edge Download" href="https://www.microsoft.com/ko-kr/edge"
          coords="0,182,116,353" shape="rect">
        <area target="_blank" alt="Chrome Download" title="Chrome Download" href="https://www.google.com/chrome/"
          coords="182,180,295,353" shape="rect">
        <area target="_blank" alt="Firefox Download" title="Firefox Download" href="https://www.mozilla.org/ko-kr/firefox/"
          coords="365,179,475,353" shape="rect">
        <area target="_blank" alt="Opera Download" title="Opera Download" href="https://www.opera.com/ko"
          coords="544,180,649,353" shape="rect">
      </map>
    </body>
    
    </html>';
} else {
  header('HTTP/1.1 301 Moved Permanently');
  header('Location: https://swon.wonchan.net/');
}

?>
