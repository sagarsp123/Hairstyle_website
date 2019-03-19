<?php

mysql_connect ("","","") or die(mysql_error());
mysql_select_db ("") or die(mysql_error());


$query = mysql_query("SELECT * FROM dbp WHERE id = ".mysql_real_escape_string($_GET['id']));
$row = mysql_fetch_array($query);

$col = intval($_GET['col']);

if(isset($row['image'.$col]) && $row['iamge'.$col] != NULL){
    $content = $row['image'.$col];
}else{
    exit; // col is not existent, or image is empty
}

header('Content-type: image/jpg');
echo $content;
exit;




?