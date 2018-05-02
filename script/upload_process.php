<?php
$name=$_FILES['myFile']['name'];
$tmp_name=$_FILES['myFile']['tmp_name'];
if(isset($name)){
  if(!empty($name)){
    $location='uploads/';
    if(move_uploaded_file($tmp_name, $location.$name)){
      echo
      '<script>
      alert("sucess upload file!");
      location.href="uploadpage.php";
      </script>';
    }
  }
}else{
  echo "Please choose a file";
}
?>
