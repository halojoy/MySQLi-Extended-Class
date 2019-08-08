<?php

$db = require('classMysqli.php');

$sql = "SHOW TABLES LIKE 'people'";
if ($db->getCol($sql)) {
    $sql = "DROP TABLE people";
    $db->exec($sql);
    echo 'Dropped Table<br>';
}

$sql =
"CREATE TABLE people (
id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
fname VARCHAR(30),
lname VARCHAR(30),
age INTEGER );";
$db->exec($sql);
echo 'Created Table<br>';

$fname = 'Stefan'; $lname = 'Forslund'; $age = 68;
$sql = "INSERT INTO people (fname,lname,age)VALUES('$fname', '$lname', $age)";
$lastid = $db->insert($sql);
echo $lastid;
$fname = 'Henry'; $lname = 'Kristoffersson'; $age = 92;
$sql = "INSERT INTO people (fname,lname,age)VALUES('$fname', '$lname', $age)";
$lastid = $db->insert($sql);
echo $lastid;
$fname = 'Elias'; $lname = 'Hoff'; $age = 17;
$sql = "INSERT INTO people (fname,lname,age)VALUES('$fname', '$lname', $age)";
$lastid = $db->insert($sql);
echo $lastid;
$fname = 'Christer'; $lname = 'Uden'; $age = 50;
$sql = "INSERT INTO people (fname,lname,age)VALUES('$fname', '$lname', $age)";
$lastid = $db->insert($sql);
echo $lastid;
$fname = 'Saafi'; $lname = 'Khouna'; $age = 45;
$sql = "INSERT INTO people (fname,lname,age)VALUES('$fname', '$lname', $age)";
$lastid = $db->insert($sql);
echo $lastid;
$fname = 'Alexandra'; $lname = 'Bergholm'; $age = 34;
$sql = "INSERT INTO people (fname,lname,age)VALUES('$fname', '$lname', $age)";
$lastid = $db->insert($sql);
echo $lastid;
echo ' : Insert Done!';

$db->close();
