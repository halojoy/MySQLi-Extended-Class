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
$db = require ('classMysqli.php');
$sql = "SELECT * FROM people ORDER BY fname";
foreach($db->getRows($sql) as $row)
    echo $row->fname.' '.$row->lname.' '.$row->age.'<br>';
$db->close();
```
##### Example 2
```php
$fname = 'Christer'; $lname = 'Uden'; $age = 50;
$sql = "INSERT INTO people (fname,lname,age)VALUES('$fname', '$lname', $age)";
$lastid = $db->insert($sql);
echo $lastid;
```
