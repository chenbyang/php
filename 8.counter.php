<?php
    session_start();//開始SESSION
    if (!isset($_SESSION["counter"]))//如果沒有一個SESSION叫做counter
        $_SESSION["counter"]=1;//counter變數設定為1
    else
        $_SESSION["counter"]++;//counter變數加1

    echo "counter=".$_SESSION["counter"];//在網頁上顯示counter=counter的數值
    echo "<br><a href=9.reset_counter.php>重置counter</a>";//建立一個超連結文字跳到9.reset_counter.php的網頁
?>
