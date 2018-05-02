<html>
<head>
  <title>main</title>
</head>
<body>
<h2 align=center> gichan hompage</h2>
<div align="center" style="padding:10px;">
  <?php
  session_start();
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
      echo "welcome";
echo "<td><a href='logoutpage.php'>logout</a></td>";
      //header("Location:success.php");
    }else{
?>
    <table>
      <tr>
        <td><a href='joinpage.php'>join</a></td>
        <td width=20px></td>
        <td><a href='loginpage.php'>login</a></td>
        <td width=20px></td>
        <td><a href='uploadpage.php'>upload</a></td>
      </tr>
    </table>
  <?php
    }
   ?>


</div>
<div align="center" style="padding:30px;">
<img src="../img/img01.jpg" width="300px" alt="myimg">
</div>
</body>
</html>
