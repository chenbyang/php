<?php
    session_start();//開始一個SESSION
    unset($_SESSION["counter"]);//清除counter的SESSION
    echo "counter重置成功....";//在網頁上顯示 counter重置成功....
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";//在2秒後會自動跳到 8.counter.php

?>
