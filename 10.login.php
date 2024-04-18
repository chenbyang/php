<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); //建立一個資料庫連結的變數$conn
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user"); //建立一個查詢資料庫指令select * from user的變數為$result
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE; //將$login布林值設定為FALSE
   while ($row=mysqli_fetch_array($result)) { //建立一個while迴圈直到無法抓取資料後即停止
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) { //如果輸入的id和資料庫的id一樣 && 輸入的pwd和資料庫的pwd一樣
       $login=TRUE; //將login設定為布林TRUE
     }
   } 
   if ($login==TRUE) { //如果login為TURE
    session_start(); //開啟一個SESSION
    $_SESSION["id"]=$_POST["id"]; //如果SESSION id 等於使用者輸入的id
    echo "登入成功"; //在網頁上顯示登入成功
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>"; //在3秒後自動跳回 11.bulletin.php
   }

  else{
    echo "帳號/密碼 錯誤"; //在網頁上顯示帳號和密碼之錯誤
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; //在3秒後自動跳回 2.login.html
  }
?>
