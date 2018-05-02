<?php
echo $rr=ceil($totals/$view_total);
$before=$_page-1;

//before page
if($before<1)($before=1);

//next page;
$next=$_page+1;
if($next>$rr)($next=$rr);

//group page
if($_page%10){$goto=$_page%10+1;
}elseif($goto=$_page-9);

$last=$goto+10;

//before page
$before_group=$goto-1;
if($before_group<1)($before_group=1);
if($_page !=1){
  echo"<a href=".$_SERVER['PHP_SELF']."?_page=$before_group$href>&lArr;</a>&nbsp;";
  //echo "<a href=".$_SERVER['PHP_SELF']."?no=".$_GET['page'].">"
}
//if($_page !=1)echo("<a href=$_SERVER[PHP_SELF]?_page=$before_group$href>&lArr;</a>&nbsp;");
//show page nums
for($e=$goto; $e<$last; $e++){
  if($e>$rr)break;
  if($e==$_page)echo("<strong>$e</strong>");
          else{
            echo "&nbsp; <a href=".$_SERVER['PHP_SELF']."?_page=$e$href>[$e]</a>&nbsp;";
          }
}


//next page
$next_group=$last;
if($next_group>$rr)($next_group=$rr);
if($_page !=$rr){
  echo"&nbsp; <a href=".$_SERVER['PHP_SELF']."?_page=$next_group$href>&rArr;</a>";
}
 ?>
