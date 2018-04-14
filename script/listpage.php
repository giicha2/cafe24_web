<?php
include("../lib/dbdata2.php");
$connect=dbconn();
?>
<html>
<head>
  <link rel="stylesheet" href="../style.css" type="text/css">
</head>
<body>
  <div align=center>
    <h1>User infomation</h1>
  </div>
  <?php
  $_page=$_GET[_page];
  $view_total=3;
  if(!$_page){$_page=1;}
  $page=($_page-1)*$view_total;
  $sql="select count(*) from test";
  $result=mysqli_query($connect,$sql);
  $temp=mysqli_fetch_array($result);
  echo $totals=$temp[0];
   ?>
<table width='800' height='100%' style="border:2px gray solid; padding:10px; border-collapse:collapse;">
<?php


$sql="select *from test  order by id desc limit $page, $view_total";
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
<div align=center><?php include("./paging.php");?></div>
