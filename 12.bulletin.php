<?php
    error_reporting(0);
    session_start();
    if (!isset($_SESSION["id"])){
        echo "請登入系統";
        echo "<meta http-equiv='refresh' content='3; url=login.html'>"; // 登入頁面
    }else{
        echo "歡迎 {$_SESSION['id']} 登入 [<a href=logout.php>登出</a>]<p>[<a href=bulletin_add_form.php>新增佈告</a>]<p>"; //此為表格上方標示
        $conn=mysqli_connect("localhost","root","", "mydb");
        $result=mysqli_query($conn, "select * from bulletin");
        echo "<table border=2><tr><td>佈告操作</td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>"; //此為表格標題
        while ($row=mysqli_fetch_array($result)){
            echo "<tr><td>";
            echo "<a href=bulletin_edit_form.php?bid='$row[bid]'>修改</a> <a href=delete.php?bid={$row[bid]}>刪除</a>"; //佈告修改及刪除功能
            echo "</td><td>";
            echo $row[bid];
            echo "</td><td>";
            echo $row[type];
            echo "</td><td>"; 
            echo $row[title];
            echo "</td><td>";
            echo $row[content]; 
            echo "</td><td>";
            echo $row[time];
            echo "</td></tr>";
        }
        echo "</table>";
    }
?>