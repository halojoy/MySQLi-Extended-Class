<?php

class Database extends MySQLi
{
    public $rowCount;
    public $insertId;
    public $affected;

    // Connect to MySQLi
    public function __construct()
    {
        require ('config.php');
        parent::__construct($dbhost, $dbuser, $dbpass, $dbname, $dbport);
        if ($this->connect_error)
            exit($this->connect_error);
    }

    // SELECT. Get one row
    public function getRow($sql)
    {
        $res = $this->query($sql);
        if ($this->error) exit($this->error);
        return $res->fetch_object();
    }

    // SELECT. Get several rows
    public function getRows($sql)
    {
        $res = $this->query($sql);
        if ($this->error) exit($this->error);
        $this->rowCount = $res->num_rows;
        $arr = array();
        while($row = $res->fetch_object())
            $arr[] = $row;
        return $arr;
    }

    // SELECT. Get one single value
    public function getCol($sql)
    {
        $res = $this->query($sql);
        if ($this->error) exit($this->error);
        $row = $res->fetch_row();
        return $row[0];
    }

    // SELECT. Get all values in one column
    public function getColValues($sql)
    {
        $res = $this->query($sql);
        if ($this->error) exit($this->error);
        $this->rowCount = $res->num_rows;
        $arr = array();
        while($row = $res->fetch_row())
            $arr[] = $row[0];  
        return $arr;
    }

    // Do one INSERT row. Returns last insertId
    public function insert($sql)
    {
        $this->query($sql);
        if ($this->error) exit($this->error);
        $this->insertId = $this->insert_id;
        return $this->insertId;
    }

    // DELETE, UPDATE or CREATE TABLE. Returns affected
    public function exec($sql)
    {
        $this->query($sql);
        if ($this->error) exit($this->error);
        $this->affected = $this->affected_rows;
        return $this->affected;
    }
    
    // Escape string before INSERT
    public function escape($string)
    {
        return $this->escape_string($string)
    }

}

return new Database;

?>
