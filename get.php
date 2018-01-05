<?php
/*
 $_GET['filename'] : Ten file ( file.zip )
 $_GET['link'] : Link
 Only run on Linux Server

*/
 $file = $_GET['filename'];
 $link = $_GET['link'];
 if (isset($link) && isset($file)){
  $fileContent = file_get_contents($file);
  file_put_contents('/downloads/'.$file, $fileContent);
  $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
  echo 'Complete ! Download file :  <a href="/downloads/'.$file.'">'.$file.'</a>';
 } else{
  echo 'Empty link and file name';
 }
?>