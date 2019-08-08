<?php

$db = require('classMysqli.php');

$sql = "SELECT age FROM people ORDER BY age";
foreach($db->getColValues($sql) as $col)
    echo $col.'<br>';

$db->close();    
