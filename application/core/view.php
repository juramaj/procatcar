<?php
class View
{
    function generate($content_view, $template_view, $data = null, $data_com = null, $data_err = null)
    {
        include 'application/views/'.$template_view;
    }
}