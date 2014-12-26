<?php
class Model_Station extends Model
{
    function __construct()
    {
        $db = Model::connect();
    } 
    public function get_data()
    {
        $result = $this->db->query("SELECT * FROM `station` ORDER BY id DESC");
        return $result;
        $result->close();
        $this->db->close();
    }
    public function get_station()
    {
        $get_id = trim(strip_tags($_GET['id']));
        $result_st = $this->db->query("SELECT * FROM `station` WHERE `id` = '$get_id'");
        if ($result_st)
        {
            return $result_st;
        }
        else
        {
            return false;
        }
        $result_st->close();
        $this->db->close();   
    }
    public function get_comment()
    {
        $get_id = trim(strip_tags($_GET['id']));
        $result_com = $this->db->query("SELECT * FROM `comment_station` WHERE `id_station_comment` = '$get_id'");
        if ($result_com)
        {
            return $result_com;
        }
        else
        {
            return false;
        }
        $result_com->close();
        $this->db->close();
    }	
    public function add_comment()
    {
        if(!empty($_POST['int_comment']))
        {
            $login = ($_SESSION['login']);
            $station = trim(strip_tags($_GET['id']));
            $date = date("d.m.Y G:i");
            $text_comment = htmlspecialchars($_POST['text_comment_ins']);
            $result_comment_ins = $this->db->query("INSERT INTO comment_station (text_comment, login_comment, id_station_comment, date_comment) VALUES ('$text_comment', '$login', '$station', '$date')");
        }
        $this->db->close();	
    }
}