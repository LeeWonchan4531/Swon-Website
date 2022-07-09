<?php
if (preg_match('/MSIE|Internet Explorer|Trident/i', $_SERVER['HTTP_USER_AGENT'])) {
  header('HTTP/1.1 301 Moved Permanently');
  header('Location: https://swon.wonchan.net/ie.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="generator" content="PhpSpreadsheet, https://github.com/PHPOffice/PhpSpreadsheet">
  <meta name="author" content="user" />
  <meta name="company" content="Microsoft Corporation" />
  <style type="text/css">
    html {
      font-family: Calibri, Arial, Helvetica, sans-serif;
      font-size: 11pt;
      background-color: #EEEEEE;
    }

    body {
      text-align: center;
      background-color: #EEEEEE;
    }

    a.comment-indicator:hover+div.comment {
      background: #ffd;
      position: absolute;
      display: block;
      border: 1px solid black;
      padding: 0.5em
    }

    a.comment-indicator {
      background: red;
      display: inline-block;
      border: 1px solid black;
      width: 0.5em;
      height: 0.5em
    }

    div.comment {
      display: none
    }

    table {
      border-collapse: collapse;
      page-break-after: always
    }

    .gridlines td {
      border: 1px dotted black
    }

    .gridlines th {
      border: 1px dotted black
    }

    .b {
      text-align: center
    }

    .e {
      text-align: center
    }

    .f {
      text-align: right
    }

    .inlineStr {
      text-align: left
    }

    .n {
      text-align: right
    }

    .s {
      text-align: left
    }

    td.style0 {
      vertical-align: middle;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: '맑은 고딕';
      font-size: 11pt;
      background-color: #EEEEEE;
    }

    th.style0 {
      vertical-align: middle;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: '맑은 고딕';
      font-size: 11pt;
      background-color: #EEEEEE;
    }

    td.style1 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: '휴먼모음T';
      font-size: 12pt;
      background-color: #A5B6CA
    }

    th.style1 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: '휴먼모음T';
      font-size: 12pt;
      background-color: #A5B6CA
    }

    td.style2 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: '맑은 고딕';
      font-size: 8pt;
      background-color: #D2DAE4
    }

    th.style2 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: '맑은 고딕';
      font-size: 8pt;
      background-color: #D2DAE4
    }

    td.style3 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: '맑은 고딕';
      font-size: 8pt;
      background-color: #D2DAE4
    }

    th.style3 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: '맑은 고딕';
      font-size: 8pt;
      background-color: #D2DAE4
    }

    td.style4 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: '맑은 고딕';
      font-size: 8pt;
      background-color: #EEE;
    }

    th.style4 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: '맑은 고딕';
      font-size: 8pt;
      background-color: #EEE;
    }

    td.style5 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: '맑은 고딕';
      font-size: 8pt;
      background-color: #EEE;
    }

    th.style5 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: '맑은 고딕';
      font-size: 8pt;
      background-color: #EEE;
    }

    td.style6 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: '맑은 고딕';
      font-size: 8pt;
      background-color: #EEE;
    }

    th.style6 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      font-weight: bold;
      color: #000000;
      font-family: '맑은 고딕';
      font-size: 8pt;
      background-color: #EEE;
    }

    td.style7 {
      vertical-align: middle;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: '맑은 고딕';
      font-size: 10pt;
      background-color: #EEE;
    }

    th.style7 {
      vertical-align: middle;
      border-bottom: none #000000;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      color: #000000;
      font-family: '맑은 고딕';
      font-size: 10pt;
      background-color: #EEE;
    }

    td.style8 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: '휴먼모음T';
      font-size: 14pt;
      background-color: #FFFFCC
    }

    th.style8 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: '휴먼모음T';
      font-size: 14pt;
      background-color: #FFFFCC
    }

    td.style9 {
      vertical-align: top;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: '휴먼모음T';
      font-size: 9pt;
      background-color: #EEE;
    }

    th.style9 {
      vertical-align: top;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: '휴먼모음T';
      font-size: 9pt;
      background-color: #EEE;
    }

    td.style10 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: '맑은 고딕';
      font-size: 8.5pt;
      background-color: #EEE;
    }

    th.style10 {
      vertical-align: middle;
      text-align: left;
      padding-left: 0px;
      border-bottom: 1px solid #000000 !important;
      border-top: 1px solid #000000 !important;
      border-left: 1px solid #000000 !important;
      border-right: 1px solid #000000 !important;
      color: #000000;
      font-family: '맑은 고딕';
      font-size: 8.5pt;
      background-color: #EEE;
    }

    td.style11 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: '휴먼엑스포';
      font-size: 18pt;
      background-color: #EEE;
    }

    th.style11 {
      vertical-align: middle;
      text-align: center;
      border-bottom: 1px solid #000000 !important;
      border-top: none #000000;
      border-left: none #000000;
      border-right: none #000000;
      font-weight: bold;
      color: #000000;
      font-family: '휴먼엑스포';
      font-size: 18pt;
      background-color: #EEE;
    }

    table.sheet0 col.col0 {
      width: 42.69999951pt
    }

    table.sheet0 col.col1 {
      width: 111.15555428pt
    }

    table.sheet0 col.col2 {
      width: 111.15555428pt
    }

    table.sheet0 col.col3 {
      width: 111.15555428pt
    }

    table.sheet0 col.col4 {
      width: 111.15555428pt
    }

    table.sheet0 col.col5 {
      width: 111.15555428pt
    }

    table.sheet0 tr {
      height: 15pt
    }

    table.sheet0 tr.row0 {
      height: 33pt
    }

    table.sheet0 tr.row1 {
      height: 30pt
    }

    table.sheet0 tr.row2 {
      height: 147pt
    }

    table.sheet0 tr.row3 {
      height: 147pt
    }

    table.sheet0 tr.row4 {
      height: 147pt
    }

    table.sheet0 tr.row5 {
      height: 147pt
    }

    table.sheet0 tr.row6 {
      height: 147pt
    }

    table.sheet0 tr.row7 {
      height: 9.75pt
    }

    table.sheet0 tr.row8 {
      height: 178.5pt
    }
  </style>
</head>

<body>
  <style>
    @page {
      margin-left: 0.39370078740157in;
      margin-right: 0.39370078740157in;
      margin-top: 0.29in;
      margin-bottom: 0.29in;
    }

    body {
      text-align: center;
    }
  </style>
  <center>
    <table border="0" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0 gridlines">
      <col class="col0">
      <col class="col1">
      <col class="col2">
      <col class="col3">
      <col class="col4">
      <col class="col5">
      <thead>
        <tr class="row0">
          <th class="column0 style11 s style11" colspan="6">[송원중학교 5월 식단계획표]</th>
        </tr>
        <tr class="row1">
          <th class="column0 style1 null"></th>
          <th class="column1 style1 s">월요일</th>
          <th class="column2 style1 s">화요일</th>
          <th class="column3 style1 s">수요일</th>
          <th class="column4 style1 s">목요일</th>
          <th class="column5 style1 s">금요일</th>
        </tr>
      </thead>
      <tbody>
        <tr class="row2">
          <td class="column0 style8 s">첫째주</td>
          <td class="column1 style9 s">2<br />
            [중식]<br />
            김치제육덮밥(5.6.9.10.13.)<br />
            순두부계란국(1.5.9.13.)<br />
            새우부추찐만두/양념장(1.5.6.9.10.17.)<br />
            콩나물겨자냉채(1.5.6.13.)<br />
            깍두기(9.13.)<br />
            사과(13.)<br />
            * 에너지/단백질/칼슘/철 <br />
            602.3/32.1/142.9/3.5</td>
          <td class="column2 style9 s">3<br />
            [중식]<br />
            친환경발아현미밥<br />
            5무햄부대찌개(1.2.5.6.9.10.13.)<br />
            꽃맛살과일샐러드(1.2.5.12.13.)<br />
            언양식육전&amp;부추무침(1.2.5.6.10.13.18.)<br />
            열무김치(9.13.)<br />
            톡톡레모나(13.)<br />
            * 에너지/단백질/칼슘/철 <br />
            675/26.8/199.7/6.9</td>
          <td class="column3 style9 s">4<br />
            [중식]<br />
            친환경찹쌀밥(부)<br />
            순대국밥(5.6.9.10.13.)<br />
            오이크래미연겨자샐러드(1.5.6.13.16.18.)<br />
            매콤떡볶이(1.2.5.6.10.12.13.)<br />
            깍두기(9.13.)<br />
            돈육불고기버거&amp;자두음료(1.2.5.6.10.12.13.15.16.)<br />
            * 에너지/단백질/칼슘/철 <br />
            837.5/26/240.3/7</td>
          <td class="column4 style9 s">5<br />
          </td>
          <td class="column5 style9 s">6<br />
          </td>
        </tr>
        <tr class="row3">
          <td class="column0 style8 s">둘째주</td>
          <td class="column1 style9 s">9<br />
            [중식]<br />
            친환경보리밥<br />
            등뼈감자탕(5.6.9.10.13.)<br />
            새송이애호박볶음(9.13.)<br />
            얇은궁중떡볶이(5.6.13.16.)<br />
            오징어김치전(1.2.5.6.9.13.17.)<br />
            배추김치(9.13.)<br />
            블루베리음료(13.)<br />
            * 에너지/단백질/칼슘/철 <br />
            731.9/26.4/225.9/4.6</td>
          <td class="column2 style9 s">10<br />
            [중식]<br />
            친환경찹쌀밥(부)<br />
            야채크림스프(2.5.6.13.)<br />
            무말랭이무침(5.6.13.18.)<br />
            파스타샐러드(주식)(1.2.5.6.12.13.)<br />
            배추김치(9.13.)<br />
            미니함박/소스(1.2.5.6.10.12.13.18.)<br />
            * 에너지/단백질/칼슘/철 <br />
            691.4/23.3/142.7/3.5</td>
          <td class="column3 style9 s">11<br />
            [중식]<br />
            친환경흑미밥<br />
            참치김치두부국(5.9.13.)<br />
            매콤갈비당면찜(5.6.10.13.)<br />
            단배추나물(5.6.)<br />
            고등어카레구이(2.5.6.7.13.)<br />
            깍두기(9.13.)<br />
            파인애플스틱<br />
            * 에너지/단백질/칼슘/철 <br />
            723.8/39.1/205.8/4.9</td>
          <td class="column4 style9 s">12<br />
            [중식]<br />
            친환경통밀쌀밥(6.)<br />
            교자만두국(1.2.5.6.9.10.13.16.18.)<br />
            시금치나물(5.6.13.)<br />
            콩나물닭정육고추장불고기(5.6.13.15.)<br />
            어묵야채볶음(1.5.6.13.)<br />
            배추김치(9.13.)<br />
            찹쌀도너츠(1.2.5.6.13.)<br />
            * 에너지/단백질/칼슘/철 <br />
            739.3/42.7/205.2/4.1</td>
          <td class="column5 style9 s">13<br />
            [중식]<br />
            열무비빔밥/약고추장(5.6.9.10.13.)<br />
            감자호박된장국(5.6.9.13.)<br />
            수육/모듬쌈채소/쌈장(5.6.10.)<br />
            유자청톳초무침(5.6.13.)<br />
            깻잎김치(9.13.)<br />
            감사케익(1.2.5.6.10.13.)<br />
            * 에너지/단백질/칼슘/철 <br />
            847.1/62.4/325.9/7.6</td>
        </tr>
        <tr class="row4">
          <td class="column0 style8 s">셋째주</td>
          <td class="column1 style9 s">16<br />
            [중식]<br />
            친환경귀리밥<br />
            맑은콩나물국(5.6.9.13.)<br />
            오이상추겉절이(9.13.)<br />
            파프리카감자볶음(6.10.13.)<br />
            치즈불닭(2.5.6.13.15.)<br />
            배추김치(9.13.)<br />
            화이트슈2(1.2.5.6.13.)<br />
            * 에너지/단백질/칼슘/철 <br />
            722.9/36.6/295.8/3.9</td>
          <td class="column2 style9 s">17<br />
            [중식]<br />
            친환경찹쌀밥(부)<br />
            치자잔치국수(1.5.6.9.13.)<br />
            토마토황도샐러드/오리엔탈드레(5.6.11.12.13.18.)<br />
            얼갈이된장무침(5.6.14.16.18.)<br />
            떡순대강정(1.2.4.5.6.10.12.13.16.)<br />
            깍두기(9.13.)<br />
            * 에너지/단백질/칼슘/철 <br />
            653.9/18.5/205.2/4.2</td>
          <td class="column3 style9 s">18<br />
            [중식]<br />
            자반주먹밥(2.6.10.13.)<br />
            짬뽕국(1.5.6.9.10.13.17.18.)<br />
            새콤콩나물무침(5.13.)<br />
            LA식돼지갈비(5.6.10.13.)<br />
            배추김치(9.13.)<br />
            애플망고워터젤리(13.)<br />
            * 에너지/단백질/칼슘/철 <br />
            780/55.2/209.1/4.7</td>
          <td class="column4 style9 s">19<br />
            [중식]<br />
            치킨데리야끼볶음밥(5.6.13.15.)<br />
            애호박찌개(5.6.9.10.13.)<br />
            배무생채(13.)<br />
            진미채아몬드볶음(1.5.6.13.)<br />
            해물완자(1.2.5.6.9.13.17.)<br />
            배추김치(9.13.)<br />
            미니토마토(12.)<br />
            * 에너지/단백질/칼슘/철 <br />
            577/40.4/142.7/6.5</td>
          <td class="column5 style9 s">20<br />
            [중식]<br />
            참치김치덮밥(9.13.)<br />
            노랑잡채물만두국(1.5.6.9.10.13.16.18.)<br />
            미역국수초무침(5.6.13.)<br />
            통살새우까스/소스(1.2.5.6.9.13.)<br />
            열무김치(9.13.)<br />
            옛날단무지무침<br />
            * 에너지/단백질/칼슘/철 <br />
            717/26.4/273.6/4</td>
        </tr>
        <tr class="row5">
          <td class="column0 style8 s">넷째주</td>
          <td class="column1 style9 s">23<br />
            [중식]<br />
            친환경통밀쌀밥(6.)<br />
            얼큰소고기무국(5.6.9.13.16.18.)<br />
            돼지등뼈당면찜(5.6.8.10.13.)<br />
            삼색묵무침(5.6.13.)<br />
            배추김치(9.13.)/요구르트(2.)<br />
            통새우피자빵(1.2.5.6.9.10.12.13.16.18.)<br />
            * 에너지/단백질/칼슘/철 <br />
            868/33.5/350.6/4.1</td>
          <td class="column2 style9 s">24<br />
            [중식]<br />
            중화풍볶음밥(1.5.6.13.)<br />
            호박고추장찌개(5.6.9.10.13.)<br />
            유산슬(5.6.9.10.12.13.17.18.)<br />
            탕수냉채(1.4.5.6.10.12.13.15.)<br />
            배추김치(9.13.)<br />
            아이스망고<br />
            * 에너지/단백질/칼슘/철 <br />
            765.3/37/167.3/11.8</td>
          <td class="column3 style9 s">25<br />
            [중식]<br />
            친환경발아현미밥<br />
            닭미역국(5.6.9.13.15.)<br />
            치즈어묵바/머스터드(1.2.5.6.13.)<br />
            돼지불고기&amp;파채무침(5.6.10.13.)<br />
            애호박양파전(1.5.6.13.)<br />
            배추김치(9.13.)<br />
            * 에너지/단백질/칼슘/철 <br />
            661.8/39.8/152.9/3.5</td>
          <td class="column4 style9 s">26<br />
            [중식]<br />
            친환경찹쌀밥(부)<br />
            얼갈이된장국(5.6.9.13.)<br />
            카레우동(2.5.6.10.13.)<br />
            상큼양배추샐러드(1.2.5.)<br />
            미니돈까스/케첩(1.2.5.6.10.11.12.13.)<br />
            배추김치(9.13.)<br />
            * 에너지/단백질/칼슘/철 <br />
            776/30.5/236.6/5</td>
          <td class="column5 style9 s">27<br />
            [중식]<br />
            친환경흑미밥<br />
            돼지갈비탕(1.5.6.9.10.13.)<br />
            묵은지닭볶음(5.6.9.13.15.)<br />
            콘샐러드(1.5.13.)<br />
            굴소스버섯볶음(5.6.9.13.)<br />
            깍두기(9.13.)<br />
            꿀떡(5.13.)<br />
            * 에너지/단백질/칼슘/철 <br />
            771.1/34.7/146.6/3.7</td>
        </tr>
        <tr class="row6">
          <td class="column0 style8 s">다섯째주</td>
          <td class="column1 style9 s">30<br />
            [중식]<br />
            대패삼겹살비빔밥(5.6.10.13.)<br />
            북어김치콩나물국(1.5.6.9.13.)<br />
            콘치즈계란찜(1.2.5.6.13.)<br />
            지리멸치고추장볶음(5.6.13.)<br />
            깍두기(9.13.)<br />
            비타한라봉(13.)<br />
            * 에너지/단백질/칼슘/철 <br />
            829.5/42.8/385.5/4.9</td>
          <td class="column2 style9 s">31<br />
            [중식]<br />
            친환경보리밥<br />
            감자수제비국(1.5.6.9.13.)<br />
            시금치초무침(5.6.13.)<br />
            애느타리버섯굴소스볶음(5.6.9.13.)<br />
            핫닭윙오븐구이(5.6.12.13.15.)<br />
            배추김치(9.13.)<br />
            미니딸기잼식빵튀김(1.2.5.6.13.)<br />
            * 에너지/단백질/칼슘/철 <br />
            709.9/35.5/174.8/4.1</td>
          <td class="column3 style9 null"></td>
          <td class="column4 style9 null"></td>
          <td class="column5 style9 null"></td>
        </tr>
      </tbody>
    </table>
  </center>
</body>

</html>