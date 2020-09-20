<?php
/*
=========================================
Autor:  Nekleenov M.Y
E-Mail: m.nekleenov@yandex.com
=========================================
*/

class Model_Add extends Model
{

    private function getValidationEmail($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public function getModel($username,$email,$task)
    {
        $username = $this->getInjection($username);
        $email = $this->getInjection($email);
        $task = $this->getInjection($task);

        if(empty($this->getValidationEmail($email)))
        {
            $return['status']['text'] = "E-Mail не валиден.";
        }
        elseif(empty($task))
        {
            $return['status']['text'] = "E-Mail не валиден.";
        }
        else
        {
            $this->db->query("INSERT INTO task (
                    username,
                    email,
                    message
                ) VALUES (
                    '{$username}',
                    '{$email}',
                    '{$task}')");
            $return['status']['code'] = "ok";
        }

        echo json_encode($return);
    }

}

?>