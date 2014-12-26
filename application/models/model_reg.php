<?php
class Model_Reg extends Model
{
    function __construct()
    {
        $db = Model::connect();
    }
    public function get_data()
    {
        if ($_SESSION['login'] == true)
        {
            $q = 'Вы уже зарегистрированы!';
        }
        else
        {
            if (!empty($_POST['registr']))
            {
                $login = htmlspecialchars(strip_tags($_POST['login']));
                $email = htmlspecialchars($_POST['email']);
                $password_1 = htmlspecialchars(strip_tags($_POST['password']));
                $password_2 = htmlspecialchars(strip_tags($_POST['password_2']));
                if (strlen($login) < 2)
                {
                    $q = 'Логин должен быть более 2 символов!';
                }
                elseif (!preg_match("/^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i",trim($email)))
                {
                    $q ='Не верный формат E-mail';
                }
                elseif (strlen($login) > 15)
                {
                    $q = 'Логин должен быть менее 15 символов!';
                }
                elseif (strlen($password_1) < 5)
                {
                    $q = 'Пароль должен быть более 5 символов!';
                }
                elseif (strlen($password_1) > 20)
                {
                    $q = 'Пароль должен быть менее 20 символов!';
                }
                elseif ($password_1 != $password_2)
                {
                    $q = 'Пароли не совпадают!';
                }
                else
                {
                    $pro = $this->db->query("SELECT id FROM `user` WHERE login='$login' AND email='$email'");
                    $prolog = $pro->fetch_assoc();
                    if (!empty($prolog['id']))
                    {
                        $q = 'Пользователь с таким логином или email уже зарегистрирован. Придумайте другой логин!';
                    }
                    else
                    {
                        $password_1 = md5($_POST['password']);
                        $res = $this->db->query("INSERT INTO `user` (login, password, email) VALUES ('$login', '$password_1', '$email')");
                        if ($res == true)
                        {
                            $q = "<div style='color:green;'>Вы успешно зарегистрировались!<br/>Нажмите <a href='/auch/'>здесь</a> и авторизируйтесь.</div>";
                        }
                    }
                }
            }
        return $q;
        }
    }
}