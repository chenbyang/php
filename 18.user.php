<html>
    <head><title>使用者管理</title></head> // 網站的標題
    <body>
    <?php
        error_reporting(0); //關閉錯誤的報告
        session_start(); //啟動seession
        if (!$_SESSION["id"]) {  //如果Session沒有id
            echo "請登入帳號"; //網頁印出請登入帳號
            echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 三秒後跳轉到網頁2.login.html
        }
        else{   //有id
            echo "<h1>使用者管理</h1> //標題大小為h1
                [<a href=14.user_add_form.php>新增使用者</a>] [<a href=11.bulletin.php>回佈告欄列表</a>]<br> //建立兩個文字的超連結
                <table border=1> //邊界大小設定為1
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";
            
            $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); //建立資料庫連線
            $result=mysqli_query($conn, "select * from user"); //資料庫指令查詢
            while ($row=mysqli_fetch_array($result)){ //迴圈查詢
                echo "<tr><td><a href=19.user_edit_form.php?id={$row['id']}>修改</a>||<a href=17.user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            } //修改跟刪除的文字超連結
            echo "</table>";//表格的結尾
        }
    ?> 
    </body>
</html>
