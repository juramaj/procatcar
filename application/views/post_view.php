<?php
    if ($data->num_rows >= 1)
    {
        while ($row = $data->fetch_assoc())
        {
            echo "<span class='title'><h2><center>".$row['title']."</center></h2></span></br>
            <u>Дата публикации:</u><i>".$row['date']."</i></br>
            <span>".$row['full_text']."</span></br>";
        }
    }
    else
    {
        echo "<center class='error'>НЕТ ТАКОЙ СТРАНИЦЫ!</center>";
    }
    if ($data_com->num_rows >= 1)
    {
        echo "<h3 class='com'>Комментарии</h3>";
        while ($row_com = $data_com->fetch_assoc())
        {
            printf ("<div class='comment'>
            <table>
                <tr>
                    <td class='com_log'><b>".$row_com['login_comment']."</b></td>
                    <td class='com_date'><u>".$row_com['date_comment']."</u></td>
                </tr>
            </table>
            </hr>
            <p><i>".$row_com['text_comment']."</i></p>
            </div>");
        }
    }
    elseif ($data->num_rows >= 1)
    {
        echo "<h3 class='com'>Комментариев нет!</h3>";
    }
    if ($data->num_rows < 1)
    {
    }
    else
    {
        if ($_SESSION['login'] == true)
        {   
            echo "<div class='add_com'>
            <form action='' method='POST'>
                <textarea name='text_comment_ins' placeholder='Ваш комментарий' cols='78' rows='5'></textarea></br>
                <input type='submit' name='int_comment' value='Добавить комментарий'/>
            </form>
            </div>";
        }
        else
        {
            echo "Чтобы оставить комментарий Вам нужно <a href='/reg'>зарегистрироватся</a> или <a href='/auch'>авторизироватся</a>.";
        }
    }