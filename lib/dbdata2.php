<?php
function dbconn(){
  $connect=mysqli_connect("localhost","root","coffee12#");
  //$connect=mysqli_connect("localhost","","coffee123qwe");
  if(!$connect){
    die("faill".mysqli_connect_error());
  }
    mysqli_query($connect,"set names UTF8");
    mysqli_select_db($connect,"giicha2");
  return $connect;
}

function Erorr($msg){
  echo "<script>
  alert('$msg');
  history.back(1);
  </script>";
  exit;
}
?>
