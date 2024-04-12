<?php 
    if (($_POST["id"] == "john") && ($_POST["pwd"]=="john1234"))//假如2.login.html傳過來的id和pwd是john跟john1234
        echo "登入成功";//是true就顯示登入成功
    else
        echo "登入失敗";//是false就顯示登入失敗
?>
