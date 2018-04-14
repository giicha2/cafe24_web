<?php
include("../lib/dbdata2.php");
$connect=dbconn();
echo "testpage2!!";
//$connect=mysqli_connect("localhost","","coffee123qwe");
//mysqli_select_db($connect,"giicha2");
$sql='select *from test';
$result=mysqli_query($connect,$sql);
while($row=mysqli_fetch_array($result)){
  echo $row['name'];
}
 ?>
