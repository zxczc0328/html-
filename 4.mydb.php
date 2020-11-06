<?php

    errer_reporting(0); #把警告訊息關掉
    #php要怎麼跟mysql資料庫進行連結，有三個步驟
    #1.mysqli_connect，必須要設定ip(本地端為locahosh)
    #帳號、密碼，以連結的資料庫(mybd)
    $conn = mysqli_connect("locahost","root","","mydb");

    #2.mysqli_query從表格user找出資料
    $result = mysqli_query($conn,"select * from user");

    #3.mysqli_fetch_array從$result擷取每筆資料
    $row = mysqli_fetch_array($result);     #每fetch一次抓一次資料
    echo $row[id]." " .$row[pwd];

    echo "<br>";

    $row = mysqli_fetch_array($result);    #每fetch一次抓一次資料
    echo $row[id]." ".$row[pwd];


?>