<?php

class Database
{
    private function connect()
    {
        $string = "mysql:hostname=" . DBHOST . ";dbname=" . DBNAME;
        $con = new PDO($string, DBUSER, DBPASS);
        return $con;
    }

    public function query($query, $data = [])
    {
        $con = $this->connect();
        $stm = $con->prepare($query);
        $check = $stm->execute($data);
    }
}
