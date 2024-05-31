<?php
    session_start(); //啟動Session
    unset($_SESSION["id"]); //刪除一個叫做id的Session
    echo "登出成功...."; //網頁上印出登出成功....
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>"; //三秒後跳轉到2.login.html

?>
