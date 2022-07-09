<?php
require_once ("../function/function.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>웹사이트 서버에 문제가 생겼습니다.</title>
</head>
<body>
<div id="page">
  <div id="container">
    <h1>:(</h1>
    <h2>웹사이트 서버에 문제가 생겼습니다.</h2>
    <h2>
      <a href="https://swon.wonchan.net/" style="-webkit-text-decoration-line: underline; color: #FFFFFF; text-decoration: underline; ">메인 페이지로..</a></h2>
    <div id="details">
      <div id="qr">
        <div id="image">
          <img src="https://static-cdn.wonchan.net/swon/images/QR.png" alt="QR Code" />
        </div>
      </div>
      <div id="stopcode">
        <h5>이 문제와 가능한 수정 사항에 대한 자세한 내용은 다음을 참조 하세요.
          <br/>https://developer.mozilla.org/docs/Web/HTTP/Status/500</h4>

          <h5>Stop Code: 500 Internal Server Error</h5> 
          <h6>이 오류가 무엇이고 어떤 것을 나타내는지 아는 것 이라면, 저와 같이 만드는 것은 어때요? <a href="mailto::wonchan@wonchan.net">wonchan@wonchan.net</a></h6>
      </div>
    </div>
  </div>
</div>
<style>
  body {
    font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif;
    background: #3973aa;
    color: #fefeff;
    height: 100vh;
    margin: 0;
}

#page {
    display: table;
    height: 100%;
    margin: 0 auto;
    margin-top: -10px;
    width: 70%;
    font-size: 1.9vw;
}

#container {
    display: table-cell;
    vertical-align: middle;
}

h1,
h2,
h3,
h4,
h5 {
    font-weight: normal;
    padding: 0;
    margin: 25px 0;
    margin-top: 0;
    font-weight: 300;
}

h1 {
    font-size: 6.5em;
    margin-bottom: 10px;
}

h2 {
    font-size: 1.5em;
}

h4 {
    font-size: 1.4em;
    line-height: 1.5em;
}

h5 {
    line-height: 1.1em;
    font-size: 1.3em;
}

#details {
    display: flex;
    flex-flow: row;
    flex-wrap: nowrap;
    padding-top: 10px;
}

#qr {
    flex: 0 1 auto;
}

#image {
    background: white;
    padding: 5px;
    line-height: 0;
}

#image img {
    width: 9.8em;
    height: 9.8em;
}

#stopcode {
    padding-left: 10px;
    flex: 1 1 auto;
}

@media (min-width: 840px) {
    #page {
        font-size: 140%;
        width: 800px;
    }
}
  </style>
</body>
</html>