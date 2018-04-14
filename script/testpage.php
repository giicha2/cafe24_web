<!DOCTYPE html>
<html>
<head>

</head>
<body>
  ggggbbb
  <table style: border="1px" solid gray>
    <ul>
  <?php
  $conn=mysqli_connect("localhost","root","coffee12#");
  mysqli_select_db($conn,"test");
  $sql="select *from testdb";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0){

  while($row=mysqli_fetch_array($result)){
      echo "<tr><td><li>".$row['name']."</li></td><tr>";
    }

  }
  ?>
</ul>
</table>
</body>
</html>
