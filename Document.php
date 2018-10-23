<?php
session_start();
if(!isset($_SESSION["id"] )) {
 header("location:Login.php");
} else {}
  //IdTblTransaccion
  //$idTransaccion=$_GET['idTransaccion'];
  //$nombree=$_GET['nombree'];
  /*echo '<script>$idTransaccion</script>';*/
  //echo'<script>alert("'.$nombree.'")</script>';
?>
<!DOCTYPE html>
<html>


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Leader Realty</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/StyleOptionLoop.css" rel="stylesheet">
</head>

<body>

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <center><img alt="image" class="img-circle" src="img/Logo.jpg" />
                             </span>
                    </div>
                    <div class="logo-element">
                        ADM
                    </div>
                </li>
                    <li class="active">
                        <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Users </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">

                            <li class="active"><a href="index.php">Creation</a></li>
                            <li class="active"><a href="Edit_Users.php">User Search</a></li>

                        </ul>
                    </li>
                    <li  >
                        <a href="#"><i class="fa fa-child"></i> <span class="nav-label">Contact </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">

                            <li  ><a href="Contact.php">Creation Contact </a></li>
                            <li  ><a href="Edit_Contact.php">Edit Contact </a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="dropmenu" href="#"><i class="fa fa-check-square-o"></i><span class="fa arrow"></span><span class="hidden-tablet">Confirm Request</span></a>
                        <ul class="nav nav-second-level collapse">
                          <li><a href="Crear.php">Create File</a></li>
                          <li><a href="File.php">View File</a></li>
                        </ul>
                    </li>

                    <!--Cod Agregago-->

                      <li>
                        <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Privilege </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">



                            <li  ><a href="CrearPrivi.php">Create Privilege </a></li>
                            <li  ><a href="Edit_Privi.php">Edit Privilege </a></li>

                          <!--  <li><a data-toggle="modal" data-target="#myModal2">Change Password of Users</a></li>-->
                        </ul>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-th"></i> <span class="nav-label">Rol</span><span class="fa arrow"></span></a>
                      <ul class="nav nav-second-level collapse">



                          <li  ><a href="ViewRol.php">Create Rol</a></li>
                          <li  ><a href="EditRol.php">Edit Rol</a></li>

                        <!--  <li><a data-toggle="modal" data-target="#myModal2">Change Password of Users</a></li>-->
                      </ul>
                  </li>
                        </ul>
                    </li>

                </ul>

            </div>
        </nav>

       <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to the Leader Realty</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a7.jpg">
                                </a>
                                <div class="media-body">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a4.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="fa fa-power-off" data-toggle="dropdown" href="#">
                        </i>Get Out
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                                <div>
                                    <Center><img alt="image" class="img-circle" src="img/CEO.jpg">
                                </div>
                            </a>
                        </li>



                        <li>

                        </li>
                        <li class="divider"></li>


                        <div class="row">
                            <div class="col-xs-4">
                              <center>
                                  <li ><a href="Login.php" style="color:" type="button"   class="btn btn-primary ">Get out</a></li>



                                  <center>
                            </div>
                            <div class="col-xs-4">

                            </div>
                            <div class="col-xs-4" align="LEFT">
                              <li ><a href="" style="color:" type="button"   class="btn btn-primary ">Edit</a></li>



                            </div>

                        </div>

            </ul>

        </nav>
        </div>

        <!--Encabezado-->

        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>
                <input style="border:none" id="nombre" type="text" name="nombre" value="<?php echo $_GET['nombree'];?>"/>
                </h2>

            </div>
            <div class="col-lg-2">

            </div>
        </div>

            <!--Cuerpo-->
          <br>
          <!--DOCUMENT-->
            <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Documents </h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                        <h6  style="font-size:1em; color:#339FFF;"> Anything you add is private until shared.</h6>

                    </div>

                    <div class="ibox-content">
                        <form method="get" class="form-horizontal">
                          <a href="#" style="float: right; color: #33A2FF; font-weight: bold;">ADD NEW FOLDER</a>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>


                            <div>
                            <tr>
                              <td><img src="img/img/folder2.png" style="width: 30px"></td>
                              <td><a id="newf" style="color: #33A2FF">NEW FOLDER </a></td>
                              </tr>

                          <div style="float: right">
                            <tr>
                            <td><a data-toggle='modal' data-target='#ModalDocument' href="#" style="float: left; width:150px; color: #33A2FF; font-weight: bold;">ADD DOCUMENT</a></td>
                            <td><label placeholder=" "></td>
                            <td><input type="image" src=" img/img/ajustes.png" style="width: 25px"></td>
                            </tr>
                          </div>

                          <br>
                        </form>
                    </div>

                </div><br>

            </div>
          </div>
            <!--FIN DOCUMENT-->

        <!-- INICIO MODAL ADD DOCUMENT -->
        <br>
        <div class="modal inmodal fade" id="ModalDocument" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" >

                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title">Add Person</h4>
                        <br>
                        <br>
                        <div class="modal-footer"></div>
                        <div class="col-sm-6">
                        <div class="input-group"><input type="text" class="form-control"> <span class="input-group-btn"> <button type="button" class="btn btn-primary">Search
                        </button> </span></div>
                        </div>
                     </div>
                     <div class="ibox-content">
                         <div class="row">

                             <div class="col-sm-6 b-r"><h3 class="m-t-none m-b" id="folder1">DOCTYPE</h3>


                              <ol id="listaDoctype" style="list-style-type: none">

                              <div class="hr-line-dashed"></div><br>

                               <li class="ui-state-default" id="c1">
                               <br>
                               <td><img src="img/img/folder2.png" style="width: 30px"></td><a>PRUEBA 01</a></li>


                               <li class="ui-state-default" id="c2">
                               <br>
                               <td><img src="img/img/folder2.png" style="width: 30px"></td><a>PRUEBA 02</a></li>

                               <li class="ui-state-default" id="c3">
                               <br>
                               <td><img src="img/img/folder2.png" style="width: 30px"></td><a>PRUEBA 03</a></li>
                               </ol>

                              <div class="hr-line-dashed"></div><br>

                             </div>
                             <LEFT><div class="col-sm-6 b-r" id="pdf1"><h4>Select all     Detalls</h4>
                               <div class="hr-line-dashed"></div><br>
                               <ol id="ModalPdf" style="list-style-type: none" >

                               <li class="ui-state-default" class:"ui-widget-header">
                               <td><input type="checkbox" name="vehicle1" value="Bike"><a>Dodumento1.pdf</a><i class="fa fa-file-pdf-o" style="float: right"></i></td></li>

                               <li class="ui-state-default" class:"ui-widget-header">
                               <td><input type="checkbox" name="vehicle1" value="Bike"><a>Dodumento2.pdf</a><i class="fa fa-file-pdf-o" style="float: right"></i></td></li>

                               <li class="ui-state-default" class:"ui-widget-header">
                               <td><input type="checkbox" name="vehicle1" value="Bike"><a>Dodumento3.pdf</a><i class="fa fa-file-pdf-o" style="float: right"></i></td></li>
                               </ol>
                             </div>

                         </div>

                     </div>
                     <div class="modal-footer">
                       <br><br>
                       <CENTER><div class="input-group" >
                      <a  data-dismiss="modal" style="color:" type="button"   class="btn btn-warning ">Close</a>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>

        <br>
        <!-- FIN MODAL ADD DOCUMENT -->


        </div>

        <!--Inicio Ventana Modal-->
        <br>



      <!--FIN MODAL-->



    </div>



    </div>

    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/plugins/jeditable/jquery.jeditable.js"></script>
    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/plugins/dataTables/datatables.min.js"></script>
    <!-- Peity -->
  <!--  <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>
-->
    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>
<!--
    <script src="js\templates\getless.js"></script>
    <script src="js\templates\getstatufile.js"></script>
-->
    <script type="text/javascript" src="js/jquery-1.8.3.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){

      $("#newf").attr("contentEditable",true);
      $("#check").attr("contentEditable",true);
      $("#task").attr("contentEditable",true);
      $("#buying").attr("contentEditable",true);
      $("#newtask").attr("contentEditable",true);

      $("#listaDoctype").sortable();



      });

    </script>

</body>

</html>
