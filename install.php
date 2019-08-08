<?php

if (isset($_POST['dbhost'])) {
    extract($_POST);
    $write = <<<VAL
<?php

\$dbhost = '$dbhost';
\$dbuser = '$dbuser';
\$dbpass = '$dbpass';
\$dbname = '$dbname';
\$dbport =  $dbport;

?>
VAL;
    file_put_contents('config.php', $write);
    exit ('File \'config.php\' was written.<br>
        You can now use your MySQLi scripts.');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Install MySQLi</title>
    <style>
        h2 {text-align: center}
        fieldset {width: 450px; margin: 0px auto;}
    </style>
</head>
<body>

    <h2>MySQLi Installation<br>
    Will create 'config.php'</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
        <legend>Configure Your MySQLi</legend>
        <br>
        <input type="text" name="dbhost" value="localhost" required> Database host, often 'localhost'<br/>
        <input type="text" name="dbuser" required> Database username<br/>
        <input type="text" name="dbpass" required> Database password
        <input type="text" name="dbname" required> Database name, must have been created<br/>
        <input type="text" name="dbport" value="3306" required> Database port<br/>

        <br><br>
        <input type="submit" value="SUBMIT">
        </fieldset>
    </form>

</body>
</html>
