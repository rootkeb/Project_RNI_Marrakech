<?php

include_once './racine.php';
include_once 'Classe/Projet.php';
include_once RACINE_PATH.'/service/ProjetService.php';

$ss = new ProjetService();





extract($_GET);
if (isset($id)){
    $ss->delete($id);
    header('Location: ListProjects.php');
}
extract($_POST);
if(isset($idm)){
    $s = new Projet("","","","","");
    $s=$ss->getById($idm);
      $s->setTitre($titre);
      $s->setDate($date);
      $s->setDescription($description);
      $s->setImg($img);
      $ss->update($s);
      header('Location: ListProjects.php');

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="/img/Iconleak-Or-Justice-balance.ico"/>
    <title>ListProjects</title>

    <!-- Global stylesheets -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900"
        rel="stylesheet" type="text/css" />
    <link href="assets/cp/css/icons/icomoon/styles.css"
          rel="stylesheet" type="text/css"
    />
    <link href="assets/cp/css/bootstrap.css" rel="stylesheet"
          type="text/css"  />
    <link href="assets/cp/css/core.css" rel="stylesheet"
          type="text/css"  />
    <link href="assets/cp/css/components.css" rel="stylesheet"
          type="text/css" />
    <link href="assets/cp/css/colors.css" rel="stylesheet"
          type="text/css" />
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript"
            src="assets/cp/js/plugins/loaders/pace.min.js"
    ></script>
    <script type="text/javascript"
            src="assets/cp/js/core/libraries/jquery.min.js"
    ></script>
    <script type="text/javascript"
            src="assets/cp/js/core/libraries/bootstrap.min.js"
    ></script>
    <script type="text/javascript"
            src="assets/cp/js/plugins/loaders/blockui.min.js"
    ></script>
    <script type="text/javascript"
            src="assets/cp/js/plugins/ui/nicescroll.min.js"
    ></script>
    <script type="text/javascript"
            src="assets/cp/js/plugins/ui/drilldown.js"
    ></script>
    <script type="text/javascript"
            src="assets/cp/js/plugins/ui/fab.min.js"
    ></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->




    <!-- Theme JS files -->
    <script type="text/javascript"
            src="assets/cp/js/plugins/tables/datatables/datatables.min.js"
    ></script>

    <script type="text/javascript"
            src="assets/cp/js/core/libraries/jquery_ui/interactions.min.js"
    ></script>

    <script type="text/javascript"
            src="assets/cp/js/plugins/forms/selects/select2.min.js"
    ></script>


    <script type="text/javascript"
            src="assets/cp/js/pages/form_select2.js"
    ></script>

    <script type="text/javascript"
            src="assets/cp/js/plugins/tables/datatables/extensions/jszip/jszip.min.js"
    ></script>
    <script type="text/javascript"
            src="assets/cp/js/plugins/tables/datatables/extensions/pdfmake/pdfmake.min.js"
    ></script>
    <script type="text/javascript"
            src="assets/cp/js/plugins/tables/datatables/extensions/pdfmake/vfs_fonts.min.js"
    ></script>
    <script type="text/javascript"
            src="assets/cp/js/plugins/tables/datatables/extensions/buttons.min.js"
    ></script>

    <script type="text/javascript"
            src="assets/cp/js/core/app.js"
    ></script>
    <script type="text/javascript"
            src="assets/cp/js/pages/datatables_extension_buttons_html5.js"
    ></script>
    <script type="text/javascript"
            src="assets/cp/js/plugins/ui/ripple.min.js"
    ></script>

    <script type="text/javascript" src="assets/cp/js/pages/components_modals.js"
    ></script>
    <script type="text/javascript" src="assets/cp/js/plugins/notifications/bootbox.min.js"
    ></script>
    <script type="text/javascript" src="assets/cp/js/plugins/notifications/sweet_alert.min.js"
    ></script>
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
                        <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Projets</span> </h4>
                    </div>


                </div>

                <div class="breadcrumb-line breadcrumb-line-component">
                    <ul class="breadcrumb">
                        <li><a href="index.html"><i class="icon-home2 position-left"></i> Accueil</a></li>
                        <li><a href="form_inputs_basic.html">Projets</a></li>
                        <li class="active">Liste des projets</li>
                    </ul>

                </div>
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">

                <!-- Form horizontal -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title">Ajout un projet</h5>

                    </div>




                    <div class="panel-body">

                        <div id="DataTables_Table_0_wrapper"
                             class="dataTables_wrapper no-footer">
                            <div class="datatable-header">



                            </div>
                            <div class="datatable-scroll-wrap">
                                <table
                                    class="table datatable-button-html5-basic dataTable no-footer"
                                    id="DataTables_Table_0" role="grid"
                                    aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0"
                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                            aria-sort="ascending"
                                            aria-label="First Name: activate to sort column descending">Titre</th>
                                        <th class="sorting" tabindex="0"
                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                            aria-label="Last Name: activate to sort column ascending">Date</th>


                                        <th class="sorting" tabindex="0"
                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                            aria-label="Salary: activate to sort column ascending"  >Actions</th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                    <?php




                                    $a=$ss->getAll();
                                    foreach($a as $v):{



                                        ?>
                                        <tr role="row" th:each="m,rowStat : ${listeFactures}" th:class="${rowStat.even}? 'odd' : 'even'" class="odd">
                                            <td class="sorting_1" ><?php echo $v->getTitre();  ?></td>

                                            <td >
                                                <?php echo $v->getDate();  ?></td>


                                            <td>


                                                <button type="button" class="btn btn-default btn-icon btn-rounded legitRipple"  data-toggle="modal" data-target="#modal_form_Consulter<?php echo $v->getIdpro();  ?>" data-popup="tooltip" title="" data-placement="top" id="left1" data-original-title="Consulter"><i class="icon-file-eye"></i></button>
                                                <button type="button" class="btn btn-success btn-icon btn-rounded legitRipple"  data-toggle="modal" data-target="#modal_form_Modifier<?php echo $v->getIdpro();  ?>" data-popup="tooltip" title=""   data-placement="top"  id="left3" data-original-title="Modifier"><i class="icon-pencil7"></i></button></a>
                                                <button type="button" class="btn btn-default btn-icon btn-rounded legitRipple" data-toggle="modal" data-target="#modal_form_Supprimer<?php echo $v->getIdpro();  ?>" data-popup="tooltip" title="" data-placement="top" id="left2" data-original-title="Supprimer"><i class="icon-close2"></i></button>

                                            </td>










                                            <!-- /default modal -->

                                            <div id="modal_form_Consulter<?php echo $v->getIdpro();  ?>" class="modal fade">

                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-info">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h6 class="modal-title">Fiche client</h6>
                                                        </div>

                                                        <div class="thumb thumb-rounded thumb-slide">
                                                            <img src="images/<?php echo $v->getImg(); ?>" alt="" />
                                                            <h6 class="text-semibold  no-margin-top"><?php echo $v->getTitre();  ?></h6>
                                                        </div>

                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-sm-6">

                                                                    <ul class="list text-left list-unstyled">
                                                                        <li>Titre  	&nbsp;	&nbsp;: <span class="text-semibold" ><?php echo $v->getTitre();  ?></span></li>
                                                                    </ul>
                                                                </div>




                                                                <div class="col-sm-6">
                                                                    <ul class="list list-unstyled text-left">
                                                                        <li>Date:<span class="text-semibold"><?php echo $v->getDate();  ?></span></li>

                                                                    </ul>
                                                                </div>


                                                                <div class="col-sm-12">
                                                                    <ul class="list list-unstyled text-left">
                                                                        <li>Desc:</li><span class="text-semibold"><?php echo $v->getDesription();  ?></span>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-link" data-dismiss="modal">Annuler</button>




                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /default modal -->





                                            <!-- Vertical form modal -->
                                            <div id="modal_form_Modifier<?php echo $v->getIdpro();  ?>" class="modal fade">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-primary-600">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h5 class="modal-title">Ajout Catgorie d'intervenant</h5>
                                                        </div>

                                                        <form action="ListProjects.php" method="POST" class="form-horizontal">
                                                            <input type="hidden" value="<?php echo $v->getIdpro();  ?>" name="idm" />

                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-3">le titre :</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" value="<?php echo $v->getTitre();  ?>" name="titre" class="form-control" />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-3">la date :</label>
                                                                    <div class="col-sm-9">
                                                                        <input value="<?php echo $v->getDate();  ?>" type="text" name="date" class="form-control" />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-3">Desc :</label>
                                                                    <div class="col-sm-9">
                                                                        <textarea name="description" class="form-control" ><?php echo $v->getDesription();  ?> </textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-3">Image :</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" value="<?php echo $v->getImg();  ?>" name="img" class="form-control" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-link text-white"
                                                                        data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn bg-primary-800">Modifier</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /vertical form modal -->







                                            <!-- Mini modal -->
                                            <div id="modal_form_Supprimer<?php echo $v->getIdpro();  ?>" class="modal fade">
                                                <div class="modal-dialog modal-xs">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-danger">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h5 class="modal-title">Suppression</h5>
                                                        </div>

                                                        <div class="modal-body">
                                                            <h6 class="text-semibold" >Confirmez vous suppression de cette actabilit </h6>

                                                        </div>

                                                        <div class="modal-footer">

                                                            <button type="button" class="btn btn-link" data-dismiss="modal">Annuler</button>

                                                            <a href="ListProjects.php?id=<?php echo $v->getIdpro(); ?>"><button type="button" class="btn btn-danger" value="Confirmer">Confirmer</button></a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /mini modal -->
                                        </tr>
                                        <?php
                                    }endforeach;
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="datatable-footer">


                            </div>
                        </div>

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
