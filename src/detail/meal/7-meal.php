

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
      html { font-family:Calibri, Arial, Helvetica, sans-serif; font-size:11pt; background-color: #EEEEEE; }
      body { text-align: center;}
      a.comment-indicator:hover + div.comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em }
      a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em }
      div.comment { display:none }
      table { border-collapse:collapse; page-break-after:always }
      .gridlines td { border:1px dotted black }
      .gridlines th { border:1px dotted black }
      .b { text-align:center }
      .e { text-align:center }
      .f { text-align:right }
      .inlineStr { text-align:left }
      .n { text-align:right }
      .s { text-align:left }
      td.style0 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'맑은 고딕'; font-size:11pt; background-color: #EEEEEE }
      th.style0 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'맑은 고딕'; font-size:11pt; background-color:#EEEEEE }
      td.style1 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'휴먼모음T'; font-size:12pt; background-color:#A5B6CA }
      th.style1 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'휴먼모음T'; font-size:12pt; background-color:#A5B6CA }
      td.style2 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'맑은 고딕'; font-size:8pt; background-color:#D2DAE4 }
      th.style2 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'맑은 고딕'; font-size:8pt; background-color:#D2DAE4 }
      td.style3 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'맑은 고딕'; font-size:8pt; background-color:#D2DAE4 }
      th.style3 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'맑은 고딕'; font-size:8pt; background-color:#D2DAE4 }
      td.style4 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'맑은 고딕'; font-size:8pt; background-color:#EEEEEE }
      th.style4 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'맑은 고딕'; font-size:8pt; background-color:#EEEEEE }
      td.style5 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'맑은 고딕'; font-size:8pt; background-color:#EEEEEE }
      th.style5 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'맑은 고딕'; font-size:8pt; background-color:#EEEEEE }
      td.style6 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'맑은 고딕'; font-size:8pt; background-color:#EEEEEE }
      th.style6 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'맑은 고딕'; font-size:8pt; background-color:#EEEEEE }
      td.style7 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'맑은 고딕'; font-size:10pt; background-color:#EEEEEE }
      th.style7 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'맑은 고딕'; font-size:10pt; background-color:#EEEEEE }
      td.style8 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'휴먼모음T'; font-size:14pt; background-color:#FFFFCC }
      th.style8 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'휴먼모음T'; font-size:14pt; background-color:#FFFFCC }
      td.style9 { vertical-align:top; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'휴먼모음T'; font-size:9pt; background-color:#EEEEEE }
      th.style9 { vertical-align:top; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'휴먼모음T'; font-size:9pt; background-color:#EEEEEE }
      td.style10 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'맑은 고딕'; font-size:8.5pt; background-color:#EEEEEE }
      th.style10 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'맑은 고딕'; font-size:8.5pt; background-color:#EEEEEE }
      td.style11 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'휴먼엑스포'; font-size:18pt; background-color:#EEEEEE }
      th.style11 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'휴먼엑스포'; font-size:18pt; background-color:#EEEEEE }
      table.sheet0 col.col0 { width:42.69999951pt }
      table.sheet0 col.col1 { width:111.15555428pt }
      table.sheet0 col.col2 { width:111.15555428pt }
      table.sheet0 col.col3 { width:111.15555428pt }
      table.sheet0 col.col4 { width:111.15555428pt }
      table.sheet0 col.col5 { width:111.15555428pt }
      table.sheet0 tr { height:15pt }
      table.sheet0 tr.row0 { height:33pt }
      table.sheet0 tr.row1 { height:30pt }
      table.sheet0 tr.row2 { height:147pt }
      table.sheet0 tr.row3 { height:147pt }
      table.sheet0 tr.row4 { height:147pt }
      table.sheet0 tr.row5 { height:147pt }
      table.sheet0 tr.row6 { height:147pt }
      table.sheet0 tr.row7 { height:9.75pt }
      table.sheet0 tr.row8 { height:178.5pt }
    </style>
  </head>

  <body>
<style>
@page { margin-left: 0.39370078740157in; margin-right: 0.39370078740157in; margin-top: 0.29in; margin-bottom: 0.29in; }
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
            <th class="column0 style11 s style11" colspan="6">[송원중학교 7월 식단계획표]</th>
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
            <td class="column1 style9 null"></td>
            <td class="column2 style9 null"></td>
            <td class="column3 style9 null"></td>
            <td class="column4 style9 null"></td>
            <td class="column5 style9 s">1<br />
[중식]<br />
친환경흑미밥<br />
소고기무두부국(5.6.9.13.16.)<br />
단배추나물(5.6.)<br />
오이도토리묵무침(5.6.13.18.)<br />
대패삼겹&amp;숙주볶음(5.6.10.13.18.)<br />
열무김치(9.13.)<br />
오렌지주스3(13.)<br />
* 에너지/단백질/칼슘/철 <br />
637.7/31.7/215.6/3.7</td>
          </tr>
          <tr class="row3">
            <td class="column0 style8 s">둘째주</td>
            <td class="column1 style9 s">4<br />
[중식]<br />
친환경통밀쌀밥(6.)<br />
실파계란국(1.9.13.18.)<br />
단호박돼지갈비찜(5.6.10.13.)<br />
쫄면&amp;군만두(1.2.5.6.10.13.16.)<br />
열무된장무침(5.6.13.)<br />
배추김치(9.13.)<br />
제주감귤쫀드기(5.13.)<br />
* 에너지/단백질/칼슘/철 <br />
629.6/31.8/210.1/6.9</td>
            <td class="column2 style9 s">5<br />
[중식]<br />
무항생제오리훈제마늘볶음밥(13.)<br />
등뼈감자탕(5.6.9.10.13.)<br />
묵은지고등어조림(7.9.13.)<br />
손만두찜(1.5.6.10.18.)<br />
열무김치(9.13.)<br />
바나나<br />
* 에너지/단백질/칼슘/철 <br />
722.4/35/305.7/11.5</td>
            <td class="column3 style9 s">6<br />
1학기 기말고사</td>
            <td class="column4 style9 s">7<br />
1학기 기말고사</td>
            <td class="column5 style9 s">8<br />
1학기 기말고사</td>
          </tr>
          <tr class="row4">
            <td class="column0 style8 s">셋째주</td>
            <td class="column1 style9 s">11<br />
[중식]<br />
친환경흑미밥<br />
통계란어묵국(1.5.6.9.13.)<br />
파프리카감자볶음(6.10.13.)<br />
자반볶음<br />
밀떡볶이(1.2.5.6.10.12.13.)<br />
배추김치(9.13.)<br />
포도음료(13.)<br />
* 에너지/단백질/칼슘/철 <br />
738.8/26.1/188.4/3.8</td>
            <td class="column2 style9 s">12<br />
[중식]<br />
찜닭덮밥(5.13.15.)<br />
순두부계란국(1.5.9.13.)<br />
조청지리멸치볶음(4.5.6.13.)<br />
칠리탕수(1.5.6.10.12.13.15.)<br />
배추김치(9.13.)<br />
수박<br />
* 에너지/단백질/칼슘/철 <br />
752.7/29.6/221.4/10.2</td>
            <td class="column3 style9 s">13<br />
[중식]<br />
친환경혼합10곡밥(5.)<br />
맑은콩나물국(5.6.9.13.)<br />
오이크래미연겨자샐러드(1.5.6.13.16.18.)<br />
얼갈이된장무침(5.6.14.16.18.)<br />
김치치즈함박(1.2.5.6.9.10.12.13.15.16.)<br />
열무김치(9.13.)/꿀미니건빵(1.2.5.6.13.)/* 에너지/단백질/칼슘/철 <br />
658.5/28.8/375.2/5.8</td>
            <td class="column4 style9 s">14<br />
[중식]<br />
친환경귀리밥<br />
5무햄부대찌개(1.2.5.6.9.10.13.)<br />
꼬시래기오이무침(5.6.13.)<br />
배추겉절이(5.6.13.)<br />
돼지갈비무조림(5.6.10.13.)<br />
타코야끼(1.5.6.12.13.18.)<br />
깍두기(9.13.)<br />
* 에너지/단백질/칼슘/철 <br />
770.7/37.3/304.6/5.3</td>
            <td class="column5 style9 s">15<br />
[중식]<br />
친환경발아현미밥<br />
물냉면/계란(1.3.5.6.9.13.)<br />
미니비빔만두(1.5.6.10.13.16.18.)<br />
진미채아몬드볶음(1.5.6.13.)<br />
배추김치(9.13.)<br />
미니토마토(12.)<br />
* 에너지/단백질/칼슘/철 <br />
831.2/34.1/200.3/7.8</td>
          </tr>
          <tr class="row5">
            <td class="column0 style8 s">넷째주</td>
            <td class="column1 style9 s">18<br />
[중식]<br />
친환경보리밥<br />
동태탕(5.6.9.13.18.)<br />
깻잎순나물(5.6.13.)<br />
무항생제탄두리순살바베큐(5.10.)<br />
배추김치(9.13.)<br />
에그마요네즈샌드위치(1.2.5.6.13.)<br />
쌈배추/쌈장(5.6.)<br />
* 에너지/단백질/칼슘/철 <br />
896.6/73.5/296.3/5.7</td>
            <td class="column2 style9 s">19<br />
[중식]<br />
친환경통밀쌀밥(6.)<br />
닭곰탕/소면(1.5.6.9.13.15.)<br />
소고기감자조림(5.6.13.16.)<br />
동그랑땡&amp;케첩(1.5.6.10.12.)<br />
배추김치(9.13.)<br />
파인애플스틱<br />
* 에너지/단백질/칼슘/철 <br />
752.2/37.4/115.3/5.3</td>
            <td class="column3 style9 s">20<br />
[중식]<br />
돈까스덮밥2(1.5.6.10.13.)<br />
참치김치찌개(5.9.13.)<br />
양배추콘슬로우(1.5.13.)<br />
어묵무침(1.5.6.13.18.)<br />
배추김치(9.13.)<br />
꼬들오이무채장아찌<br />
* 에너지/단백질/칼슘/철 <br />
870/29.1/233.2/5.9</td>
            <td class="column4 style9 s">21<br />
여름 방학식</td>
            <td class="column5 style9 s">22<br />
</td>
          </tr>
          <tr class="row6">
            <td class="column0 style8 s">다섯째주</td>
            <td class="column1 style9 s">25<br />
</td>
            <td class="column2 style9 s">26<br />
</td>
            <td class="column3 style9 s">27<br />
</td>
            <td class="column4 style9 s">28<br />
</td>
            <td class="column5 style9 s">29<br />
</td>
          </tr>
        </tbody>
    </table>
  </center>
  </body>
</html>
