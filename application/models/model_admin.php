<?php
/*
=========================================
Autor:  Nekleenov M.Y
E-Mail: m.nekleenov@yandex.com
=========================================
*/

class Model_Admin extends Model
{

    public function getCount()
    {
        $sql = $this->db->selectRow("SELECT COUNT(*) AS cc FROM task");
        return ($sql) ? $sql['cc'] : false;
    }

    public function getListTask($skip,$take)
    {
        $orderBy = "";

        if(isset($_SESSION['get_name']) || isset($_SESSION['get_email']) || isset($_SESSION['get_status']))
        {
            if(isset($_SESSION['get_sort']))
            {
                $userName = ($_SESSION['get_name']) ? "username" : null;
                $orderBy = "ORDER BY ".$userName.$_SESSION['get_email'].$_SESSION['get_status']." ".$_SESSION['get_sort']." ";
            }
        }

        $sql = $this->db->select("SELECT * FROM task {$orderBy}LIMIT {$skip}, {$take}");
        return ($sql) ? $sql : false;
    }

    public function getTaskId($get)
    {
        $sql = $this->db->selectRow("SELECT * FROM task WHERE id = {$get}");
        return $sql;
    }

    function getSort($get)
    {
        $url = $_SERVER['REQUEST_URI'];
        $url = explode('?', $url);

        $get_sort = $_SESSION['get_sort'];

        if(isset($get)) {
            $sessionName = array('get_name' => 'get_name','get_email' => 'get_email','get_status' => 'get_status');

            foreach($sessionName AS $nameRow)
            {
                if($_SESSION[$nameRow] != $get)
                {
                    unset($_SESSION[$nameRow]);
                }
            }

            unset($_SESSION['get_sort']);

            $_SESSION['get_sort'] = ($get_sort == "DESC") ? "ASC" : "DESC";
            $_SESSION['get_'.$get] = $get;
        }

        if($get)
        {
            header('Location: '.$url[0]);
        }
    }

    function getSortClass()
    {
        return ($_SESSION['get_sort'] == "DESC") ? "fa-sort-desc" : "fa-sort-asc";
    }

    function getDelete($get)
    {
        $this->db->query("DELETE FROM task WHERE id = '{$get}'");
        header('Location: /admin');
    }

    function getSave($id,$task,$checked)
    {
        $sql = $this->getTaskId($id);
        $checked = ($checked) ? "1" : "0";
        $message = ($sql['message'] != $task) ? $task : $sql['message'];
        if(($sql['message_editing'] != 1))
        {
            $message_editing = ($sql['message'] != $task) ? "1" : "0";
        } else {
            $message_editing = "1";
        }
        $this->db->query("UPDATE task SET message = '{$message}', message_editing = '{$message_editing}', status = '{$checked}' WHERE id = '{$id}'");
        $return['status']['code'] = "ok";
        echo json_encode($return);
    }

}

?>