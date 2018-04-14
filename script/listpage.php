<html>
<head>
  <link rel="stylesheet" href="../style.css" type="text/css">
</head>
<body>
  <div align=center>
    <h1>User infomation</h1>
  </div>
<table width='800' height='100%' style="border:2px gray solid; padding:10px; border-collapse:collapse;">
<?php
include("../dbdata.php");
$connect=dbconn();
$sql="select *from testdb";
$result=mysqli_query($connect,$sql);
$num=0;
?>
<tr>
  <td>no</td>
  <td>name</td>
  <td>age</td>
  <td>create date</td>
  <td>delete</td>
</tr>
<?php
if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_array($result)){
    $num++;
?>
<tr>
  <td><?=$num?></td>
  <td><?=$row['name']?></td>
  <td><?=$row['age']?></td>
  <td><?=$row['date']?></td>
  <td><a href="delete.php">delete</a></td>
</tr>
<?php
  }
}
?>
</table>
