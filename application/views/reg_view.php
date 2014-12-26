<div class="message">
    <?php echo $data ?>
</div>
<h1 class="reg_auch">Регистрация!</h1>
<p>
    <form name="form_reg" action="" method="POST" id="reg_form">
        <table class="registr_tb">
            <tr>
                <td colspan="2"><input type="text" size="30" name="login" id="login" placeholder="Логин" /><span id="valid_login"></span><td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" size="30" name="email" id="email" placeholder="E-mail" /><span id="valid_email"></span><td>
            </tr>
            <tr>
                <td colspan="2"><input type="password" size="30" name="password" id="password" placeholder="Введите пароль" /><span id="valid_password"></span><td>
            </tr>
            <tr>
                <td colspan="2"><input type="password" size="30" name="password_2" placeholder="Повторите пароль" /><td>
            </tr>
            <tr>
                <td><input type="reset" name="reset" value="Очистить"/></td>
                <td><input type="submit" name="registr" value="Зарегистрироватся" class="reg_button"/></td>
            </tr>
        </table>
    </form>
</p>