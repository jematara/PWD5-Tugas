<?php
require_once "data.php";

class Pembeli
{
    public $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function tampilData($table, $where = null)
    {
        return $this->db->select($table, $where);
    }
}
?>