<?php
session_start();
include("../lib/dbdata.php");
$connect=dbconn();
$id=$_POST['user_input_id'];
$pws=$_POST['user_input_pw'];
$pw=md5($pws);
$sql="select *from test where name='$id'";
$result=mysqli_query($connect,$sql);
$member=mysqli_fetch_array($result);


if(isset($id) && isset($pw)){
  if($id==$member['name'] && $pw==$member['pw']){
    $_SESSION['loggedin']=true;
    header("Location:listpage.php");
  }
}

function Msg($msg){
  echo "<script>
    alert('$msg');
    history.back(1);
    </script>";
    exit;
}
if(!$id){
  Erorr("Input ID");
}elseif(!$member['name']){
  Msg("Your not member");
}
if(!$pws){
  Msg("Input pw");
}elseif(!$member['pw']){
  Msg("Not collect pw");
}/*else{
  echo "<script>
    alert('Welcome ');
    location.href='listpage.php';
    </script>";
}*/



?>
