<?php
/*
=========================================
Autor:  Nekleenov M.Y
E-Mail: m.nekleenov@yandex.com
=========================================
*/

class Controller_Login extends Controller
{
    function __construct()
    {
        $this->model = new Model_Login();
        $this->view = new View();
    }

    function action_index()
    {
        $this->getSession();
        $this->view->html('login_views.php', 'template/template_login.php');
    }

    function action_get()
    {
        $this->getSession();
        $this->model->getAuth($_POST['login'],$_POST['password']);
    }

    function action_logout()
    {
        $this->model->logout();
        header('Location: /login');
    }
}

?>