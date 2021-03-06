<?php
/**
 * Created by PhpStorm.
 * User: Gytis
 * Date: 2017-12-06
 * Time: 20:53
 */

namespace app\model;


class CoreModel
{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'gp_bakery';

    private $conn;

    protected $table;

    public function __construct()
    {
        if (!$this->table)
            die('No table name provided');
    }

    private function connect()
    {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname, 3307);

        if (!$this->conn) {
            die("Could not connect");
        }

        $this->conn->set_charset(`utf8mb4`);
    }

    protected function db_query(string $query)
    {
        $this->connect();
        $result = $this->conn->query($query);

        if ($result) {
            $this->conn->close();
            return $result;
        }

        print_r($this->conn);
        $this->conn->close();
        die();
    }

    protected function generateInsertQuery(array $data, bool $uuid = false): string
    {
        if ($uuid)
            $data['id'] = uniqid();

        $keys = $values = '';

        foreach ($data as $key => $value) {

            $keys .= "`$key` , ";

            $values .= "'$value' , ";
        }

        $keys = rtrim($keys, ", ");

        $values = rtrim($values, ", ");

        $query = "INSERT INTO `" . $this->table . "`($keys) VALUES ($values)";

        return ($query);
}

    public function list()
    {
        $query = "SELECT * FROM `" . $this->table . "` WHERE `deleted_at` IS NULL";
        return $this->db_query($query);
    }

    public function find (string $id)
    {
        $query = "SELECT * FROM `" . $this->table . "` WHERE `deleted_at` IS NULL AND `id` = '$id'";
        return $this->db_query($query);
    }

    public function update($id)
    {
        $data = $_POST;
        $options = '';

        foreach ($data as $key => $value)
        {
            $options .= " `$key` = '$value',";
        }

        $options = rtrim($options, ", ");

        $query = "UPDATE `" . $this->table . "` SET" . $options . "WHERE `id`='$id'";

        $query = "SELECT * FROM `" . $this->table . "` WHERE `deleted_at` IS NULL AND `id` = '$id'";
        return $this->db_query($query);


    }


}