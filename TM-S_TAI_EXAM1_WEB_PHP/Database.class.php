<?php

class Database
{
    protected $connection;
    protected $host;
    protected $user;
    protected $pass;
    protected $database;

    function __construct($host, $user, $pass, $database)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->database = $database;

        $this->connection = new mysqli(
            $this->host,
            $this->user,
            $this->pass,
            $this->database);

        if ($this->connection->connect_error)
            exit("Connection failed: ".$this->connection->connect_error);
    }

    public function GetAll()
    {
        $sql = "SELECT * FROM `faktury`";
        $result = $this->connection->query($sql);
        return $result;
    }

    public function GetOwner($owner)
    {
        $sql = "SELECT * FROM `faktury` WHERE owner='$owner'";
        $result = $this->connection->query($sql);
        return $result;
    }

    public function Insert($no, $owner, $cost, $vat)
    {
        $sql = "INSERT INTO `faktury` (`number`, `owner`, `cost`, `vat`) VALUES ('$no', '$owner', '$cost', '$vat')";
        $result = $this->connection->query($sql);
        if ($result === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>";
        }
        return $result;
    }
}