<?php
    session_start(); //開始一個SESSION

    if (!isset($_SESSION["counter"])) //如果沒有一個SESSION叫做
        $_SESSION["counter"]=1;
    else
        $_SESSION["counter"]++;

    echo "counter=".$_SESSION["counter"];
    echo "<br><a href=9.reset_counter.php>重置counter</a>";
?>
