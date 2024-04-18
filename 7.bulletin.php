<?php
    error_reporting(0); //禁用PHP錯誤報告
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); //創建一個建立資料庫連結的變數$conn
    $result=mysqli_query($conn, "select * from bulletin"); //創建一個查詢資料庫指令select * from bulletin的變數$result
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>"; //顯示一個表格邊框像素為2，顯示表格每格按照順序顯示佈告編號到發佈時間
    while ($row=mysqli_fetch_array($result)){ //一個while迴圈 無法抓取到資料後就會停止
        echo "<tr><td>"; //定義一個表格行 定義一個表格單元
        echo $row["bid"]; //顯示資料表裡bid的資料
        echo "</td><td>"; //</td>前一個表格的結束 <td>下個表格的開始
        echo $row["type"]; //顯示資料表裡type的資料
        echo "</td><td>"; 
        echo $row["title"]; //顯示資料表裡title的資料
        echo "</td><td>";
        echo $row["content"]; //顯示資料表裡content的資料
        echo "</td><td>";
        echo $row["time"]; //顯示資料表裡time的資料
        echo "</td></tr>"; // </td>前一個表格的結束 </tr>結束一個表格行
    }
    echo "</table>" //html表格的結尾
?>
