<?php
foreach(glob("../project/*.*") as $filename){
  $name = preg_split("/\//",$filename);
  if(strrchr($name[2],".js")==".js"){
  $name = preg_split("/\.js/", $name[2]);
  
  $name=$name[0];
  //echo $name[0]."<br>".$name[1]."<br>".$name[2]."<br>";
  echo "<h3 class='ui-widget-header ui-corner-all'><div class='realfile'>".  $name ."</div></h3>";
  }
}
?>