<?php
/*
=========================================
Autor:  Nekleenov M.Y
E-Mail: m.nekleenov@yandex.com
=========================================
*/

class View
{

    function html($content_view, $template_view, $data = null)
    {
        include 'application/views/'.$template_view;
    }

}

?>