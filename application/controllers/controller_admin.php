<?php
/*
=========================================
Autor:  Nekleenov M.Y
E-Mail: m.nekleenov@yandex.com
=========================================
*/

class Controller_Admin extends Controller
{

    function __construct()
    {
        $this->model = new Model_Admin();
        $this->view = new View();
    }

    function action_index()
    {
        $this->getSession();
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
                    <td class="text-center">                       
                        <ul class="table-controls">
                            <li><a href="/admin/edit?get='.$row['id'].'" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                            <li><a href="/admin/delete?get='.$row['id'].'" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a></li>
                        </ul>
                    </td>
                </tr>';
            }
        }
        else
        {
            $htmlListTake[] = '<tr>
                    <td colspan="5">Нет записей</td>
                </tr>';
        }

        $arrTheme = array(
            'title' => "Админ-панель",
            'login' => $_SESSION['login'],
            'listTake' => $htmlListTake,
            'sortName' => ($_SESSION['get_name'] == "name") ? $this->model->getSortClass() : "fa-sort",
            'sortEmail' => ($_SESSION['get_email'] == "email") ? $this->model->getSortClass() : "fa-sort",
            'sortStatus' => ($_SESSION['get_status'] == "status") ? $this->model->getSortClass() : "fa-sort",
            'page' => $pagination->get()
        );

        $this->view->html('admin_views.php', 'template/template_main.php', $arrTheme);
    }

    function action_delete()
    {
        $this->getSession();
        $this->model->getDelete($this->xss_get($_GET['get']));
    }

    function action_edit()
    {
        $this->getSession();

        $sql = $this->model->getTaskId($this->xss_get($_GET['get']));
        $arrTheme = array(
            'title' => "Админ-панель",
            'id' => $sql['id'],
            'task' => $sql['message'],
            'checked' => ($sql['status'] != 0) ? "checked" : ""
        );

        $this->view->html('edit_views.php', 'template/template_main.php', $arrTheme);
    }

    function action_get()
    {
        $this->getSession();
        $this->model->getSave($this->xss_get($_POST['id']), $this->xss_get($_POST['get_task']), $this->xss_get($_POST['status']));
    }

}

?>