<?php

$db = require('classMysqli.php');

$id = 4;
$sql = "SELECT fname FROM people WHERE id=$id";
$col = $db->getCol($sql);
echo $col;

$db->close();    
