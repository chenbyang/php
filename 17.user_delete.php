<?php
    error_reporting(0); // 關閉錯誤的報告顯示
    session_start(); // 啟動Session
    if (!$_SESSION["id"]) {//如果Session沒有id
        echo "請登入帳號"; //網頁印出請登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 三秒後跳轉到網頁2.login.html
    }
    }
    else{   //有id
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); //資料庫連線
        $sql="delete from user where id='{$_GET["id"]}'"; //資料庫指令查詢
        #echo $sql;
        if (!mysqli_query($conn,$sql)){ //資料庫指令執行失敗
            echo "使用者刪除錯誤";
        }else{ //資料庫指令執行成功
            echo "使用者刪除成功";
        }
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>"; //三秒後跳轉到18.user.php
    }
?>
