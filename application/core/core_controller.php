<?php
/*
=========================================
Autor:  Nekleenov M.Y
E-Mail: m.nekleenov@yandex.com
=========================================
*/

class Controller
{

    public $model;
    public $view;

    function __construct()
    {
        $this->view = new View();
    }

    function action_index()
    {

    }

    function xss_get($get)
    {
        $filter = array('<','>');
        return str_replace($filter,'|',$get);
    }

    function getSession()
    {
        $url = $_SERVER['REQUEST_URI'];
        $url = explode('?', $url);

        if((isset($_SESSION['login']) AND $_SESSION['ip'] == $_SERVER['REMOTE_ADDR']))
        {
            if(strpos($url[0], 'login'))
            {
                header('Location: /admin');
                exit();
            }
        } else {
            if(strpos($url[0], 'admin'))
            {
                header('Location: /login');
                exit();
            }
        }
    }

}

?>