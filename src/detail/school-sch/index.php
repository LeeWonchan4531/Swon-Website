<?php
if (preg_match('/MSIE|Internet Explorer|Trident/i', $_SERVER['HTTP_USER_AGENT'])) {
  header('HTTP/1.1 301 Moved Permanently');
  header('Location: https://swon.wonchan.net/ie.php');
}
?>
<html>

<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name=Generator content="Microsoft Word 15 (filtered)">
<title>학사일정</title>
<style>
    html {
        background-color: #EEEEEE !important;
    }
 /* Font Definitions */
 @font-face
	{font-family:Gulim;
	panose-1:2 11 6 0 0 1 1 1 1 1;}
@font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:"Arial Unicode MS";
	panose-1:2 11 6 4 2 2 2 2 2 4;}
@font-face
	{font-family:"Malgun Gothic";
	panose-1:2 11 5 3 2 0 0 2 0 4;}
@font-face
	{font-family:宋?;
	panose-1:0 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:HYSinMyeongJo-Medium;
	panose-1:0 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:HYGothic-Extra;
	panose-1:0 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:HYGothic-Medium;
	panose-1:0 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:GulimChe;
	panose-1:2 11 6 9 0 1 1 1 1 1;}
@font-face
	{font-family:함초롬돋움;
	panose-1:0 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"\@Gulim";
	panose-1:2 11 6 0 0 1 1 1 1 1;}
@font-face
	{font-family:"\@GulimChe";}
@font-face
	{font-family:"\@Malgun Gothic";}
@font-face
	{font-family:"\@함초롬돋움";
	panose-1:0 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"\@宋?";
	panose-1:0 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"\@HYSinMyeongJo-Medium";
	panose-1:0 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"\@HYGothic-Medium";
	panose-1:0 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"\@HYGothic-Extra";
	panose-1:0 0 0 0 0 0 0 0 0 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin:0in;
	text-autospace:none;
	word-break:break-all;
	font-size:11.0pt;
	font-family:"Malgun Gothic",sans-serif;}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{mso-style-link:"Header Char";
	margin:0in;
	layout-grid-mode:char;
	text-autospace:none;
	word-break:break-all;
	font-size:11.0pt;
	font-family:"Malgun Gothic",sans-serif;}
p.MsoFooter, li.MsoFooter, div.MsoFooter
	{mso-style-link:"Footer Char";
	margin:0in;
	layout-grid-mode:char;
	text-autospace:none;
	word-break:break-all;
	font-size:11.0pt;
	font-family:"Malgun Gothic",sans-serif;}
span.MsoFootnoteReference
	{vertical-align:super;}
span.MsoEndnoteReference
	{vertical-align:super;}
a:link, span.MsoHyperlink
	{color:blue;
	text-decoration:underline;}
a:visited, span.MsoHyperlinkFollowed
	{color:purple;
	text-decoration:underline;}
span.HeaderChar
	{mso-style-name:"Header Char";
	mso-style-link:Header;}
span.FooterChar
	{mso-style-name:"Footer Char";
	mso-style-link:Footer;}
p.a, li.a, div.a
	{mso-style-name:바탕글;
	margin:0in;
	text-align:justify;
	text-justify:inter-ideograph;
	line-height:103%;
	layout-grid-mode:char;
	text-autospace:none;
	word-break:break-all;
	font-size:10.0pt;
	font-family:"HYSinMyeongJo-Medium",serif;
	color:black;}
p.a0, li.a0, div.a0
	{mso-style-name:본문;
	margin-top:4.2pt;
	margin-right:17.5pt;
	margin-bottom:4.2pt;
	margin-left:17.5pt;
	text-align:justify;
	text-justify:inter-ideograph;
	line-height:107%;
	layout-grid-mode:char;
	text-autospace:none;
	word-break:break-all;
	font-size:10.0pt;
	font-family:"HYSinMyeongJo-Medium",serif;
	color:black;
	letter-spacing:-.25pt;}
p.1, li.1, div.1
	{mso-style-name:"개요 1";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:7.4pt;
	text-align:justify;
	text-justify:inter-ideograph;
	text-indent:-7.4pt;
	line-height:103%;
	layout-grid-mode:char;
	text-autospace:none;
	word-break:break-all;
	font-size:10.0pt;
	font-family:"HYSinMyeongJo-Medium",serif;
	color:black;}
p.2, li.2, div.2
	{mso-style-name:"개요 2";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:17.4pt;
	text-align:justify;
	text-justify:inter-ideograph;
	text-indent:-7.4pt;
	line-height:103%;
	layout-grid-mode:char;
	text-autospace:none;
	word-break:break-all;
	font-size:10.0pt;
	font-family:"HYSinMyeongJo-Medium",serif;
	color:black;}
p.3, li.3, div.3
	{mso-style-name:"개요 3";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:27.4pt;
	text-align:justify;
	text-justify:inter-ideograph;
	text-indent:-7.4pt;
	line-height:103%;
	layout-grid-mode:char;
	text-autospace:none;
	word-break:break-all;
	font-size:10.0pt;
	font-family:"HYSinMyeongJo-Medium",serif;
	color:black;}
p.4, li.4, div.4
	{mso-style-name:"개요 4";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:37.4pt;
	text-align:justify;
	text-justify:inter-ideograph;
	text-indent:-7.4pt;
	line-height:103%;
	layout-grid-mode:char;
	text-autospace:none;
	word-break:break-all;
	font-size:10.0pt;
	font-family:"HYSinMyeongJo-Medium",serif;
	color:black;}
p.5, li.5, div.5
	{mso-style-name:"개요 5";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:47.4pt;
	text-align:justify;
	text-justify:inter-ideograph;
	text-indent:-7.4pt;
	line-height:103%;
	layout-grid-mode:char;
	text-autospace:none;
	word-break:break-all;
	font-size:10.0pt;
	font-family:"HYSinMyeongJo-Medium",serif;
	color:black;}
p.6, li.6, div.6
	{mso-style-name:"개요 6";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:57.4pt;
	text-align:justify;
	text-justify:inter-ideograph;
	text-indent:-7.4pt;
	line-height:103%;
	layout-grid-mode:char;
	text-autospace:none;
	word-break:break-all;
	font-size:10.0pt;
	font-family:"HYSinMyeongJo-Medium",serif;
	color:black;}
p.7, li.7, div.7
	{mso-style-name:"개요 7";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:67.4pt;
	text-align:justify;
	text-justify:inter-ideograph;
	text-indent:-7.4pt;
	line-height:103%;
	layout-grid-mode:char;
	text-autospace:none;
	word-break:break-all;
	font-size:10.0pt;
	font-family:"HYSinMyeongJo-Medium",serif;
	color:black;}
p.a1, li.a1, div.a1
	{mso-style-name:"쪽 번호";
	margin:0in;
	text-align:justify;
	text-justify:inter-ideograph;
	line-height:103%;
	layout-grid-mode:char;
	text-autospace:none;
	word-break:break-all;
	font-size:10.0pt;
	font-family:"HYGothic-Extra",serif;
	color:black;}
p.a2, li.a2, div.a2
	{mso-style-name:머리말;
	margin-top:0in;
	margin-right:10.0pt;
	margin-bottom:0in;
	margin-left:0in;
	text-align:right;
	layout-grid-mode:char;
	text-autospace:none;
	font-size:9.0pt;
	font-family:"HYGothic-Medium",serif;
	color:black;}
p.a3, li.a3, div.a3
	{mso-style-name:각주;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:13.2pt;
	text-align:justify;
	text-justify:inter-ideograph;
	text-indent:-13.2pt;
	layout-grid-mode:char;
	text-autospace:none;
	word-break:break-all;
	font-size:9.0pt;
	font-family:"HYSinMyeongJo-Medium",serif;
	color:black;}
p.a4, li.a4, div.a4
	{mso-style-name:그림캡션;
	margin:0in;
	text-align:justify;
	text-justify:inter-ideograph;
	line-height:103%;
	layout-grid-mode:char;
	text-autospace:none;
	word-break:break-all;
	font-size:9.0pt;
	font-family:"HYGothic-Medium",serif;
	color:black;}
p.a5, li.a5, div.a5
	{mso-style-name:표캡션;
	margin:0in;
	text-align:justify;
	text-justify:inter-ideograph;
	line-height:103%;
	layout-grid-mode:char;
	text-autospace:none;
	word-break:break-all;
	font-size:9.0pt;
	font-family:"HYGothic-Medium",serif;
	color:black;}
p.a6, li.a6, div.a6
	{mso-style-name:수식캡션;
	margin:0in;
	text-align:justify;
	text-justify:inter-ideograph;
	line-height:103%;
	layout-grid-mode:char;
	text-autospace:none;
	word-break:break-all;
	font-size:9.0pt;
	font-family:"HYGothic-Medium",serif;
	color:black;}
p.a7, li.a7, div.a7
	{mso-style-name:찾아보기;
	margin:0in;
	text-align:justify;
	text-justify:inter-ideograph;
	line-height:103%;
	layout-grid-mode:char;
	text-autospace:none;
	word-break:break-all;
	font-size:9.0pt;
	font-family:"HYSinMyeongJo-Medium",serif;
	color:black;}
p.xl76, li.xl76, div.xl76
	{mso-style-name:xl76;
	margin:0in;
	text-align:center;
	background:#F2DCDB;
	text-autospace:none;
	font-size:12.0pt;
	font-family:"Gulim",sans-serif;
	color:red;}
p.xl77, li.xl77, div.xl77
	{mso-style-name:xl77;
	margin:0in;
	text-align:center;
	background:#F2DCDB;
	text-autospace:none;
	font-size:12.0pt;
	font-family:"Gulim",sans-serif;
	color:red;}
p.xl65, li.xl65, div.xl65
	{mso-style-name:xl65;
	margin:0in;
	text-align:center;
	background:white;
	text-autospace:none;
	font-size:12.0pt;
	font-family:"Gulim",sans-serif;
	color:black;}
p.xl66, li.xl66, div.xl66
	{mso-style-name:xl66;
	margin:0in;
	text-align:center;
	background:white;
	text-autospace:none;
	font-size:12.0pt;
	font-family:"Gulim",sans-serif;
	color:black;}
p.xl70, li.xl70, div.xl70
	{mso-style-name:xl70;
	margin:0in;
	text-align:center;
	background:#F2DCDB;
	text-autospace:none;
	font-size:12.0pt;
	font-family:"Gulim",sans-serif;
	color:black;}
p.xl78, li.xl78, div.xl78
	{mso-style-name:xl78;
	margin:0in;
	text-align:center;
	background:#F2DCDB;
	text-autospace:none;
	font-size:12.0pt;
	font-family:"Gulim",sans-serif;
	color:red;}
p.xl68, li.xl68, div.xl68
	{mso-style-name:xl68;
	margin:0in;
	text-align:center;
	background:white;
	text-autospace:none;
	font-size:12.0pt;
	font-family:"Gulim",sans-serif;
	color:black;}
p.xl79, li.xl79, div.xl79
	{mso-style-name:xl79;
	margin:0in;
	text-align:center;
	background:#F2DCDB;
	text-autospace:none;
	font-size:12.0pt;
	font-family:"Gulim",sans-serif;
	color:black;}
p.xl67, li.xl67, div.xl67
	{mso-style-name:xl67;
	margin:0in;
	text-align:center;
	background:white;
	text-autospace:none;
	font-size:12.0pt;
	font-family:"Gulim",sans-serif;
	color:black;}
p.xl71, li.xl71, div.xl71
	{mso-style-name:xl71;
	margin:0in;
	background:white;
	text-autospace:none;
	font-size:12.0pt;
	font-family:"Malgun Gothic",sans-serif;
	color:black;}
p.xl75, li.xl75, div.xl75
	{mso-style-name:xl75;
	margin:0in;
	text-align:center;
	background:white;
	text-autospace:none;
	font-size:12.0pt;
	font-family:"Gulim",sans-serif;
	color:red;}
p.xl69, li.xl69, div.xl69
	{mso-style-name:xl69;
	margin:0in;
	text-align:center;
	background:white;
	text-autospace:none;
	font-size:12.0pt;
	font-family:"Gulim",sans-serif;
	color:black;}
p.xl72, li.xl72, div.xl72
	{mso-style-name:xl72;
	margin:0in;
	text-align:center;
	background:white;
	text-autospace:none;
	font-size:12.0pt;
	font-family:"Gulim",sans-serif;
	color:black;}
p.xl80, li.xl80, div.xl80
	{mso-style-name:xl80;
	margin:0in;
	text-align:center;
	background:#F2DCDB;
	text-autospace:none;
	font-size:12.0pt;
	font-family:"Gulim",sans-serif;
	color:red;}
p.xl73, li.xl73, div.xl73
	{mso-style-name:xl73;
	margin:0in;
	text-align:center;
	background:white;
	text-autospace:none;
	font-size:12.0pt;
	font-family:"Gulim",sans-serif;
	color:black;}
p.xl81, li.xl81, div.xl81
	{mso-style-name:xl81;
	margin:0in;
	text-align:center;
	background:#F2DCDB;
	text-autospace:none;
	font-size:12.0pt;
	font-family:"Gulim",sans-serif;
	color:black;}
p.xl82, li.xl82, div.xl82
	{mso-style-name:xl82;
	margin:0in;
	text-align:center;
	background:#F2DCDB;
	text-autospace:none;
	font-size:12.0pt;
	font-family:"Gulim",sans-serif;
	color:red;}
p.xl74, li.xl74, div.xl74
	{mso-style-name:xl74;
	margin:0in;
	text-align:center;
	background:white;
	text-autospace:none;
	font-size:12.0pt;
	font-family:"Gulim",sans-serif;
	color:black;}
.MsoChpDefault
	{font-family:"Malgun Gothic",sans-serif;}
 /* Page Definitions */
 @page WordSection1
	{size:1031.8pt 728.5pt;
	margin:22.65pt 48.15pt 22.65pt 48.15pt;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
 ol
	{margin-bottom:0in;}
ul
	{margin-bottom:0in;}
</style>

</head>

<body>

<div class=WordSection1>

<div align=center>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr style='height:11.8pt'>
  <td width=24 rowspan=2 style='width:17.85pt;border-top:double 4.5pt;
  border-left:double 4.5pt;border-bottom:solid 1.0pt;border-right:solid 1.0pt;
  border-color:black;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:11.8pt'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  lang=ZH-CN style='font-family:"함초롬돋움",serif'>일</span></b></p>
  </td>
  <td width=96 colspan=2 style='width:71.7pt;border-top:double black 4.5pt;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:11.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:9.0pt;font-family:"함초롬돋움",serif'>3<span
  lang=ZH-CN>월</span></span></b></p>
  </td>
  <td width=96 colspan=2 style='width:71.75pt;border-top:double black 4.5pt;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:11.8pt'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:9.0pt;line-height:103%;font-family:"함초롬돋움",serif'>4<span
  lang=ZH-CN>월</span></span></b></p>
  </td>
  <td width=96 colspan=2 style='width:71.7pt;border-top:double black 4.5pt;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:11.8pt'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:9.0pt;line-height:103%;font-family:"함초롬돋움",serif'>5<span
  lang=ZH-CN>월</span></span></b></p>
  </td>
  <td width=96 colspan=2 style='width:71.75pt;border-top:double black 4.5pt;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:11.8pt'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:9.0pt;line-height:103%;font-family:"함초롬돋움",serif'>6<span
  lang=ZH-CN>월</span></span></b></p>
  </td>
  <td width=99 colspan=2 style='width:74.55pt;border-top:double black 4.5pt;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:11.8pt'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:9.0pt;line-height:103%;font-family:"함초롬돋움",serif'>7<span
  lang=ZH-CN>월</span></span></b></p>
  </td>
  <td width=96 colspan=2 style='width:71.75pt;border-top:double black 4.5pt;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:11.8pt'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:9.0pt;line-height:103%;font-family:"함초롬돋움",serif'>8<span
  lang=ZH-CN>월</span></span></b></p>
  </td>
  <td width=96 colspan=2 style='width:71.7pt;border-top:double black 4.5pt;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:11.8pt'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:9.0pt;line-height:103%;font-family:"함초롬돋움",serif'>9<span
  lang=ZH-CN>월</span></span></b></p>
  </td>
  <td width=96 colspan=2 style='width:71.75pt;border-top:double black 4.5pt;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:11.8pt'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:9.0pt;line-height:103%;font-family:"함초롬돋움",serif'>10<span
  lang=ZH-CN>월</span></span></b></p>
  </td>
  <td width=96 colspan=2 style='width:71.7pt;border-top:double black 4.5pt;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:11.8pt'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:9.0pt;line-height:103%;font-family:"함초롬돋움",serif'>11<span
  lang=ZH-CN>월</span></span></b></p>
  </td>
  <td width=96 colspan=2 style='width:71.75pt;border-top:double black 4.5pt;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:11.8pt'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:9.0pt;line-height:103%;font-family:"함초롬돋움",serif'>12<span
  lang=ZH-CN>월</span></span></b></p>
  </td>
  <td width=96 colspan=2 style='width:71.7pt;border-top:double black 4.5pt;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:11.8pt'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:9.0pt;line-height:103%;font-family:"함초롬돋움",serif'>1<span
  lang=ZH-CN>월</span></span></b></p>
  </td>
  <td width=96 colspan=2 style='width:71.75pt;border-top:double black 4.5pt;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:11.8pt'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:9.0pt;line-height:103%;font-family:"함초롬돋움",serif'>2<span
  lang=ZH-CN>월</span></span></b></p>
  </td>
  <td width=23 rowspan=2 style='width:17.4pt;border-top:double black 4.5pt;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:11.8pt'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  lang=ZH-CN style='font-family:"함초롬돋움",serif'>일</span></b></p>
  </td>
  <td width=35 rowspan=2 style='width:25.9pt;border-top:double black 4.5pt;
  border-left:none;border-bottom:solid black 1.0pt;border-right:double black 4.5pt;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:11.8pt'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  lang=ZH-CN style='font-family:"함초롬돋움",serif'>비고</span></b></p>
  </td>
 </tr>
 <tr style='height:.15in'>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:.15in'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:6.0pt;font-family:
  "함초롬돋움",serif'>요일</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:.15in'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:7.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:.15in'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:6.0pt;font-family:
  "함초롬돋움",serif'>요일</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:.15in'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:6.0pt;font-family:
  "함초롬돋움",serif'>요일</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:.15in'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:6.0pt;font-family:
  "함초롬돋움",serif'>요일</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:.15in'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:6.0pt;font-family:
  "함초롬돋움",serif'>요일</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:.15in'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:6.0pt;font-family:
  "함초롬돋움",serif'>요일</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:.15in'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:6.0pt;font-family:
  "함초롬돋움",serif'>요일</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:.15in'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:6.0pt;font-family:
  "함초롬돋움",serif'>요일</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:.15in'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:6.0pt;font-family:
  "함초롬돋움",serif'>요일</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:.15in'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:6.0pt;font-family:
  "함초롬돋움",serif'>요일</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:.15in'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:6.0pt;font-family:
  "함초롬돋움",serif'>요일</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:.15in'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:6.0pt;font-family:
  "함초롬돋움",serif'>요일</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:12.8pt'>
  <td width=24 style='width:17.85pt;border-top:none;border-left:double black 4.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>1</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl77 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>삼일절</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>지방선거</span></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><span lang=ZH-CN style='font-size:7.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><span lang=ZH-CN style='font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:7.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.35pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl77 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>신정</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl78 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif;color:black'>&nbsp;</span></p>
  </td>
  <td width=23 style='width:17.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>1</span></b></p>
  </td>
  <td width=35 style='width:25.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:double black 4.5pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:20.0pt'>
  <td width=24 style='width:17.85pt;border-top:none;border-left:double black 4.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>2</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:8.0pt;font-family:
  "함초롬돋움",serif;color:blue;letter-spacing:-.2pt'>입학식</span></b><b><span
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;color:blue;letter-spacing:
  -.2pt'>, <span lang=ZH-CN>개학식</span></span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl70 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:7.0pt;font-family:"함초롬돋움",serif;letter-spacing:-.15pt'>생명존중교육</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl66 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;color:blue;letter-spacing:
  -.2pt'>고입입학설명회</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><span style='font-size:9.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:8.0pt;font-family:
  "함초롬돋움",serif;color:blue;letter-spacing:-.4pt'>졸업 및 진급사정회</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl78 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif;color:black'>&nbsp;</span></p>
  </td>
  <td width=23 style='width:17.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>2</span></b></p>
  </td>
  <td width=35 style='width:25.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:double black 4.5pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:12.8pt'>
  <td width=24 style='width:17.85pt;border-top:none;border-left:double black 4.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>3</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif;
  letter-spacing:-.2pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><span style='font-size:8.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl77 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>개천절</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><b><span style='font-size:8.0pt;
  font-family:"함초롬돋움",serif;color:blue'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  layout-grid-mode:both;vertical-align:middle;word-break:normal'><span
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.4pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl68 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif'>&nbsp;</span></p>
  </td>
  <td width=23 style='width:17.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>3</span></b></p>
  </td>
  <td width=35 style='width:25.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:double black 4.5pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:17.8pt'>
  <td width=24 style='width:17.85pt;border-top:none;border-left:double black 4.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>4</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:7.0pt;font-family:"함초롬돋움",serif;
  letter-spacing:-.25pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=xl66 style='layout-grid-mode:char;background:transparent'><b><span
  lang=ZH-CN style='font-size:7.0pt;font-family:"함초롬돋움",serif;letter-spacing:
  -.15pt'>학교폭력</span></b></p>
  <p class=xl66 style='layout-grid-mode:char;background:transparent'><b><span
  lang=ZH-CN style='font-size:7.0pt;font-family:"함초롬돋움",serif;letter-spacing:
  -.15pt'>실태조사</span></b></p>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:7.0pt;font-family:
  "함초롬돋움",serif'>청렴교육</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:17.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:17.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>　</span></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=xl70 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:7.0pt;font-family:"함초롬돋움",serif'>환경보호활동</span></b><span
  lang=ZH-CN style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:17.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:17.8pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=xl77 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif;color:black'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=xl66 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:17.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:17.8pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=xl66 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:17.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:17.8pt'>
  <p class=xl68 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>　</span></p>
  </td>
  <td width=23 style='width:17.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:17.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>4</span></b></p>
  </td>
  <td width=35 style='width:25.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:double black 4.5pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:17.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:26.85pt'>
  <td width=24 style='width:17.85pt;border-top:none;border-left:double black 4.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:26.85pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>5</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:26.85pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:26.85pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><span style='font-size:9.0pt;font-family:"함초롬돋움",serif;
  color:red'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:26.85pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:26.85pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:7.5pt;font-family:
  "함초롬돋움",serif;color:blue;letter-spacing:-.15pt'>영어듣기</span></b><b><span
  style='font-size:7.5pt;font-family:"함초롬돋움",serif;color:blue;letter-spacing:
  -.15pt'>(1)</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:26.85pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:26.85pt'>
  <p class=xl77 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>어린이날</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:26.85pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:26.85pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:26.85pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:26.85pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:7.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.35pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:26.85pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:26.85pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:26.85pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:26.85pt'>
  <p class=xl70 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;letter-spacing:-.2pt'>집중상담주간</span></b></p>
  <p class=xl70 style='background:transparent'><b><span style='font-size:8.0pt;
  font-family:"함초롬돋움",serif;letter-spacing:-.2pt'>(9/5-9/16)</span></b></p>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:7.0pt;font-family:
  "함초롬돋움",serif;letter-spacing:-.15pt'>환경보호활동</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:26.85pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:26.85pt'>
  <p class=xl66 style='background:transparent'><b><span style='font-size:7.0pt;
  font-family:"함초롬돋움",serif;color:blue;letter-spacing:-.35pt'>1<span
  lang=ZH-CN>차지필평가</span>(2,3)</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:26.85pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:26.85pt'>
  <p class=xl66 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif;color:red'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:26.85pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:26.85pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:8.0pt;font-family:
  "함초롬돋움",serif;letter-spacing:-.4pt'>환경보호활동</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:26.85pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:26.85pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.2pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:26.85pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:26.85pt'>
  <p class=xl79 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=23 style='width:17.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:26.85pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>5</span></b></p>
  </td>
  <td width=35 style='width:25.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:double black 4.5pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:26.85pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:12.8pt'>
  <td width=24 style='width:17.85pt;border-top:none;border-left:double black 4.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>6</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif;
  letter-spacing:-.2pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:7.5pt;font-family:
  "함초롬돋움",serif;color:blue;letter-spacing:-.15pt'>영어듣기</span></b><b><span
  style='font-size:7.5pt;font-family:"함초롬돋움",serif;color:blue;letter-spacing:
  -.15pt'>(2)</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>재량휴업일　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl77 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>현충일</span></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:7.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.35pt'>2<span lang=ZH-CN>차지필평가</span>(2,3)</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:7.5pt;font-family:
  "함초롬돋움",serif;color:blue;letter-spacing:-.15pt'>영어듣기</span></b><b><span
  style='font-size:7.5pt;font-family:"함초롬돋움",serif;color:blue;letter-spacing:
  -.15pt'>(1)</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:7.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.35pt'>1<span lang=ZH-CN>차지필평가</span>(2,3)</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:7.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.35pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:8.0pt;font-family:
  "함초롬돋움",serif;color:blue;letter-spacing:-.2pt'>졸업식</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl79 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=23 style='width:17.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>6</span></b></p>
  </td>
  <td width=35 style='width:25.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:double black 4.5pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:20.0pt'>
  <td width=24 style='width:17.85pt;border-top:none;border-left:double black 4.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>7</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:7.0pt;font-family:
  "함초롬돋움",serif;letter-spacing:-.15pt'>인권교육</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:7.5pt;font-family:
  "함초롬돋움",serif;color:blue;letter-spacing:-.15pt'>영어듣기</span></b><b><span
  style='font-size:7.5pt;font-family:"함초롬돋움",serif;color:blue;letter-spacing:
  -.15pt'>(3)</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl66 style='layout-grid-mode:char;background:transparent'><b><span
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;letter-spacing:-.2pt'>&nbsp;</span></b></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:7.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.35pt'>2<span lang=ZH-CN>차지필평가</span>(2,3)</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:7.5pt;font-family:
  "함초롬돋움",serif;color:blue;letter-spacing:-.15pt'>영어듣기</span></b><b><span
  style='font-size:7.5pt;font-family:"함초롬돋움",serif;color:blue;letter-spacing:
  -.15pt'>(2)</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:7.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.35pt'>1<span lang=ZH-CN>차지필평가</span>(2,3)</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:8.0pt;font-family:
  "함초롬돋움",serif'>환경보호활동</span></b><span lang=ZH-CN style='font-size:7.0pt;
  font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><span style='font-size:9.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  layout-grid-mode:both;vertical-align:middle;word-break:normal'><span
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl68 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:7.0pt;font-family:"함초롬돋움",serif;color:blue'>신입생예비소집</span></b></p>
  </td>
  <td width=23 style='width:17.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>7</span></b></p>
  </td>
  <td width=35 style='width:25.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:double black 4.5pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:19.3pt'>
  <td width=24 style='width:17.85pt;border-top:none;border-left:double black 4.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.3pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>8</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.3pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.3pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif;
  letter-spacing:-.2pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.3pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.3pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:7.5pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.15pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.3pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.3pt'>
  <p class=xl77 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>부처님오신날　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.3pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.3pt'>
  <p class=xl66 style='layout-grid-mode:char;background:transparent'><b><span
  lang=ZH-CN style='font-size:7.0pt;font-family:"함초롬돋움",serif'>가정폭력</span></b></p>
  <p class=xl66 style='layout-grid-mode:char;background:transparent'><b><span
  lang=ZH-CN style='font-size:7.0pt;font-family:"함초롬돋움",serif'>예방교육</span></b><b><span
  style='font-size:7.0pt;font-family:"함초롬돋움",serif'>(<span lang=ZH-CN>교</span>)</span></b></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.3pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.3pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:7.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.35pt'>2<span lang=ZH-CN>차지필평가</span>(2,3)</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.3pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.3pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.3pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.3pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:7.5pt;font-family:
  "함초롬돋움",serif;color:blue;letter-spacing:-.15pt'>영어듣기</span></b><b><span
  style='font-size:7.5pt;font-family:"함초롬돋움",serif;color:blue;letter-spacing:
  -.15pt'>(3)</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.3pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.3pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  layout-grid-mode:both;vertical-align:middle;word-break:normal'><span
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.3pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.3pt'>
  <p class=xl66 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;letter-spacing:-.2pt'>학부모독서회</span></b><span
  lang=ZH-CN style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.3pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.3pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><span style='font-size:9.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.3pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.3pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.3pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.3pt'>
  <p class=xl68 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:7.0pt;font-family:"함초롬돋움",serif'>　</span></b></p>
  </td>
  <td width=23 style='width:17.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:19.3pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>8</span></b></p>
  </td>
  <td width=35 style='width:25.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:double black 4.5pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.3pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:12.8pt'>
  <td width=24 style='width:17.85pt;border-top:none;border-left:double black 4.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>9</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  layout-grid-mode:both;vertical-align:middle;word-break:normal'><span
  lang=ZH-CN style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>대통령선거</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  layout-grid-mode:both;vertical-align:middle;word-break:normal'><span
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='layout-grid-mode:char;background:transparent'><b><span
  lang=ZH-CN style='font-size:7.0pt;font-family:"함초롬돋움",serif;letter-spacing:
  -.15pt'>생명존중교육</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  layout-grid-mode:both;vertical-align:middle;word-break:normal'><span
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  layout-grid-mode:both;vertical-align:middle;word-break:normal'><span
  lang=ZH-CN style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>추석</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl77 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>한글날</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;color:blue;letter-spacing:
  -.2pt'>학부모수업공개</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  layout-grid-mode:both;vertical-align:middle;word-break:normal'><span
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:8.0pt;font-family:
  "함초롬돋움",serif;color:blue;letter-spacing:-.2pt'>종업식</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl68 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=23 style='width:17.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>9</span></b></p>
  </td>
  <td width=35 style='width:25.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:double black 4.5pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:12.8pt'>
  <td width=24 style='width:17.85pt;border-top:none;border-left:double black 4.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>10</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:7.0pt;font-family:"함초롬돋움",serif;
  letter-spacing:-.15pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:7.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.35pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  layout-grid-mode:both;vertical-align:middle;word-break:normal'><span
  lang=ZH-CN style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>추석</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>대체공휴일</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=left style='text-align:left;line-height:normal;word-break:
  normal'><b><span style='font-size:5.5pt;font-family:"함초롬돋움",serif;letter-spacing:
  -.1pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  layout-grid-mode:both;vertical-align:middle;word-break:normal'><span
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;color:blue;letter-spacing:
  -.2pt'>겨울방학시작일</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl68 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=23 style='width:17.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>10</span></b></p>
  </td>
  <td width=35 style='width:25.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:double black 4.5pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:12.8pt'>
  <td width=24 style='width:17.85pt;border-top:none;border-left:double black 4.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>11</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif;
  letter-spacing:-.2pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl70 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:7.0pt;font-family:"함초롬돋움",serif'>다문화이해교육</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:7.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.35pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>　</span></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:7.0pt;font-family:
  "함초롬돋움",serif'>청렴교육</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>추석</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl77 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif;color:black'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><b><span style='font-size:8.0pt;
  font-family:"함초롬돋움",serif;color:blue;letter-spacing:-.2pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl67 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>　</span></p>
  </td>
  <td width=23 style='width:17.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>11</span></b></p>
  </td>
  <td width=35 style='width:25.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:double black 4.5pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:12.8pt'>
  <td width=24 style='width:17.85pt;border-top:none;border-left:double black 4.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>12</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><span style='font-size:9.0pt;font-family:"함초롬돋움",serif;
  color:red'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:8.0pt;font-family:
  "함초롬돋움",serif;color:blue;letter-spacing:-.2pt'>진로심리검사</span></b><b><span
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;color:blue;letter-spacing:
  -.2pt'>(1)</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:7.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.35pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif;
  letter-spacing:-.2pt'>                </span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>대체공휴일</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  layout-grid-mode:both;vertical-align:middle;word-break:normal'><span
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl66 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif;color:red'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;letter-spacing:-.2pt'>인권교육</span></b><span
  lang=ZH-CN style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><b><span style='font-size:8.0pt;
  font-family:"함초롬돋움",serif;color:blue;letter-spacing:-.2pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl79 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=23 style='width:17.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>12</span></b></p>
  </td>
  <td width=35 style='width:25.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:double black 4.5pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:17.8pt'>
  <td width=24 style='width:17.85pt;border-top:none;border-left:double black 4.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>13</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:17.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:17.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif;
  letter-spacing:-.2pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=xl66 style='background:transparent'><b><i><span lang=ZH-CN
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;color:red'>체육행사</span></i></b><b><i><span
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;color:red'>(1)<span
  lang=ZH-CN>　</span></span></i></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:8.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=xl66 style='layout-grid-mode:char;background:transparent'><b><span
  lang=ZH-CN style='font-size:7.0pt;font-family:"함초롬돋움",serif;letter-spacing:
  -.15pt'>성폭력예방교육</span></b></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:7.0pt;font-family:
  "함초롬돋움",serif;letter-spacing:-.15pt'>교권침해예방교육</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:17.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:17.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=xl66 style='layout-grid-mode:char;background:transparent'><b><span
  lang=ZH-CN style='font-size:7.0pt;font-family:"함초롬돋움",serif;letter-spacing:
  -.15pt'>학교폭력</span></b></p>
  <p class=xl66 style='layout-grid-mode:char;background:transparent'><b><span
  lang=ZH-CN style='font-size:7.0pt;font-family:"함초롬돋움",serif;letter-spacing:
  -.15pt'>실태조사</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  layout-grid-mode:both;vertical-align:middle;word-break:normal'><span
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:17.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:17.8pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:7.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.35pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><span style='font-size:9.0pt;font-family:"함초롬돋움",serif;
  color:blue'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:17.8pt'>
  <p class=xl79 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;color:blue;letter-spacing:
  -.2pt'>새학년준비일</span></b></p>
  </td>
  <td width=23 style='width:17.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:17.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>13</span></b></p>
  </td>
  <td width=35 style='width:25.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:double black 4.5pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:17.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:15.0pt'>
  <td width=24 style='width:17.85pt;border-top:none;border-left:double black 4.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:15.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>14</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:15.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:15.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:7.0pt;font-family:
  "함초롬돋움",serif;letter-spacing:-.15pt'>학교폭력예방교육</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:15.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:15.0pt'>
  <p class=xl66 style='background:transparent'><b><i><span lang=ZH-CN
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;color:red'>체육행사</span></i></b><b><i><span
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;color:red'>(2)<span
  lang=ZH-CN>　</span></span></i></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:15.0pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:15.0pt'>
  <p class=xl66 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif;color:red'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:15.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:15.0pt'>
  <p class=xl66 style='layout-grid-mode:char;background:transparent'><b><span
  style='font-size:7.0pt;font-family:"함초롬돋움",serif;letter-spacing:-.15pt'>&nbsp;</span></b></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:15.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:15.0pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:15.0pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:15.0pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:15.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:15.0pt'>
  <p class=xl66 style='layout-grid-mode:char;background:transparent'><b><span
  style='font-size:7.0pt;font-family:"함초롬돋움",serif;letter-spacing:-.15pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:15.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:15.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:8.0pt;font-family:
  "함초롬돋움",serif;color:blue;letter-spacing:-.2pt'>창의수리력대회</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:15.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:15.0pt'>
  <p class=xl66 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;letter-spacing:-.3pt'>인권교육</span></b></p>
  <p class=xl66 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:7.0pt;font-family:"함초롬돋움",serif;color:blue;letter-spacing:
  -.25pt'>중국문화탐구대회</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:15.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:15.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:7.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.35pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:15.0pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:15.0pt'>
  <p class=xl66 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif;color:red'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:15.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:15.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:8.0pt;font-family:
  "함초롬돋움",serif;color:blue;letter-spacing:-.2pt'>새학년준비일</span></b></p>
  </td>
  <td width=23 style='width:17.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:15.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>14</span></b></p>
  </td>
  <td width=35 style='width:25.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:double black 4.5pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:15.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:12.8pt'>
  <td width=24 style='width:17.85pt;border-top:none;border-left:double black 4.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>15</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:7.0pt;font-family:"함초롬돋움",serif;
  letter-spacing:-.15pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><b><i><span lang=ZH-CN
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;color:red'>체육행사</span></i></b><b><i><span
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;color:red'>(3)<span
  lang=ZH-CN>　</span></span></i></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:8.0pt;font-family:
  "함초롬돋움",serif;color:blue;letter-spacing:-.2pt'>진로캠프</span></b><b><span
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;color:blue;letter-spacing:
  -.2pt'>(2,3)</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl77 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>광복절</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:6.5pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  layout-grid-mode:both;vertical-align:middle;word-break:normal'><span
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><b><span style='font-size:8.0pt;
  font-family:"함초롬돋움",serif;letter-spacing:-.3pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:7.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.35pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:8.0pt;font-family:
  "함초롬돋움",serif;color:blue;letter-spacing:-.2pt'>새학년준비일</span></b></p>
  </td>
  <td width=23 style='width:17.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>15</span></b></p>
  </td>
  <td width=35 style='width:25.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:double black 4.5pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:12.8pt'>
  <td width=24 style='width:17.85pt;border-top:none;border-left:double black 4.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>16</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif;
  letter-spacing:-.2pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl66 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif;color:red'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><b><span style='font-size:7.0pt;
  font-family:"함초롬돋움",serif;color:blue;letter-spacing:-.35pt'>1<span
  lang=ZH-CN>차지필평가</span>(2,3)</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;color:blue'>역사탐방</span></b><b><span
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;color:blue'>(1)</span></b><span
  lang=ZH-CN style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  layout-grid-mode:both;vertical-align:middle;word-break:normal'><span
  lang=ZH-CN style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl77 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif;color:black'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:7.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.35pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:8.0pt;font-family:
  "함초롬돋움",serif;color:blue;letter-spacing:-.2pt'>새학년준비일</span></b></p>
  </td>
  <td width=23 style='width:17.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>16</span></b></p>
  </td>
  <td width=35 style='width:25.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:double black 4.5pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:24.8pt'>
  <td width=24 style='width:17.85pt;border-top:none;border-left:double black 4.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:24.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>17</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:24.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:24.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif;
  letter-spacing:-.2pt'>1,2,3<span lang=ZH-CN>학년 진단고사</span></span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:24.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:24.8pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:24.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:24.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:7.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.35pt'>1<span lang=ZH-CN>차지필평가</span>(2,3)</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:24.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:24.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:24.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:24.8pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:24.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:24.8pt'>
  <p class=xl71 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:24.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:24.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:24.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:24.8pt'>
  <p class=xl66 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:7.0pt;font-family:"함초롬돋움",serif;color:blue;letter-spacing:
  -.5pt'>영어교과서어휘대회</span></b></p>
  <p class=xl70 style='layout-grid-mode:char;background:transparent'><b><span
  lang=ZH-CN style='font-size:7.0pt;font-family:"함초롬돋움",serif;letter-spacing:
  -.15pt'>생명존중교육</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:24.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:24.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>대입 수능일　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:24.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:24.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  layout-grid-mode:both;vertical-align:middle;word-break:normal'><span
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:24.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:24.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:24.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:24.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:8.0pt;font-family:
  "함초롬돋움",serif;color:blue;letter-spacing:-.2pt'>새학년준비일</span></b></p>
  </td>
  <td width=23 style='width:17.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:24.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>17</span></b></p>
  </td>
  <td width=35 style='width:25.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:double black 4.5pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:24.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:19.8pt'>
  <td width=24 style='width:17.85pt;border-top:none;border-left:double black 4.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>18</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif;
  letter-spacing:-.2pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl66 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:7.0pt;font-family:"함초롬돋움",serif;letter-spacing:-.35pt'>양성평등교육</span></b></p>
  <p class=xl66 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:7.0pt;font-family:"함초롬돋움",serif;letter-spacing:-.35pt'>성폭력 예방연수</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:7.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.35pt'>1<span lang=ZH-CN>차지필평가</span>(2,3)</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>　</span></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl70 style='layout-grid-mode:char;background:transparent'><b><span
  lang=ZH-CN style='font-size:7.0pt;font-family:"함초롬돋움",serif;letter-spacing:
  -.15pt'>생명존중교육</span></b><span lang=ZH-CN style='font-size:9.0pt;font-family:
  "함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.8pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl66 style='background:transparent'><b><span style='font-size:8.0pt;
  font-family:"함초롬돋움",serif;letter-spacing:-.2pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.8pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  layout-grid-mode:both;vertical-align:middle;word-break:normal'><span
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>&nbsp;</span></p>
  </td>
  <td width=23 style='width:17.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:19.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>18</span></b></p>
  </td>
  <td width=35 style='width:25.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:double black 4.5pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:19.8pt'>
  <td width=24 style='width:17.85pt;border-top:none;border-left:double black 4.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>19</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.8pt'>
  <p class=xl75 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><span style='font-size:9.0pt;font-family:"함초롬돋움",serif;
  color:red'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl66 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:8.0pt;font-family:"함초롬돋움",serif'>학부모독서회</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl77 style='background:transparent'><span style='font-size:7.0pt;
  font-family:"함초롬돋움",serif;color:black'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.2pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:black'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl66 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:8.0pt;font-family:"함초롬돋움",serif'>인성교육주간</span></b></p>
  <p class=xl66 style='background:transparent'><b><span style='font-size:8.0pt;
  font-family:"함초롬돋움",serif'>(9/19-9/23)</span></b><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><i><span lang=ZH-CN style='font-size:7.0pt;font-family:
  "함초롬돋움",serif;color:red;letter-spacing:-.15pt'>현장체험학습</span></i></b></p>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><i><span style='font-size:7.0pt;font-family:"함초롬돋움",serif;
  color:red;letter-spacing:-.15pt'>(1,2,3)</span></i></b><i><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>　</span></i></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:black'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl70 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:8.0pt;font-family:"함초롬돋움",serif'>생명존중교육</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.8pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=23 style='width:17.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:19.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>19</span></b></p>
  </td>
  <td width=35 style='width:25.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:double black 4.5pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:16.8pt'>
  <td width=24 style='width:17.85pt;border-top:none;border-left:double black 4.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:16.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>20</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:16.8pt'>
  <p class=xl75 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:16.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif;
  letter-spacing:-.2pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:16.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:16.8pt'>
  <p class=xl66 style='background:transparent'><b><span style='font-size:8.0pt;
  font-family:"함초롬돋움",serif;color:blue;letter-spacing:-.2pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:16.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:16.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:16.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:black'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:16.8pt'>
  <p class=xl66 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:7.0pt;font-family:"함초롬돋움",serif;letter-spacing:-.1pt'>가정폭력예방교육</span></b></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:16.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:16.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.2pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:16.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:16.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  layout-grid-mode:both;vertical-align:middle;word-break:normal'><span
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:16.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:black'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:16.8pt'>
  <p class=xl77 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif;color:black'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:16.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:16.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><i><span lang=ZH-CN style='font-size:7.0pt;font-family:
  "함초롬돋움",serif;color:red;letter-spacing:-.15pt'>현장체험학습</span></i></b></p>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><i><span style='font-size:7.0pt;font-family:"함초롬돋움",serif;
  color:red;letter-spacing:-.15pt'>(1,2,3)</span></i></b><i><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>　</span></i></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:16.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:16.8pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:16.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:black'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:16.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.4pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:16.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:16.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:16.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:16.8pt'>
  <p class=xl79 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=23 style='width:17.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:16.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>20</span></b></p>
  </td>
  <td width=35 style='width:25.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:double black 4.5pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:16.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:20.0pt'>
  <td width=24 style='width:17.85pt;border-top:none;border-left:double black 4.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>21</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:7.0pt;font-family:
  "함초롬돋움",serif;letter-spacing:-.15pt'>미세먼지대응교육</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl66 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;color:blue;letter-spacing:
  -.2pt'>과학독후감대회</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:black'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:8.0pt;font-family:
  "함초롬돋움",serif;letter-spacing:-.2pt'>학부모독서회</span></b><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:8.0pt;font-family:
  "함초롬돋움",serif;color:blue;letter-spacing:-.2pt'>여름방학식</span></b></p>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.2pt'>1<span lang=ZH-CN>학기 종료일</span></span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:8.0pt;font-family:
  "함초롬돋움",serif;color:blue;letter-spacing:-.2pt'>여름방학종료일</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:black'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl77 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif;color:black'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl66 style='background:transparent'><b><i><span lang=ZH-CN
  style='font-size:7.0pt;font-family:"함초롬돋움",serif;color:red;letter-spacing:
  -.15pt'>현장체험학습</span></i></b></p>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><i><span style='font-size:7.0pt;font-family:"함초롬돋움",serif;
  color:red;letter-spacing:-.15pt'>(1,2,3)</span></i></b><i><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>　</span></i></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl66 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;letter-spacing:-.2pt'>장애이해교육</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:black'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:7.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.35pt'>2<span lang=ZH-CN>차지필평가</span>(2)</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>설날</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl69 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  layout-grid-mode:both;vertical-align:middle;word-break:normal'><span
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></p>
  </td>
  <td width=23 style='width:17.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>21</span></b></p>
  </td>
  <td width=35 style='width:25.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:double black 4.5pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:29.2pt'>
  <td width=24 style='width:17.85pt;border-top:none;border-left:double black 4.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:29.2pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>22</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:29.2pt'>
  <p class=xl69 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:29.2pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:7.0pt;font-family:"함초롬돋움",serif;
  letter-spacing:-.15pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:29.2pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:29.2pt'>
  <p class=xl66 style='background:transparent'><b><i><span lang=ZH-CN
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;color:red'>백일장</span></i></b></p>
  <p class=xl66 style='background:transparent'><b><i><span style='font-size:
  8.0pt;font-family:"함초롬돋움",serif;color:red'>(<span lang=ZH-CN>앨범사진</span>)</span></i></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:29.2pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:29.2pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:29.2pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:black'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:29.2pt'>
  <p class=a align=left style='text-align:left;line-height:normal;word-break:
  normal'><span style='font-size:9.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:29.2pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:29.2pt'>
  <p class=xl66 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;color:blue;letter-spacing:
  -.2pt'>여름방학시작일</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:29.2pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:29.2pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:8.0pt;font-family:
  "함초롬돋움",serif;color:blue;letter-spacing:-.2pt'>개학일</span></b></p>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.2pt'>2<span lang=ZH-CN>학기 시작일</span></span></b></p>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:8.0pt;font-family:
  "함초롬돋움",serif;letter-spacing:-.2pt'>생명존중교육</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:29.2pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:29.2pt'>
  <p class=xl77 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif;color:black'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:29.2pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:29.2pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  layout-grid-mode:both;vertical-align:middle;word-break:normal'><span
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:29.2pt'>
  <p class=xl69 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:29.2pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:29.2pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:29.2pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:7.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.35pt'>2<span lang=ZH-CN>차지필평가</span>(2)</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:29.2pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:29.2pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>설날</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:29.2pt'>
  <p class=xl69 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:29.2pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.2pt'>&nbsp;</span></b></p>
  </td>
  <td width=23 style='width:17.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:29.2pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>22</span></b></p>
  </td>
  <td width=35 style='width:25.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:double black 4.5pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:29.2pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:12.8pt'>
  <td width=24 style='width:17.85pt;border-top:none;border-left:double black 4.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>23</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl69 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:8.0pt;font-family:
  "함초롬돋움",serif;color:red;letter-spacing:-.2pt'>개교기념일</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl66 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif;color:red'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:7.0pt;font-family:"함초롬돋움",serif'>성폭력예방교육</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=left style='text-align:left;line-height:normal;word-break:
  normal'><span style='font-size:9.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl69 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><b><span style='font-size:8.0pt;
  font-family:"함초롬돋움",serif;letter-spacing:-.2pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl69 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><span lang=ZH-CN style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:7.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.35pt'>2<span lang=ZH-CN>차지필평가</span>(2)</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>설날　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.2pt'>&nbsp;</span></b></p>
  </td>
  <td width=23 style='width:17.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>23</span></b></p>
  </td>
  <td width=35 style='width:25.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:double black 4.5pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:27.85pt'>
  <td width=24 style='width:17.85pt;border-top:none;border-left:double black 4.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:27.85pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>24</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:27.85pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:27.85pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:7.0pt;font-family:
  "함초롬돋움",serif;color:blue;letter-spacing:-.15pt'>교육과정설명회</span></b><span
  lang=ZH-CN style='font-size:8.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:27.85pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:27.85pt'>
  <p class=xl70 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:27.85pt'>
  <p class=xl69 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:27.85pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:8.0pt;font-family:
  "함초롬돋움",serif;letter-spacing:-.2pt'>학부모독서회</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:27.85pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:27.85pt'>
  <p class=xl66 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;color:blue;letter-spacing:
  -.2pt'>진로캠프</span></b><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.2pt'>(1)</span></b></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:27.85pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:27.85pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:27.85pt'>
  <p class=xl69 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:27.85pt'>
  <p class=xl66 style='background:transparent'><b><span style='font-size:8.0pt;
  font-family:"함초롬돋움",serif;letter-spacing:-.2pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:27.85pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:27.85pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:27.85pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:27.85pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:7.0pt;font-family:
  "함초롬돋움",serif;letter-spacing:-.15pt'>환경보호활동</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:27.85pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:27.85pt'>
  <p class=xl66 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;color:blue'>솔향제</span></b><b><span
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;color:blue'>(<span
  lang=ZH-CN>전시</span>)</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:27.85pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:27.85pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  layout-grid-mode:both;vertical-align:middle;word-break:normal'><span
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:27.85pt'>
  <p class=xl69 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:27.85pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>대체공휴일</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:27.85pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:27.85pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.2pt'>&nbsp;</span></b></p>
  </td>
  <td width=23 style='width:17.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:27.85pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>24</span></b></p>
  </td>
  <td width=35 style='width:25.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:double black 4.5pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:27.85pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:18.8pt'>
  <td width=24 style='width:17.85pt;border-top:none;border-left:double black 4.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:18.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>25</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:18.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:18.8pt'>
  <p class=a align=left style='text-align:left;line-height:normal;word-break:
  normal'><b><span style='font-size:7.0pt;font-family:"함초롬돋움",serif;color:blue;
  letter-spacing:-.15pt'> </span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:18.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:18.8pt'>
  <p class=xl70 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;letter-spacing:-.2pt'>환경보호활동</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:18.8pt'>
  <p class=xl69 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:18.8pt'>
  <p class=a align=left style='text-align:left;line-height:normal;word-break:
  normal'><b><span style='font-size:5.5pt;font-family:"함초롬돋움",serif;letter-spacing:
  -.1pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:18.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:18.8pt'>
  <p class=xl66 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif;color:red'>&nbsp;</span></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:18.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:18.8pt'>
  <p class=xl70 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:18.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:18.8pt'>
  <p class=xl66 style='background:transparent'><b><span style='font-size:8.0pt;
  font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:18.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:18.8pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:18.8pt'>
  <p class=xl69 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:18.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><i><span style='font-size:9.0pt;font-family:"함초롬돋움",serif;
  color:red'>&nbsp;</span></i></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:18.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:18.8pt'>
  <p class=xl66 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;color:blue'>솔향제</span></b><b><span
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;color:blue'>(<span
  lang=ZH-CN>공연</span>)</span></b><span lang=ZH-CN style='font-size:9.0pt;
  font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:18.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:18.8pt'>
  <p class=xl77 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>성탄절</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:18.8pt'>
  <p class=xl69 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:18.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:18.8pt'>
  <p class=xl80 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:18.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  layout-grid-mode:both;vertical-align:middle;word-break:normal'><span
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>&nbsp;</span></p>
  </td>
  <td width=23 style='width:17.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:18.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>25</span></b></p>
  </td>
  <td width=35 style='width:25.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:double black 4.5pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:18.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:19.8pt'>
  <td width=24 style='width:17.85pt;border-top:none;border-left:double black 4.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>26</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl69 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:7.0pt;font-family:
  "함초롬돋움",serif;letter-spacing:-.35pt'>　</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=a align=left style='text-align:left;line-height:normal;word-break:
  normal'><b><span style='font-size:5.5pt;font-family:"함초롬돋움",serif;letter-spacing:
  -.1pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.8pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl69 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl66 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl66 style='background:transparent'><b><span style='font-size:8.0pt;
  font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl72 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl66 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;letter-spacing:-.4pt'>성매매예방교육</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl69 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><i><span style='font-size:9.0pt;font-family:"함초롬돋움",serif;
  color:red'>&nbsp;</span></i></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl72 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:7.0pt;font-family:
  "함초롬돋움",serif;letter-spacing:-.35pt'>미세먼지대용교육</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:19.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.8pt'>
  <p class=xl80 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.8pt'>
  <p class=xl79 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=23 style='width:17.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:19.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>26</span></b></p>
  </td>
  <td width=35 style='width:25.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:double black 4.5pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:19.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:20.0pt'>
  <td width=24 style='width:17.85pt;border-top:none;border-left:double black 4.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>27</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl69 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl66 style='background:transparent'><b><span style='font-size:8.0pt;
  font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl72 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl66 style='layout-grid-mode:char;background:transparent'><b><span
  lang=ZH-CN style='font-size:8.0pt;font-family:"함초롬돋움",serif;letter-spacing:
  -.2pt'>인성교육주간</span></b></p>
  <p class=xl66 style='layout-grid-mode:char;background:transparent'><b><span
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;letter-spacing:-.2pt'>(6/27-7/1)</span></b></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl69 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl66 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:8.0pt;font-family:
  "함초롬돋움",serif;letter-spacing:-.2pt'>학부모독서회</span></b><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><i><span style='font-size:9.0pt;font-family:"함초롬돋움",serif;
  color:red'>&nbsp;</span></i></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><span style='font-size:9.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl80 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:black'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl79 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=23 style='width:17.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>27</span></b></p>
  </td>
  <td width=35 style='width:25.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:double black 4.5pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:42.8pt'>
  <td width=24 style='width:17.85pt;border-top:none;border-left:double black 4.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:42.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>28</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:42.8pt'>
  <p class=xl72 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:42.8pt'>
  <p class=xl70 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;letter-spacing:-.2pt'>집중상담주간</span></b></p>
  <p class=xl70 style='background:transparent'><b><span style='font-size:8.0pt;
  font-family:"함초롬돋움",serif;letter-spacing:-.2pt'>(3/28-4.8)</span></b></p>
  <p class=xl70 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;letter-spacing:-.2pt'>환경보호활동</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:42.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:42.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:42.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:42.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:42.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:42.8pt'>
  <p class=xl66 style='layout-grid-mode:char;background:transparent'><b><span
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;letter-spacing:-.2pt'>&nbsp;</span></b></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:42.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:42.8pt'>
  <p class=xl66 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:42.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:42.8pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:42.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:42.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><span style='font-size:9.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:42.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:42.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><i><span style='font-size:9.0pt;font-family:"함초롬돋움",serif;
  color:red'>&nbsp;</span></i></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:42.8pt'>
  <p class=xl72 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:42.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:7.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.35pt'>2<span lang=ZH-CN>차지필평가</span>(3)</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:42.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:42.8pt'>
  <p class=xl66 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:42.8pt'>
  <p class=xl80 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:42.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:42.8pt'>
  <p class=xl80 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:black'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:42.8pt'>
  <p class=xl68 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:8.0pt;font-family:"함초롬돋움",serif;color:blue;letter-spacing:
  -.2pt'>겨울방학종료일</span></b></p>
  </td>
  <td width=23 style='width:17.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:42.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>28</span></b></p>
  </td>
  <td width=35 style='width:25.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:double black 4.5pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:42.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:12.8pt'>
  <td width=24 style='width:17.85pt;border-top:none;border-left:double black 4.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>29</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='layout-grid-mode:char;background:transparent'><span
  lang=ZH-CN style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl76 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl72 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:7.0pt;font-family:
  "함초롬돋움",serif;letter-spacing:-.15pt'>학교폭력예방교육</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl80 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl72 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:8.0pt;font-family:
  "함초롬돋움",serif;letter-spacing:-.2pt'>학부모독서회</span></b></p>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:7.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.35pt'>2<span lang=ZH-CN>차지필평가</span>(3)</span></b><span
  lang=ZH-CN style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.4pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl80 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl68 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=23 style='width:17.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>29</span></b></p>
  </td>
  <td width=35 style='width:25.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:double black 4.5pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:12.8pt'>
  <td width=24 style='width:17.85pt;border-top:none;border-left:double black 4.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>30</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl80 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl72 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><b><span lang=ZH-CN
  style='font-size:7.0pt;font-family:"함초롬돋움",serif'>환경보호활동</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl80 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl66 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif;color:red'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl72 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='layout-grid-mode:char;background:transparent'><b><span
  style='font-size:7.0pt;font-family:"함초롬돋움",serif;letter-spacing:-.15pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl66 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl80 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl72 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:7.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.35pt'>2<span lang=ZH-CN>차지필평가</span>(3)</span></b><span
  lang=ZH-CN style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>금</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif;
  color:blue;letter-spacing:-.2pt'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl80 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:black'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl70 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl65 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:12.8pt'>
  <p class=xl68 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=23 style='width:17.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>30</span></b></p>
  </td>
  <td width=35 style='width:25.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:double black 4.5pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:12.8pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:20.0pt'>
  <td width=24 style='width:17.85pt;border-top:none;border-left:double black 4.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>31</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl72 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>목　</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl73 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl80 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif'>&nbsp;</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl73 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl72 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl66 style='background:transparent'><b><span style='font-size:7.0pt;
  font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl72 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl73 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=xl80 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>일</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=xl81 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl72 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>수</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl73 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl72 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl73 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl80 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:black'>월</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:8.0pt;font-family:
  "함초롬돋움",serif;color:blue;letter-spacing:-.2pt'>창의사고력대회</span></b></p>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span lang=ZH-CN style='font-size:8.0pt;font-family:
  "함초롬돋움",serif;letter-spacing:-.2pt'>다문화이해교육</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl72 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl73 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:#F3DBDB;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=xl72 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>토</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  #F3DBDB;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  layout-grid-mode:both;vertical-align:middle;word-break:normal'><span
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:red'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl80 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif;color:black'>화</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl82 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif;color:black'>&nbsp;</span></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl72 style='background:transparent'><span lang=ZH-CN
  style='font-size:9.0pt;font-family:"함초롬돋움",serif'>　</span></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:20.0pt'>
  <p class=xl74 style='background:transparent'><span style='font-size:9.0pt;
  font-family:"함초롬돋움",serif'>&nbsp;</span></p>
  </td>
  <td width=23 style='width:17.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-family:"함초롬돋움",serif'>31</span></b></p>
  </td>
  <td width=35 style='width:25.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:double black 4.5pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:20.0pt'>
  <p class=a align=center style='text-align:center;line-height:normal;
  word-break:normal'><b><span style='font-size:8.0pt;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:.15in'>
  <td width=24 rowspan=3 style='width:17.85pt;border-top:none;border-left:double black 4.5pt;
  border-bottom:double black 4.5pt;border-right:solid black 1.0pt;padding:1.4pt 1.4pt 1.4pt 1.4pt;
  height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  lang=ZH-CN style='font-size:7.0pt;line-height:103%;font-family:"함초롬돋움",serif'>수업</span></b></p>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  lang=ZH-CN style='font-size:7.0pt;line-height:103%;font-family:"함초롬돋움",serif'>일수</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>1</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>20</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>1</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>21</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>1</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>20</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>1</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>20</span></b></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>1</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>15</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>1</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>8</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>1</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>20</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>1</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>19</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>1</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>21</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>1</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>22</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>1</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>6</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>1</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
  <td width=58 colspan=2 style='width:43.35pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:double black 4.5pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif;letter-spacing:
  -.4pt'>96+96=192</span></b></p>
  </td>
 </tr>
 <tr style='height:.15in'>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>2</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>20</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>2</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>21</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>2</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>20</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>2</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>20</span></b></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>2</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>15</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>2</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>8</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>2</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>20</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>2</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>19</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>2</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>21</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>2</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>22</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>2</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>6</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;background:white;padding:
  1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>2</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
  <td width=58 colspan=2 style='width:43.35pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:double black 4.5pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif;letter-spacing:
  -.4pt'>96+96=192</span></b></p>
  </td>
 </tr>
 <tr style='height:.15in'>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:double black 4.5pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>3</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:double black 4.5pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>20</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  double black 4.5pt;border-right:solid black 1.0pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>3</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:double black 4.5pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>21</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:double black 4.5pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>3</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:double black 4.5pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>20</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  double black 4.5pt;border-right:solid black 1.0pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>3</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:double black 4.5pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>20</span></b></p>
  </td>
  <td width=25 style='width:18.75pt;border-top:none;border-left:none;
  border-bottom:double black 4.5pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>3</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:double black 4.5pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>15</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  double black 4.5pt;border-right:solid black 1.0pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>3</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:double black 4.5pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>8</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:double black 4.5pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>3</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:double black 4.5pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>20</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  double black 4.5pt;border-right:solid black 1.0pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>3</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:double black 4.5pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>19</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:double black 4.5pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>3</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:double black 4.5pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>21</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  double black 4.5pt;border-right:solid black 1.0pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>3</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:double black 4.5pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>22</span></b></p>
  </td>
  <td width=21 style='width:15.95pt;border-top:none;border-left:none;
  border-bottom:double black 4.5pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>3</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:double black 4.5pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'> 5</span></b></p>
  </td>
  <td width=21 style='width:16.0pt;border-top:none;border-left:none;border-bottom:
  double black 4.5pt;border-right:solid black 1.0pt;background:white;
  padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>3</span></b></p>
  </td>
  <td width=74 style='width:55.75pt;border-top:none;border-left:none;
  border-bottom:double black 4.5pt;border-right:solid black 1.0pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif'>&nbsp;</span></b></p>
  </td>
  <td width=58 colspan=2 style='width:43.35pt;border-top:none;border-left:none;
  border-bottom:double black 4.5pt;border-right:double black 4.5pt;background:
  white;padding:1.4pt 1.4pt 1.4pt 1.4pt;height:.15in'>
  <p class=a align=center style='text-align:center;word-break:normal'><b><span
  style='font-size:8.0pt;line-height:103%;font-family:"함초롬돋움",serif;letter-spacing:
  -.4pt'>96+95=191</span></b></p>
  </td>
 </tr>
</table>

</div>

<p class=MsoNormal><span style='font-size:1.0pt'>&nbsp;</span></p>

<p class=a align=center style='text-align:center;word-break:normal'>&nbsp;</p>

<p class=a align=center style='text-align:center;word-break:normal'>&nbsp;</p>

</div>

<div style="position: fixed; bottom: 5px; left: 5px;">
            <a href="https://swon.wonchan.net/">
                <strong style="color: black; font-size: 50px;"><ins>메인페이지로..</ins></strong>
            </a>
        </div>

</body>

</html>
