<?php


include_once './racine.php';
include_once RACINE_PATH.'/service/EvenementService.php';


extract($_POST);

if (isset($titre)){


    $dir = "images";
    $path = $dir . "/" . $_FILES['img']['name'];
    $extension = array('jpg', 'gif', 'png', 'bmp');
    $ss = new EvenementService();
    if (!is_dir($dir)) {
        mkdir($dir, 0777);
    }
    if (!in_array(strtolower(substr($_FILES['img']['name'], -3)), $extension)) {
        echo '<script>alert("erreur extension");</script>';
    } else {
        if (move_uploaded_file($_FILES['img']['tmp_name'], $path)) {
            $ss->create(new Evenement(1,$titre, $date, $description,$_FILES['img']['name']));
            header('Location: ListEvents.php');
        } else {
            echo '<script>alert("erreur");</script>';
        }
    }





}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AddEvents</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="assets/cp/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="assets/cp/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="assets/cp/css/core.css" rel="stylesheet" type="text/css">
    <link href="assets/cp/css/components.css" rel="stylesheet" type="text/css">
    <link href="assets/cp/css/colors.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="assets/cp/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="assets/cp/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="assets/cp/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/cp/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="assets/cp/js/plugins/notifications/jgrowl.min.js"></script>
    <script type="text/javascript" src="assets/cp/js/plugins/ui/moment/moment.min.js"></script>
    <script type="text/javascript" src="assets/cp/js/plugins/pickers/daterangepicker.js"></script>
    <script type="text/javascript" src="assets/cp/js/plugins/pickers/anytime.min.js"></script>
    <script type="text/javascript" src="assets/cp/js/plugins/pickers/pickadate/picker.js"></script>
    <script type="text/javascript" src="assets/cp/js/plugins/pickers/pickadate/picker.date.js"></script>
    <script type="text/javascript" src="assets/cp/js/plugins/pickers/pickadate/picker.time.js"></script>
    <script type="text/javascript" src="assets/cp/js/plugins/pickers/pickadate/legacy.js"></script>

    <script type="text/javascript" src="assets/cp/js/core/app.js"></script>
    <script type="text/javascript" src="assets/cp/js/pages/picker_date.js"></script>

    <script type="text/javascript" src="assets/cp/js/plugins/ui/ripple.min.js"></script>
    <!-- /theme JS files -->


</head>

<body>

<!-- Main navbar -->
<?php
include "includes/header.php";
?>


<!-- /main navbar -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <?php
        include "includes/sidebar.php";
        ?>




        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header">
                <div class="page-header-content">
                    <div class="page-title">
                        <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Evenements</span> </h4>
                    </div>


                </div>

                <div class="breadcrumb-line breadcrumb-line-component">
                    <ul class="breadcrumb">
                        <li><a href="index.html"><i class="icon-home2 position-left"></i> Accueil</a></li>
                        <li><a href="form_inputs_basic.html">Evenements</a></li>
                        <li class="active">Nouveau événement</li>
                    </ul>

                </div>
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">

                <!-- Form horizontal -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title">Ajouter un événement</h5>

                    </div>

                    <div class="panel-body">

                        <form class="form-horizontal" action="<?php echo " ";?>" method="post" enctype="multipart/form-data">
                            <fieldset class="content-group">
                                <legend class="text-bold">Basic inputs</legend>



                                <div class="form-group">
                                    <label class="control-label col-lg-2">Titre</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" placeholder="" name="titre">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-lg-2">Date</label>
                                    <div class="col-lg-10">
                                        <input class="form-control daterange-single" value="03/18/2013" type="text" name="date" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Description</label>
                                    <div class="col-lg-10">
                                        <textarea rows="5" cols="5" class="form-control" placeholder="Default textarea" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Image</label>
                                    <div class="col-lg-10">
                                        <div class="uploader">
                                            <input class="file-styled-primary" type="file" name="img">
                                            <span class="filename" style="-moz-user-select: none;">No file selected</span>
                                            <span class="action btn bg-blue legitRipple" style="-moz-user-select: none;">Choose File</span>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /form horizontal -->


                <!-- Footer -->
                <?php
                include "includes/footer.php";
                ?>

                <!-- /footer -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

</body>
</html>
