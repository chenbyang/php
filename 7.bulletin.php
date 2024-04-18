<?php
    error_reporting(0);//禁止使用PHP錯誤報告
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");//建立一個資料庫連結的變數$conn
    $result=mysqli_query($conn, "select * from bulletin");//建立一個查詢資料庫指令select * from bulletin之變數$result
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";//顯示一個表格邊框像素為2，顯示表格按照順序顯示的佈告和發佈時間
    while ($row=mysqli_fetch_array($result)){//while迴圈直到無法抓取到資料之後就會停止
        echo "<tr><td>";//定義表格行定義一個表格單元
        echo $row["bid"];//顯示資料庫裡的bid資料
        echo "</td><td>";//</td>前一個表格的結束 <td>下個表格的開始
        echo $row["type"];//顯示資料庫type裡面的資料
        echo "</td><td>"; 
        echo $row["title"];//顯示資料庫title裡面的資料
        echo "</td><td>";
        echo $row["content"]; //顯示資料庫content裡面的資料
        echo "</td><td>";
        echo $row["time"];//顯示資料庫time裡面的資料
        echo "</td></tr>";
    }
    echo "</table>"
?>
