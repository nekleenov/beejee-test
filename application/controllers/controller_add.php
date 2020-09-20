<?php
/*
=========================================
Autor:  Nekleenov M.Y
E-Mail: m.nekleenov@yandex.com
=========================================
*/

class Controller_Add extends Controller
{

    function __construct()
    {
        $this->model = new Model_Add();
        $this->view = new View();
    }

    function action_index()
    {
        $arrTheme = array(
            'title' => "Добавить задачу"
        );
        $this->view->html('add_views.php', 'template/template_main.php', $arrTheme);
    }

    function action_get()
    {
        $this->model->getModel($_POST['get_name'],$_POST['get_email'],$_POST['get_task']);
    }

}

?>