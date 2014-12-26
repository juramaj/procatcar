<?php
class Controller_Auch extends Controller
{
    function __construct()
    {
        $this->model = new Model_Auch();
        $this->view = new View();
    }
    function action_index()
    {
        if (!$_SESSION['login'])
        {
        $data = $this->model->get_data();
        $this->view->generate('auch_view.php', 'template_view.php', $data);
        }
        else
        {
        $this->view->generate('no_auch_view.php', 'template_view.php');
        }
    }
}