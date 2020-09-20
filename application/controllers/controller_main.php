<?php
/*
=========================================
Autor:  Nekleenov M.Y
E-Mail: m.nekleenov@yandex.com
=========================================
*/

class Controller_Main extends Controller
{

    function __construct()
    {
        $this->model = new Model_Main();
        $this->view = new View();
    }

    function action_index()
    {

        $this->model->getSort($_GET['sort']);

        $pagination = new Pagination($this->model->getCount(), 3);
        $listTake = $this->model->getListTask($pagination->skip(),$pagination->take());

        if($listTake)
        {
            foreach($listTake AS $row)
            {
                $status = ($row['status'] == 0) ? "Не выполнено" : "Выполнено";
                $status_class = ($row['status'] == 0) ? "outline-badge-danger" : "outline-badge-success";
                $message_editing = ($row['message_editing'] != 0) ? "<br>---<br>отредактировано администратором" : null;
                $htmlListTake[] = '<tr>
                    <td>'.$row['username'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['message'].$message_editing.'</td>
                    <td class="text-center"><span class="badge '.$status_class.'">'.$status.'</span></td>
                </tr>';
            }
        }
        else
        {
            $htmlListTake[] = '<tr>
                    <td colspan="4">Нет записей</td>
                </tr>';
        }

        $arrTheme = array(
            'listTake' => $htmlListTake,
            'sortName' => ($_SESSION['get_name'] == "name") ? $this->model->getSortClass() : "fa-sort",
            'sortEmail' => ($_SESSION['get_email'] == "email") ? $this->model->getSortClass() : "fa-sort",
            'sortStatus' => ($_SESSION['get_status'] == "status") ? $this->model->getSortClass() : "fa-sort",
            'page' => $pagination->get()
        );

        $this->view->html('main_views.php', 'template/template_main.php', $arrTheme);
    }

}

?>