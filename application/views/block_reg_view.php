<?php
	if ($_SESSION['login'] == true)
	{
		echo '<center><b>Личный кабинет</b></center>';
		echo 'Приветствуем Вас&nbsp;<b>'.$_SESSION['login'].'</b>';
		echo '<form action="" method="POST">
				<input type="submit" name="logoff" value="Выйти" class="button_logoff"/>
			  </form>';
	}
	else
	{
		echo "<a href='/reg'>Регистрация</a><a href='/auch'>Вход</a>";
	}