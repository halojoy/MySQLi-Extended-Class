#### MySQLi-Extended-Class
Supports additional custom functions and native mysqli functions.

Following custom functions:
- getRow()
- getRows()
- getCol()
- getColValues()
- insert()
- exec()

##### Example
```php
$db = require ('classMysqli.php');
$sql = "SELECT * FROM people ORDER BY fname";
foreach($db->getRows($sql) as $row)
    echo $row->fname.' '.$row->lname.' '.$row->age.'<br>';
$db->close();
```
