<?php
    session_start(); //開始一個SESSION

    if (!isset($_SESSION["counter"])) //如果沒有一個SESSION叫做
        $_SESSION["counter"]=1; //將SESSION的counter變數設定為1
    else
        $_SESSION["counter"]++; //將SESSION的counter變數加1

    echo "counter=".$_SESSION["counter"]; //在網頁上顯示counter= 和 counter的數值
    echo "<br><a href=9.reset_counter.php>重置counter</a>"; 創建一個文字超連結可以跳到9.reset_counter.php的網頁
?>
