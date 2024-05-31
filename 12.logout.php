<?php
    session_start();//啟動繪畫
    unset($_SESSION["id"]);//刪除名為"id" 的會話變數。
    echo "登出成功....";//映出"登出成功...."到網頁上。
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";//3秒後跳轉到url=2.login.html網頁

?>
