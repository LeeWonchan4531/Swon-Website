<?php
        require_once ("function_api-key.php");
        
        //날짜
        $date = date("Ymd", time());
        //학사일정 내일 날짜 계산
        $datetommorow = $date + 1;
        //학사일정 모레 날짜 계산
        $datetwo = $date + 2;
        //시간표 위 시간출력
        $datetime = date("H:i:s");
        //URL 파라미터(학년)
        $grade = $_GET['grade'];
        //URL 파라미터(반)
        $class = $_GET['class'];
        
        

        
        //1교시
        $URL1 = "https://open.neis.go.kr/hub/misTimetable?KEY=$apikey&ATPT_OFCDC_SC_CODE=F10&SD_SCHUL_CODE=7401251&AY=2022&SEM=1&ALL_TI_YMD=$date&DGHT_CRSE_SC_NM=%EC%A3%BC%EA%B0%84&GRADE=$grade&CLASS_NM=$class&PERIO=1";
        $xml_string1 = file_get_contents($URL1);
        $xml1 = simplexml_load_string($xml_string1);
        
        //2교시
        $URL2 = "https://open.neis.go.kr/hub/misTimetable?KEY=$apikey&ATPT_OFCDC_SC_CODE=F10&SD_SCHUL_CODE=7401251&AY=2022&SEM=1&ALL_TI_YMD=$date&DGHT_CRSE_SC_NM=%EC%A3%BC%EA%B0%84&GRADE=$grade&CLASS_NM=$class&PERIO=2";
        $xml_string2 = file_get_contents($URL2);
        $xml2 = simplexml_load_string($xml_string2);
        
        //3교시
        $URL3 = "https://open.neis.go.kr/hub/misTimetable?KEY=$apikey&ATPT_OFCDC_SC_CODE=F10&SD_SCHUL_CODE=7401251&AY=2022&SEM=1&ALL_TI_YMD=$date&DGHT_CRSE_SC_NM=%EC%A3%BC%EA%B0%84&GRADE=$grade&CLASS_NM=$class&PERIO=3";
        $xml_string3 = file_get_contents($URL3);
        $xml3 = simplexml_load_string($xml_string3);
        
        //4교시
        $URL4 = "https://open.neis.go.kr/hub/misTimetable?KEY=$apikey&ATPT_OFCDC_SC_CODE=F10&SD_SCHUL_CODE=7401251&AY=2022&SEM=1&ALL_TI_YMD=$date&DGHT_CRSE_SC_NM=%EC%A3%BC%EA%B0%84&GRADE=$grade&CLASS_NM=$class&PERIO=4";
        $xml_string4 = file_get_contents($URL4);
        $xml4 = simplexml_load_string($xml_string4);
        
        //5교시
        $URL5 = "https://open.neis.go.kr/hub/misTimetable?KEY=$apikey&ATPT_OFCDC_SC_CODE=F10&SD_SCHUL_CODE=7401251&AY=2022&SEM=1&ALL_TI_YMD=$date&DGHT_CRSE_SC_NM=%EC%A3%BC%EA%B0%84&GRADE=$grade&CLASS_NM=$class&PERIO=5";
        $xml_string5 = file_get_contents($URL5);
        $xml5 = simplexml_load_string($xml_string5);
        
        //6교시
        $URL6 = "https://open.neis.go.kr/hub/misTimetable?KEY=$apikey&ATPT_OFCDC_SC_CODE=F10&SD_SCHUL_CODE=7401251&AY=2022&SEM=1&ALL_TI_YMD=$date&DGHT_CRSE_SC_NM=%EC%A3%BC%EA%B0%84&GRADE=$grade&CLASS_NM=$class&PERIO=6";
        $xml_string6 = file_get_contents($URL6);
        $xml6 = simplexml_load_string($xml_string6);
        
        //7교시
        $URL7 = "https://open.neis.go.kr/hub/misTimetable?KEY=$apikey&ATPT_OFCDC_SC_CODE=F10&SD_SCHUL_CODE=7401251&AY=2022&SEM=1&ALL_TI_YMD=$date&DGHT_CRSE_SC_NM=%EC%A3%BC%EA%B0%84&GRADE=$grade&CLASS_NM=$class&PERIO=7";
        $xml_string7 = file_get_contents($URL7);
        $xml7 = simplexml_load_string($xml_string7);
        
        //----------------------------------------------------------
        //학사일정 시작
        //오늘
        $URL8 = "https://open.neis.go.kr/hub/SchoolSchedule?KEY=$apikey&ATPT_OFCDC_SC_CODE=F10&SD_SCHUL_CODE=7401251&AA_YMD=$date";
        $xml_string8 = file_get_contents($URL8);
        $xml8 = simplexml_load_string($xml_string8);
        //내일
        $URL9 = "https://open.neis.go.kr/hub/SchoolSchedule?KEY=$apikey&ATPT_OFCDC_SC_CODE=F10&SD_SCHUL_CODE=7401251&AA_YMD=$datetommorow";
        $xml_string9 = file_get_contents($URL9);
        $xml9 = simplexml_load_string($xml_string9);
        //모레
        $URL10 = "https://open.neis.go.kr/hub/SchoolSchedule?KEY=$apikey&ATPT_OFCDC_SC_CODE=F10&SD_SCHUL_CODE=7401251&AA_YMD=$datetwo";
        $xml_string10 = file_get_contents($URL10);
        $xml10 = simplexml_load_string($xml_string10);