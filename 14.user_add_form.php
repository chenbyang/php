<html>
    <head><title>新增使用者</title></head> //網站標題為新增使用者
    <body>
<?php        
    error_reporting(0); //關閉錯誤和報告
    session_start(); // 啟動Session
    if (!$_SESSION["id"]) { //如果Session沒有id
        echo "請登入帳號"; //網頁印出請登入的帳號
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 三秒後跳轉到網頁2.login.html
    }
    else{    
        echo "
            <form action=15.user_add.php method=post> //顯示表單使用方法post送出後會跳轉到15.user_add.php
                帳號：<input type=text name=id><br> //帳號輸入欄名稱為id
                密碼：<input type=text name=pwd><p></p> //密碼輸入欄名稱為pwd
                <input type=submit value=新增> <input type=reset value=清除> //顯示新增和清除按鈕
            </form> //表單結尾
        ";
    }
?>
    </body>
</html>
