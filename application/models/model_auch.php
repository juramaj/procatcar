<?php
class Model_Auch extends Model
{
    function __construct()
    {
        $db = Model::connect();
    }
    function get_data()
    {
        if (!$_SESSION['login'])
        {
            if (!empty($_POST['enter']))
            {
                $login = htmlspecialchars(strip_tags($_POST['login']));
                $password = htmlspecialchars(strip_tags($_POST['password']));
                $password = md5($_POST['password']);
                $user = $this->db->query("SELECT id FROM `user` WHERE login='$login' AND password='$password'");
                $id_user = $user->fetch_assoc();
                if (empty($id_user['id']))
                {
                    $q = 'Ошибка при вводе логина и/или пароля!';
                }
                else
                {
                    $_SESSION['login'] = $login;
                    $_SESSION['password'] = $password;
                    $_SESSION['id'] = $id;
                    header('Location: /main');
                }
            }
        }
        else
        {
            $q = 'Вы уже авторизированы!';
        }
        return $q;	
    }
}