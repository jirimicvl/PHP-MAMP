<?php

class DBConnect {
    private $server = 'db';
    private $dbname = 'fullstackapp';
    private $user = 'root';
    private $pass ='lionPass';

    public function connect () {
        try {
            $conn = new PDO('mysql:host=' .$this->server .';dbname='. $this->dbname, $this->user, $this->pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (\Exception $e) {
            echo "Database Error: ". $e->getMessage();
        };
    }
}


?>