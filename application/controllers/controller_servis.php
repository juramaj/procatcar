<?php
class Controller_Servis extends Controller
{
    function action_index()
    {
        $this->view->generate('servis_view.php', 'template_view.php');
    }
}