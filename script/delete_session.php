<?php
session_start();
print_r($_SESSION);
//$_SESSION["loggedin"]="aaa";

unset($_SESSION['loggedin']);
//session_destory();
 ?>
