<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title><? echo (isset($data['title'])) ? $data['title'] : "MVC - Test"; ?></title>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="/assets/css/forms/theme-checkbox-radio.css">
    <link href="/assets/css/tables/table-basic.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/elements/custom-pagination.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/plugins/animate/animate.css">
    <link href="/assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <script src="/plugins/sweetalerts/promise-polyfill.js"></script>
    <link href="/plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/notification/snackbar/snackbar.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/assets/css/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/forms/switches.css">
    <!-- END PAGE LEVEL CUSTOM STYLES -->
    <style>
        .blockui-growl-message {
            display: none;
            text-align: left;
            padding: 15px;
            background-color: #455a64;
            color: #fff;
            border-radius: 3px;
        }
        .blockui-animation-container { display: none; }
        .multiMessageBlockUi {
            display: none;
            background-color: #455a64;
            color: #fff;
            border-radius: 3px;
            padding: 15px 15px 10px 15px;
        }
        .multiMessageBlockUi i { display: block }
    </style>
</head>
<body>
<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing mt-5">

                <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
                    <div class="widget-content-area br-4">
                        <div class="widget-one">
                            <?php include 'application/views/'.$content_view; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="/assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="/bootstrap/js/popper.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script src="/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="/assets/js/app.js"></script>
<script src="/plugins/highlight/highlight.pack.js"></script>
<script src="/plugins/blockui/jquery.blockUI.min.js"></script>
<script src="/assets/js/add.js"></script>
<script src="/assets/js/edit.js"></script>
<script src="/assets/js/scrollspyNav.js"></script>
<script src="/plugins/sweetalerts/sweetalert2.min.js"></script>
<script src="/plugins/notification/snackbar/snackbar.min.js"></script>

<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<!-- END GLOBAL MANDATORY SCRIPTS -->


</body>
</html>