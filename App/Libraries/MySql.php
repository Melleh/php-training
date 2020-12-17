<?php
namespace App\Libraries;



class MySql

{
    public function index()
    {
        $dbHost = $_ENV['DB_HOST'];
    }
    public function query($query)
    {
        $sql = "select * from table_name";
    }
}
