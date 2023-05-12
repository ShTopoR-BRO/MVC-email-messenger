<?php

class Controller_Avtoriz extends Controller
{
    function __construct()
    {
        $this->model = new Model_Avtoriz();
        $this->view = new View();
    }

    function action_index()
    {
        $this->view->generate('avtoriz_view.php', 'template_view.php');
    }

    function action_create()
    {
        $name=$_POST["name"];
        $pass=$_POST["pass"];
        $data=[$name,$pass];
        $this->model->avtoriz($name, $pass);
        $this->view->generate('res_view.php', 'template_view.php',$data);
    }
    
    function action_auth()
    {
        $name=$_POST["name"];
        $pass=$_POST["pass"];
        $res=$this->model->success($name, $pass);
        if ($res== true){
            setcookie("name", $name, time() + 3600);
            header("Location:http://mvc/avtoriz/area");
        }
        else{
            $this->view->generate('401_view.php', 'template_view.php');
        }     
    }
     
    function action_area()
    {
        if (isset($_COOKIE["name"]))
        {
            $data=$this->model->show_cases($_COOKIE["name"]);
            $this->view->generate('success_view.php', 'template_view.php', $data);
        }
        else
        {
            header("Location:http://mvc/avtoriz");   
        }
    }
    
    function action_createCases() // для добавления дел в ежедневник
    {
        $name=$_POST["name"];
        $date=$_POST["date"];
        $your_case=$_POST["your_case"];
        $res=$this->model->create_case($name, $date, $your_case);
        header("Location:http://mvc/avtoriz/area");
        
    }
}
?>