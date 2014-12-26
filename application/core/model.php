<?php
class Model
{
    public $db;
    function connect()
    {
        $this->db = @new mysqli('localhost', 'root', '', 'prosto_blog');
        if (mysqli_connect_errno())
        {
            echo "Подключение невозможно: ".mysqli_connect_error();
        }
        return $this->db;
        $this->db->close();
    }
    public function get_data()
    {
    }
}