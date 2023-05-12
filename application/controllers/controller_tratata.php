<?php

class Controller_Tratata extends Controller
{
    function __construct()
    {
        $this->model = new Model_Tratata();
		$this->view = new View();
    }
    function action_index()
    {
        $data = $this->model->get_all_users();
        $this->view->generate('tratata_view.php', 'template_view.php', $data);

    }

    function action_avtoriz()
    {
        
        $this->view->generate('tratata_view.php', 'template_view.php');

    }
    function action_create()
    {
        $name=$_POST["name"];
        $this->model->create_useres($name);
    }
    function action_test()
    {
        $data="ivan";
        $this->view->generate('test_view.php', 'template_view.php', $data);
    }
}