<?php
    #mysqli_connect() 建立資料庫連結
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");//創建一個建立資料庫連結的變數$conn
    #mysqli_query() 從資料庫查詢資料
    $result=mysqli_query($conn, "select * from user");//創建一個查詢資料庫指令"select * from user"的變數$result
    #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
    $row=mysqli_fetch_array($result);//創建一個查詢出來的資料一筆一筆抓出來的變數$row
    echo $row["id"] . " " . $row["pwd"]."<br>";//顯示immust資料庫中id和pwd的值 
    $row=mysqli_fetch_array($result);//創建一個查詢出來的資料一筆一筆抓出來的變數$row
    echo $row["id"] . " " . $row["pwd"];//顯示immust資料庫中id和pwd的值
?>
