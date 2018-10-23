<?php
session_start();
if(!isset($_SESSION["id"])) {
 header("location:Login.php");
} else {}
?>
<!DOCTYPE html>
<html>


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Leader Realty</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">



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




                    <li  >
                        <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Users </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">

                            <li  ><a href="index.php">Creation</a></li>
                            <li ><a href="Edit_Users.php">User Search</a></li>

                            <!--<li><a data-toggle="modal" data-target="#myModal2">Change Password of Users</a></li>-->
                        </ul>
                    </li>
                    <li  >
                        <a href="#"><i class="fa fa-child"></i> <span class="nav-label">Contact </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">

                            <li  ><a href="Contact.php">Creation Contact </a></li>
                            <li  ><a href="Edit_Contact.php">Edit Contact </a></li>

                          <!--  <li><a data-toggle="modal" data-target="#myModal2">Change Password of Users</a></li>-->
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
                    <li class="active">
                      <a href="#"><i class="fa fa-th"></i> <span class="nav-label">Rol</span><span class="fa arrow"></span></a>
                      <ul class="nav nav-second-level collapse">



                          <li  ><a href="ViewRol.php">Create Rol</a></li>
                          <li class="active" ><a href="EditRol.php">Edit Rol</a></li>

                        <!--  <li><a data-toggle="modal" data-target="#myModal2">Change Password of Users</a></li>-->
                      </ul>
                  </li>


                            <!--<li><a data-toggle="modal" data-target="#myModal2">Change Password of Users</a></li>-->
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


        <div>



            <!--Cuerpo-->

            <div>

              <div class="tabs-container">
                  <ul class="nav nav-tabs"0>
                    <li ><a href="ViewRol.php" style="color:#339FFF">Add New Rol</a></li>
                      <li><a href="EditRol.php" style="color:#339FFF">Edit Rol</a></li>
                      </ul>
    <div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
          <div class="ibox-title">
              <h5>Information of rol</h5>
              <div class="ibox-tools">
                  <a class="collapse-link">
                      <i class="fa fa-chevron-up"></i>
                  </a>
              </div>
          </div>
        <div>

        </div>
        <div class="ibox-content">

        <table class="table table-striped table-bordered table-hover " id="editable" >
        <thead>
        <tr>
            <th>Name Rol</th>
            <th>Id Privilegio</th>
            <th>Description</th>
            <th>Edit</th>

        </tr>
        </thead>
        <?php
              #Conexion Housting Desarrollo
              $mysqli = new mysqli('162.241.225.147','leaderr5_leader','leader123@','leaderr5_relaty');
              #Conexion Housting de Prueba
              //$mysqli = new mysqli('localhost','id6343436_marilu','12345','id6343436_leader');
              #Conexion Local
              //$conexion=mysqli_connect('localhost','root','','leader');
        			if ($mysqli->connect_errno) {
        			    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        			    exit();
        			}
        			$consulta= "SELECT * FROM tbl_rol";
        			if ($resultado = $mysqli->query($consulta))
        			{
        				while ($fila = $resultado->fetch_row())
        				{
        					echo "<tr>";
        					echo "<td>$fila[1]</td><td>$fila[2]</td><td>$fila[5]</td>";
        					echo"<td>";
        				    echo "<a data-toggle='modal' data-target='#EditRol'  data-id='" .$fila[0] ."' data-name='" .$fila[1] ."' data-privilegio='" .$fila[2] ."' data-descrition='" .$fila[5] ."' class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span></a> ";

        					echo "</td>";
        					echo "</tr>";
        				}
        				$resultado->close();
        			}
        			$mysqli->close();



        ?>
        <tfoot>
        <tr>
         <th>Name Rol</th>
            <th>Id Privilegio</th>
            <th>Description</th>
            <th>Edit</th>

        </tr>
        </tfoot>
        </table>

        </div>
        </div>
        </div>
        </div>
    </div>
    <!-- Modal de recuperacion de contraseña -->
    <div class="modal fade bd-example-modal-lg" id="EditRol" tabindex="-1" role="dialog" aria-labellebdy="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <center>
                      <h4>Edit Rol</h4>
                      </center>
                  </div>
                  <div class="modal-body">
                    <form action="" id="form" method="POST">

                             <input  id="id" name="id" type="hidden" ></input>
                             <div class="row">
                                                              <div class="col-xs-4"><label> Name Rol</label>
                                                                    <div class="input-group">
                                                                         <span class="input-group-addon"><i class="glyphicon fa fa-plus-square"></i></span>
                                                                         <input  type="text" class="form-control" name="name" id="name" placeholder="Name Rol">

                                                                    </div>
                                                                    </div>
                                                              <div class="col-xs-4"><label> Privilege</label>
                                                              <div class="input-group">

                                                               <span class="input-group-addon"><i class="glyphicon  fa fa-university"></i></span>
                                                                <select type="text"   class="form-control " name="privilegio" id="privilegio"  <i class="glyphicon  fa fa-users"></i>>
                                                                        <option id="priv1" name="loop1" selected="selected" disabled="disable" ></option>
                                                                </select>
                                                             </div>
                                                             </div>

                                                                    <div class="col-xs-4"><label> Description</label>
                                                                    <div class="input-group">

                                                                        <span class="input-group-addon"><i class="glyphicon  fa fa-stack-exchange"></i></span>
                                                                        <input  type="text" class="form-control" name="descrition" id="descrition" placeholder="Descrition">

                                                                    </div>

                                                            </div>
                                                          </div>

                                                          </div>

                                                    <br>

          				  <Center>
          				      <button type="button" class="btn btn-warning" data-dismiss="modal" >Close</button>
                            <button type="button" class="btn btn-primary" onclick="EditaRol1();">Save</button>

                                  <br>
                                  <br>
                                  <br>
                    </form>
                              </div>
                              <div id="Registro">
                              </div>
              </div>
          </div>
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
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <script src="js/templates/rol.js"></script>




    <!-- Page-Level Scripts -->
    <script>
        $('#EditRol').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient0 = button.data('name')
        var recipient1 = button.data('privilegio')
        var recipient2 = button.data('descrition')
        var recipient3 = button.data('id')

         // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

        var modal = $(this)
        modal.find('.modal-body #name').val(recipient0)
        modal.find('.modal-body #privilegio').val(recipient1)
        modal.find('.modal-body #descrition').val(recipient2)
        modal.find('.modal-body #id').val(recipient3)
      });
          </script>

</body>

</html>
