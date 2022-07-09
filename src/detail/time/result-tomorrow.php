<?php
 //인터넷익스플로러 감지
 require_once ("../../function/function.php");
 require_once ("../../function/function_parameter.php");
 require_once ("../../function/function_tomorrow.php");
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--css 연결-->
    <link rel="stylesheet" href="https://static-cdn.wonchan.net/swon/css/result.css">
    <!--메뉴-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
    <!--google-font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jua&display=swap" rel="stylesheet">
        <title>확인하고 싶은 시간표 날짜를 선택해주세요</title>

    <style>
        body {
            background-color: #202124;
            color: white;
        }
        * {
            text-align: center;
        }

    </style>
</head>
<body>
    <tr>
           <div class="grid">
   <div class="h3">내일 시간표</div>
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
    <img src="https://static-cdn.wonchan.net/swon/images/time/<?php echo $grade ?>/<?php echo $grade . "-" . $class ?>.jpg" width="90%" height="auto" style="max-width: 350px" >
    <br>시간표가 다르면 <u><a href="https://forms.gle/Sj1Hg1oAnbJ13iid6" target="_blank" style="color: #FFFFFF;">여기</a></u>를 눌러 정상적인 전체 시간표를 보내주세요😎

<hr>
            &copy; Developed, Designed with ❤️ by
        이원찬(개발), 윤어신(디자인), 이용우(도움)<br>현재 접속자 수:<!--https://whos.amung.us/을 이용하여 접속자수를 출력하세요!-->



        <div style="position: fixed; bottom: 5px; left: 5px;">
            <a href="https://swon.wonchan.net/">
                <strong style="color: #FFFFFF; font-size: 20px;"><ins>메인페이지로..</ins></strong>
            </a>
        </div>
</body>
</html>

