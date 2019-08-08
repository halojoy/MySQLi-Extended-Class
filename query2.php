<?php

$db = require('classMysqli.php');

$sql = "SELECT * FROM people ORDER BY fname";
foreach($db->getRows($sql) as $row)
    echo $row->fname.' '.$row->lname.' '.$row->age.'<br>';
echo $db->rowCount;

$db->close();    
