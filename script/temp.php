<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css" type="text/css">
  </head>
<body style="margin:0px;">
  <div align=center style="border-bottom:1px solid gray; padding-bottom:10px;padding-top:10px">
User infomation table!
  </div>
  <div align=center >
    <h3>User list</h3>
    <table   style=" width:50%;height:200px; border-collapse:collapse; border:2px solid silver;">
      <tr>
        <td style="border:1px solid blue;">no</td>
        <td style="border:1px solid blue;">name</td>
        <td style="border:1px solid blue;">age</td>
      </tr>
      <?php
        include("../dbdata.php");
        $connect=dbdata();
        $num=0;
        $sql="SELECT *FROM testdb";
        $result=mysqli_query($connect,$sql);
        while($row=mysqli_fetch_array($result)){
          $num++;
       ?>
       <tr>
         <td style="border:1px solid red;"><?=$num?></td>
         <td style="border:1px solid red;"><?=$row['name']?></td>
         <td style="border:1px solid red;"><?=$row['age']?></td>
       </tr>
     <?php } ?>
    </table>
  </div>


  <div id="bottom">
    <div align="center" >
      <form action="result.php" method="post">
        <p>-Input your infomation-</p>
        <p><input type="text" name="name_input" placeholder="name"></p>
        <p><input type="text" name="score_input" placeholder="score"></p>
        <p><input type="submit" value="submit"></p>
      </form>
     </div>
      <div id="deleteForm">
        <form action="delete.php" method="post">
          <p> delete id</p>
          <p><input type="text" name="id_input" placeholder="id"></p>
          <p><input type="submit" value="delete id"></p>
        </form>
      </div>
    </div>

 </body>
 </html>
