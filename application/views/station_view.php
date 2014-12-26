<h1><center>Все статьи</center></h1>
<?php
    while ($row = $data->fetch_assoc())
    {
        echo "<span class='title'><h2>".$row['title']."</h2></br>
        <u>Дата публикации:</u><i>".$row['date']."</i></br>
        <span>".$row['intro_text']."</span></br>
        <p><a href='/station/view/?id=".$row['id']."'>Подробнее ...</a></p></span><hr class='hr_st'/>";
    }
?>