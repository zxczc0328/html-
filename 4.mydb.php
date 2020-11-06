<?php
    error_reporting(0); //把警告訊息關掉
    
    //PHP與MYSQL建立資料連線
    $conn = mysqli_connect("localhost","root","", "mydb"); 
    if (mysqli_connect_error($conn)) //連線失敗
        die("資料庫連線錯誤");

    mysqli_set_charset($conn, "utf8"); //採用UTF-8 編碼
    $result=mysqli_query($conn, "select * from user");
    //向與指定關聯的服務器上的數據庫發送查詢
    while ($row=mysqli_fetch_array($result)) {
        echo $row[id];
        echo " ";
        echo $row[pwd];
        echo "<br>";
    }
?>