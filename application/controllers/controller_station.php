<?php
class Controller_Station extends Controller
{
    function __construct()
    {
        $this->model = new Model_Station();
        $this->view = new View();
    }
    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('station_view.php', 'template_view.php', $data);
    }
    function action_view()
    {
        $data_com = $this->model->get_comment();
        $data = $this->model->get_station();
        $data_err = $this->model->add_comment();
        $this->view->generate('post_view.php', 'template_view.php', $data, $data_com, $data_err);
    }
}