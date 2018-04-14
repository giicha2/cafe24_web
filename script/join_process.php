<?php
include("../lib/dbdata.php");
$connect=dbconn();
$id=$_POST['user_join_id'];
$pws=$_POST['user_join_pw'];
$pw=md5($pws);
$age=$_POST['user_join_age'];
$regdate=date("YmdHis",time());
$sql="insert into test (name,pw,age,date)
    values('".$_POST['user_join_id']."','".$pw."','".$_POST['user_join_age']."','".$regdate."')";
$result=mysqli_query($connect,$sql);
mysqli_fetch_array($result);
//header("location:mainpage.php");
?>
<script>
window.alert('thanks for join');
location.href="mainpage.php";
</script>
