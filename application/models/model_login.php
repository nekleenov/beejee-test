<?php
/*
=========================================
Autor:  Nekleenov M.Y
E-Mail: m.nekleenov@yandex.com
=========================================
*/

class Model_Login extends Model
{

    private function getLogin($login)
    {

        $login = $this->getInjection($login);
        $sql = $this->db->selectRow("SELECT * FROM admin WHERE login = '{$login}'");
        return ($sql) ? $sql : false;

    }

    private function useSession($login)
    {

        $_SESSION["login"] = $login;
        $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];

    }

    public function getAuth($login, $password)
    {

        $getLogin = $this->getLogin($login);

        if($getLogin != false)
        {

            $password = md5($password);
            if($password != $getLogin['password'])
            {
                $return['status']['text'] = "Вы ввели неверный пароль.";
            }
            else
            {
                $return['status']['code'] = "ok";
                $this->useSession($getLogin['login']);
            }

        }
        else
        {
            $return['status']['text'] = "Логин не обнаружен в базе данных.";
        }

        echo json_encode($return);

    }

    public function logout()
    {

        unset($_SESSION["login"]);
        unset($_SESSION["ip"]);

    }

}

?>