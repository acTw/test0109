<?php
  $json_str = file_get_contents('php://input');  //接收request的body
  $json_obj = json_decode($json_str);  //轉json格式
  
  $myfile = fopen("log.txt", "w+") or die("Unable to open file!");
  fwrite($myfile, "\xEF\xBB\xBf".$json_str);  //在字串加入\xEF\xBB\xBf轉成utf8格式
  fclose($myfile);
?>
