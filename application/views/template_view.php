<?php
if(isset($_POST['logoff']))
{
    unset($_SESSION['login']);
    unset($_SESSION['password']);
    unset($_SESSION['id']);
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>
        <script type="text/javascript" src="js/validate.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
        <title>Простой блог</title>
    </head>
    <body>
        <div class="hoh">
            <div class="header">
                <div class="logo">
                    <img src="/images/header.png" alt="логотип" width="250px;" height="82px;">
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="/">Главная</a></li>
                        <li><a href="/servis">Услуги</a></li>
                        <li><a href="/station">Статьи</a></li>
                        <li><a href="/arbeit">Как мы работаем</a></li>
                        <li><a href="/contacts">Контакты</a></li>
                    </ul>
                </div>
            </div>
            <div class="content">
                <div class="left_sidebar">
                    <?php
                        include 'application/views/block_reg_view.php';
                    ?>
                </div>
                <div class="content_content">
                    <?php
                        include 'application/views/'.$content_view;
                    ?>
                </div>
            </div>
        </div>
        <div class="footer">Copyright 2014</div>
    </body>
</html>