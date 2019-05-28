<?php

    LogOut();
function LogOut() {
    session_start();
    $_SESSION=array();
    session_destroy();
    header("Location:index.php");
}
?>