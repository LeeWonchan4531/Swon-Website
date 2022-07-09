<?php
        //URL 파라미터(학년)
        $grade = $_GET['grade'];
        //URL 파라미터(반)
        $class = $_GET['class'];
        //URL 파라미터(학년) 3보다 클경우
        if ($_GET['grade'] > 3) {
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: https://swon.wonchan.net/error.php');
        }
        
        //URL 파라미터(반) 8보다 클경우
        if ($_GET['class'] > 8) {
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: https://swon.wonchan.net/error.php');
        }
        
        
        //URL 파라미터 확인(학년) 없을경우
        if(isset($_GET['grade']) && !empty($_GET['grade'])){
        } else {
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: https://swon.wonchan.net/error.php');
        }
        //URL 파라미터 확인(반) 없을경우
        if(isset($_GET['class']) && !empty($_GET['class'])){
        } else {
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: https://swon.wonchan.net/error.php');
        }
        
        //URL 파라미터 확인(학년) 0 감지
        if($_GET['grade'] === '0'){
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: https://swon.wonchan.net/error.php');
        }
        //URL 파라미터 확인(반)
        if($_GET['class'] === '0'){
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: https://swon.wonchan.net/error.php');
        }