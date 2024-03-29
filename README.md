#### MySQLi-Extended-Class
Supports additional custom functions and native mysqli functions.

Following custom functions:
- getRow()
- getRows()
- getCol()
- getColValues()
- insert()
- exec()
##### Example 1
```php
$db = require('classMysqli.php');

$id = 6;
$sql = "SELECT * FROM people WHERE id=$id";
$row = $db->getRow($sql);
echo $row->fname.' '.$row->lname.' '.$row->age;
$db->close();
```
##### Example 2
```php
$db = require('classMysqli.php');

$sql = "SELECT * FROM people ORDER BY fname";
foreach($db->getRows($sql) as $row)
    echo $row->fname.' '.$row->lname.' '.$row->age.'<br>';
echo $db->rowCount;
$db->close();
```
##### Example 3
```php
$db = require('classMysqli.php');

$id = 4;
$sql = "SELECT fname FROM people WHERE id=$id";
$col = $db->getCol($sql);
echo $col;
$db->close();
```
##### Example 4
```php
$db = require('classMysqli.php');

$sql = "SELECT age FROM people ORDER BY age";
foreach($db->getColValues($sql) as $col)
    echo $col.'<br>';
$db->close();
```
##### Example 5
```php
$db = require('classMysqli.php');

$fname = 'Christer'; $lname = 'Uden'; $age = 50;
$sql = "INSERT INTO people (fname,lname,age)VALUES('$fname', '$lname', $age)";
$lastid = $db->insert($sql);
echo $lastid;
$db->close();
```
