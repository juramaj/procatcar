<?php
class Controller_Reg extends Controller
{
    function __construct()
    {
        $this->model = new Model_Reg();
        $this->view = new View();
    }
    function action_index()
    {
        if (!$_SESSION['login'])
        {
            $data = $this->model->get_data();
            $this->view->generate('reg_view.php', 'template_view.php', $data);
        }
        else
        {
        $this->view->generate('no_reg_view.php', 'template_view.php');
        }
    }
}