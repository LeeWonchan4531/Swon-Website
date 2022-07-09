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
            background-color: #EEEEEE;
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
            background-color: #EEEEEE;
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
            background-color: #EEEEEE;
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
            background-color: #EEEEEE;
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
            background-color: #EEEEEE;
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
            background-color: #EEEEEE;
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
            background-color: #EEEEEE;
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
            background-color: #EEEEEE;
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
            background-color: #EEEEEE;
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
            background-color: #EEEEEE;
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
            background-color: #EEEEEE;
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
            background-color: #EEEEEE;
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
            background-color: #EEEEEE;
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
            background-color: #EEEEEE;
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
                    <th class="column0 style11 s style11" colspan="6">[송원중학교 6월 식단계획표]</th>
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
                    <td class="column3 style9 s">1<br />
                    </td>
                    <td class="column4 style9 s">2<br />
                        [중식]<br />
                        불고기볶음밥(2.5.6.10.13.16.)<br />
                        어묵국(1.5.6.9.13.)<br />
                        쫄면(5.6.13.16.)<br />
                        파프리카감자볶음(6.10.13.)<br />
                        배추김치(9.13.)<br />
                        자몽에이드(1.2.)<br />
                        * 에너지/단백질/칼슘/철 <br />
                        646.6/23.9/179.1/5.9</td>
                    <td class="column5 style9 s">3<br />
                        [중식]<br />
                        친환경통밀쌀밥(6.)<br />
                        쇠고기미역국(5.6.9.13.16.)<br />
                        사과드레싱샐러드(1.2.5.13.)<br />
                        묵은지어묵볶음(1.5.6.9.)<br />
                        로제치킨까스(1.2.5.6.10.12.13.15.18.)<br />
                        깍두기(9.13.)/밤맛만쥬(1.2.6.13.)<br />
                        * 에너지/단백질/칼슘/철 <br />
                        725.7/28.5/180.3/6.1</td>
                </tr>
                <tr class="row3">
                    <td class="column0 style8 s">둘째주</td>
                    <td class="column1 style9 s">6<br />
                    </td>
                    <td class="column2 style9 s">7<br />
                        [중식]<br />
                        김치콩나물밥/양념장(5.6.9.10.13.)<br />
                        애호박된장국(5.6.9.13.)<br />
                        삼치데리야끼(5.6.13.)<br />
                        순대야채볶음(5.6.10.13.)<br />
                        깍두기(9.13.)<br />
                        식빵피자(1.2.5.6.10.12.13.)<br />
                        * 에너지/단백질/칼슘/철 <br />
                        660.3/34.8/261.9/6.3</td>
                    <td class="column3 style9 s">8<br />
                        [중식]<br />
                        친환경흑미밥<br />
                        대패삼겹숙주볶음(5.6.10.13.)<br />
                        닭장떡국(1.5.6.9.13.15.)<br />
                        모듬겉절이(5.6.9.13.)<br />
                        열무김치(9.13.)<br />
                        망고코코음료(13.)<br />
                        연두부찜/양념장(5.6.13.)<br />
                        * 에너지/단백질/칼슘/철 <br />
                        839/38.9/208.5/4.5</td>
                    <td class="column4 style9 s">9<br />
                        [중식]<br />
                        친환경찹쌀밥(부)<br />
                        야채크림스프(2.5.6.13.)<br />
                        토마토스파게티(주식)(1.2.5.6.12.13.)<br />
                        미역줄기볶음(1.5.6.13.)<br />
                        참치김치볶음(9.13.)<br />
                        깍두기(9.13.)/오이피클(13.)<br />
                        마늘바게트(2.5.6.)<br />
                        * 에너지/단백질/칼슘/철 <br />
                        646.6/20.5/204.6/5.2</td>
                    <td class="column5 style9 s">10<br />
                        [중식]<br />
                        친환경발아현미밥<br />
                        얼갈이된장국(5.6.9.13.)<br />
                        야채계란말이(1.5.)<br />
                        매콤통닭(1.2.5.6.12.13.15.)<br />
                        배추김치(9.13.)<br />
                        사각무초절이(13.)<br />
                        파인애플스틱<br />
                        * 에너지/단백질/칼슘/철 <br />
                        647.4/37.3/247.4/5.2</td>
                </tr>
                <tr class="row4">
                    <td class="column0 style8 s">셋째주</td>
                    <td class="column1 style9 s">13<br />
                        [중식]<br />
                        친환경보리밥<br />
                        오리탕(5.6.9.13.)<br />
                        매콤사태찜(5.6.10.13.)<br />
                        아삭해물파전(1.5.6.13.17.)<br />
                        배추김치(9.13.)<br />
                        양파장아찌(5.6.13.)<br />
                        바나나<br />
                        * 에너지/단백질/칼슘/철 <br />
                        772.8/41.5/212.5/5.6</td>
                    <td class="column2 style9 s">14<br />
                        [중식]<br />
                        돈육불고기덮밥(5.6.10.13.)<br />
                        순두부계란국(1.5.9.13.)<br />
                        쌈배추겉절이(5.6.13.)<br />
                        오이골뱅이무침/소면(5.6.13.)<br />
                        깍두기(9.13.)<br />
                        매실음료<br />
                        * 에너지/단백질/칼슘/철 <br />
                        652.2/36.3/173.1/4.5</td>
                    <td class="column3 style9 s">15<br />
                        [중식]<br />
                        친환경흑미밥<br />
                        애호박나물(5.9.13.)<br />
                        진미채아몬드볶음(1.5.6.13.)<br />
                        고구마치즈돈까스/소스2(1.2.5.6.10.11.12.13.16.)<br />
                        배추김치(9.13.)<br />
                        감자양송이스프(2.5.6.13.)<br />
                        자몽&amp;망고푸딩(2.13.)<br />
                        * 에너지/단백질/칼슘/철 <br />
                        801.9/35.5/242.9/2.8</td>
                    <td class="column4 style9 s">16<br />
                        [중식]<br />
                        친환경통밀쌀밥(6.)<br />
                        얼큰콩나물국(5.9.13.)<br />
                        갈비데리야끼조림(5.6.10.12.13.)<br />
                        고등어카레구이(2.5.6.7.13.)<br />
                        배추김치(9.13.)<br />
                        비피더스사과(2.)<br />
                        생크림&amp;모닝빵(1.2.5.6.13.)<br />
                        * 에너지/단백질/칼슘/철 <br />
                        878.6/54.4/305.8/4.3</td>
                    <td class="column5 style9 s">17<br />
                        [중식]<br />
                        해물카레볶음밥(2.5.6.9.13.17.)<br />
                        배추두부된장국(5.6.9.13.)<br />
                        떡국떡떡볶이(1.5.6.12.13.15.16.18.)<br />
                        가자미생선까스/크리미어니언소(1.2.5.6.13.)<br />
                        롱츄러스(1.2.5.6.13.)<br />
                        배추김치(9.13.)<br />
                        * 에너지/단백질/칼슘/철 <br />
                        1007.7/29.2/178.8/3.7</td>
                </tr>
                <tr class="row5">
                    <td class="column0 style8 s">넷째주</td>
                    <td class="column1 style9 s">20<br />
                        [중식]<br />
                        친환경귀리밥<br />
                        5무햄부대찌개(1.2.5.6.9.10.13.)<br />
                        무생채2(13.)<br />
                        청포묵김가루무침(5.13.)<br />
                        오리훈제구이/소스(1.5.13.)<br />
                        열무김치(9.13.)<br />
                        바람떡(5.13.)<br />
                        * 에너지/단백질/칼슘/철 <br />
                        704.4/30.3/183.4/4.5</td>
                    <td class="column2 style9 s">21<br />
                        [중식]<br />
                        친환경찹쌀밥(부)<br />
                        해물짬뽕국(1.9.10.13.17.)<br />
                        자장면(1.2.5.6.10.13.)<br />
                        탕수육/소스2(1.5.6.10.11.12.13.)<br />
                        배추김치(9.13.)<br />
                        옛날단무지무침<br />
                        * 에너지/단백질/칼슘/철 738.4/29.4/233.1/13.3</td>
                    <td class="column3 style9 s">22<br />
                        [중식]<br />
                        친환경발아현미밥<br />
                        얼큰소고기무국(5.6.9.13.16.18.)<br />
                        고추잡채(피망)/꽃빵(1.2.5.6.10.13.)<br />
                        오징어볶음(5.6.13.17.)<br />
                        배추김치(9.13.)<br />
                        미니치즈소세지(2.5.6.9.13.18.)<br />
                        * 에너지/단백질/칼슘/철 <br />
                        652.5/40.2/150/3.3</td>
                    <td class="column4 style9 s">23<br />
                        [중식]<br />
                        햄양배추덮밥(5.6.10.13.18.)<br />
                        단배추된장국(5.6.9.13.)<br />
                        매콤돼지갈비떡찜(5.6.10.13.)<br />
                        조청지리멸치볶음(4.5.6.13.)<br />
                        배추김치(9.13.)<br />
                        아이스망고<br />
                        * 에너지/단백질/칼슘/철 <br />
                        759.7/43.2/217.4/4.2</td>
                    <td class="column5 style9 s">24<br />
                        [중식]<br />
                        친환경보리밥<br />
                        김치도토리묵국(5.9.13.)<br />
                        안동식찜닭(5.6.8.12.13.15.16.18.)<br />
                        숙주나물<br />
                        돼지고기골뱅이초무침(5.6.10.13.16.)<br />
                        곡물팔미어파이(1.2.5.6.)<br />
                        깍두기(9.13.)<br />
                        * 에너지/단백질/칼슘/철 <br />
                        772/47.5/246.6/5.7</td>
                </tr>
                <tr class="row6">
                    <td class="column0 style8 s">다섯째주</td>
                    <td class="column1 style9 s">27<br />
                        [중식]<br />
                        친환경찹쌀밥(부)<br />
                        감자계란국(1.9.13.18.)<br />
                        데리야끼고기말이(1.2.5.6.10.12.13.16.18.)<br />
                        열무메밀비빔국수(3.5.6.9.13.)<br />
                        배추김치(9.13.)<br />
                        수박<br />
                        * 에너지/단백질/칼슘/철 <br />
                        656.3/28.5/191.7/8</td>
                    <td class="column2 style9 s">28<br />
                        [중식]<br />
                        친환경보리밥<br />
                        콩나물김치국(5.6.9.13.)<br />
                        배추겉절이(5.6.13.)<br />
                        단호박고구마샐러드(1.5.6.13.)<br />
                        치즈스테이크/떡갈비소스(1.2.5.6.10.12.13.16.)<br />
                        깍두기(9.13.)/꼬들오이무채장아찌<br />
                        * 에너지/단백질/칼슘/철 <br />
                        749.1/32.4/395.4/5.1</td>
                    <td class="column3 style9 s">29<br />
                        [중식]<br />
                        친환경발아현미밥<br />
                        열무된장국(5.6.9.13.)<br />
                        계란장조림(1.5.6.10.13.)<br />
                        묵은김치도라지잡채(1.5.6.8.9.10.13.)<br />
                        배추김치(9.13.)<br />
                        토스트/사과잼(1.2.5.6.13.)<br />
                        바나나맛두유(5.)<br />
                        * 에너지/단백질/칼슘/철 <br />
                        844.6/41.2/398.5/5.3</td>
                    <td class="column4 style9 s">30<br />
                        [중식]<br />
                        하이라이스(1.2.5.6.9.10.12.13.)<br />
                        교자만두국(1.2.5.6.9.10.13.16.18.)<br />
                        닭감자조림(5.6.13.15.)<br />
                        양배추샐러드(1.5.13.)<br />
                        배추김치(9.13.)<br />
                        무지개떡(5.13.)<br />
                        * 에너지/단백질/칼슘/철 <br />
                        939.1/47.7/167.5/4.4</td>
                    <td class="column5 style9 null"></td>
                </tr>
            </tbody>
        </table>
    </center>
</body>

</html>