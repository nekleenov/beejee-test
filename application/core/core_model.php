<?php
/*
=========================================
Autor:  Nekleenov M.Y
E-Mail: m.nekleenov@yandex.com
=========================================
*/

class Model
{
    protected $db;

    function __construct()
    {
        $this->db = db::getDB();
    }

    public function getInjection($injection)
    {
        return htmlspecialchars($injection, ENT_QUOTES, 'UTF-8');
    }

    public function get_data()
    {

    }

}

?>