<?php
$host_name="localhost";
$db_user_id="root";
$db_name="bbb";
$db_pw="coffee12#";

function dbconn(){
  $connect=mysqli_connect("localhost","root","coffee12#");
  if(!$connect){
    die("fail".mysqli_connect_error());
  }
  mysqli_query($connect,"set names UTF8");
  mysqli_select_db($connect,"test");
  return $connect;
}

function Erorr($msg){
  echo "<script>
  alert('$msg');
  history.back(1);
  </script>";

  exit;
}

function member(){
  global $connect;
  $temps=$_COOKIE['coo'];
  $cookies=explode("//","$temps");

  $sql="select *from member where name='$cookies[0]'";
  $result=mysqli_query($connect,$sql);
  $member=mysqli_fetch_array($result);
  return $member;
}
/*function member(){
$myID="aaa";

$cookie=$_COOKIE['myID'];
return $cookie;*/
/*global $connect;
  $temps=$_COOKIE["COOKIES"];
  explode();

  $sql="select *from member where name='$temps[0]'";
  $result=mysqli_query($connect,$sql);
  $member=mysqli_fetch_array($result);
  return $member;
}*/
 ?>
