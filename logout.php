<?php
session_start();
//セッションを変数をすべて解除する
$_SESSION = array();
if(isset($_COOKIE[session_name()])){
    setcookie(session_name(),"",time()-1800,"/");//sessionIDの削除
}
session_destroy();//セッションの破棄
header("Location:login.php");
?>
