<?php

$db = require('classMysqli.php');

$id = 6;
$sql = "SELECT * FROM people WHERE id=$id";
$row = $db->getRow($sql);
echo $row->fname.' '.$row->lname.' '.$row->age;

$db->close();    
