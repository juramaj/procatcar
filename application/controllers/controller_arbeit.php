<?php
class Controller_Arbeit extends Controller
{
    function action_index()
    {
        $this->view->generate('arbeit_view.php', 'template_view.php');
    }
}