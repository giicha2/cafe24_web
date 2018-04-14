<?php
function dbconn(){
$host_name="localhost";
$db_user_id="root";
$db_name="bbb";
$db_pw="coffee12#";
$connect=mysqli_connect($host_name,$db_user_id,$db_pw,$db_name);
mysqli_select_db($connect,$db_name);
  if(!$connect){
    die("connect fail!!!!".mysqli_error());
  }
  return $connect;
}
?>
