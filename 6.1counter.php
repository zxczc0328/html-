<?php
    error_reporting(0);
    session_start();
    if (!isset($_SESSION["counter1"])){
        $_SESSION["counter1"]=1; //起始值為1
    }else{
        $_SESSION["counter1"]++;
    }
    echo "登入{$_SESSION["counter1"]}人次"; //頁面登入加總
?>