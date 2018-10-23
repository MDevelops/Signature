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



</head>z

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

                            <li ><a href="index.php">Creation</a></li>
                            <li class="active"><a href="Edit_Users.php">User Search</a></li>

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
                    <li>
                      <a href="#"><i class="fa fa-th"></i> <span class="nav-label">Rol</span><span class="fa arrow"></span></a>
                      <ul class="nav nav-second-level collapse">



                          <li  ><a href="ViewRol.php">Create Rol</a></li>
                          <li  ><a href="EditRol.php">Edit Rol</a></li>

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






            <!--Cuerpo-->

            <div>

                <div class="tabs-container">
                    <ul class="nav nav-tabs">
                          <li><a href="index.php" style="color:#339FFF">New user</a></li>
                            <li><a href="Edit_Users.php" style="color:#339FFF">Search user</a></li>

                    </ul>
<div class="wrapper wrapper-content animated fadeInRight">

    <div class="row">
    <div class="col-lg-12">
    <div class="ibox float-e-margins">
    <div class="ibox-title">
        <h5>Information of Users</h5>
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
        <th>Id User</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Cell Phone</th>
        <th>Home Phone</th>
        <th>State</th>
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
    			$consulta= "SELECT * FROM tbl_usuario";
    			if ($resultado = $mysqli->query($consulta))
    			{
    				while ($fila = $resultado->fetch_row())
    				{
    					echo "<tr>";
    					echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td><td>$fila[8]</td>";
    					echo"<td>";
    				    echo "<a data-toggle='modal' data-target='#editUsu' data-id='" .$fila[0] ."' data-nombre='" .$fila[1] ."' data-email='" .$fila[2] ."' data-cell='" .$fila[3] ."'data-home='" .$fila[4] ."' data-estado='" .$fila[8] ."' class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span></a> ";

    					echo "</td>";
    					echo "</tr>";
    				}
    				$resultado->close();
    			}
    			$mysqli->close();



    ?>
    <tfoot>
    <tr>
      <th>Id User</th>
      <th>Full Name</th>
      <th>Email</th>
      <th>Cell Phone</th>
      <th>Home Phone</th>
      <th>State</th>
      <th>Edit</th>

    </tr>
    </tfoot>
    </table>

    </div>
    </div>
    </div>
    </div>
</div>

</br>
</br>

<!-- Modal de edicion de usuario -->
<div class="footer">
  <div class="modal" id="editUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4>Edit User</h4>
              </div>
              <div class="modal-body">
                <form action="" id="form" method="POST">

                            <input  id="id" name="id" type="hidden" ></input>
                        <div class="form-group">
                          <label for="nombre">Full Name:</label>
                          <input onkeypress="return soloLetras(event)" type="text" class="form-control" placeholder="nombre" name="nombre" id="nombre">
                        </div>
                        <div class="form-group">
                          <label for="edad">Email:</label>
                          <input type="text" class="form-control" placeholder="email" name="email" id="email">

                        </div>
                        <div class="form-group">
                          <label for="direccion">Cell Phone:</label>
                          <input onkeypress="return validaNumericos(event)" type="text" class="form-control" placeholder="cell" name="cell" id="cell">
                        </div>

                        <div class="form-group">
                          <label for="home">Cell Phone:</label>
                          <input onkeypress="return validaNumericos(event)" type="text" class="form-control" placeholder="home" name="home" id="home">
                        </div>
                        <div class="form-group">
                          <label for="home">State:</label>
                          <select class="form-control" name="estado" id="estado">
                                              <option>Active</option>
                                              <option>Inactive</option>
                            </select>

                                      </div>
                                        <br>

      				  <Center>
      				      <button type="button" class="btn btn-warning" data-dismiss="modal" >Close</button>
                        <button type="button" class="btn btn-primary" onclick="ValidaEditUser();">Save</button>

                </form>
                          </div>
                          <div id="Registro">
                          </div>
          </div>
      </div>
  </div>


  <!-- Modal de recuperacion de contraseña -->
  <div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content animated flipInY">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title">Forgot password</h4>
              </div>
              <div class="modal-body">
                  <p>Enter your email address and your password will be reset and emailed to you Tranks..</p>
                </br>
                  <div class="form-group">
                      <input type="email" class="form-control" placeholder="Username" required="">
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Send</button>
              </div>
          </div>
      </div>
  </div>



  </div>

     <div>
         <strong>ALL RIGHTS RESERVED</strong> LEADER REALTY &copy; 2009-2018
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
    <script src="js/templates/users.js"></script>
     <script src="js/templates/Validation.js"></script>


    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

            /* Init DataTables */
            var oTable = $('#editable').DataTable();




        });


    </script>

    <script>
        $('#editUsu').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient0 = button.data('id')
        var recipient1 = button.data('nombre')
        var recipient2 = button.data('email')
        var recipient3 = button.data('cell')
        var recipient4 = button.data('home')

         // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

        var modal = $(this)
        modal.find('.modal-body #id').val(recipient0)
        modal.find('.modal-body #nombre').val(recipient1)
        modal.find('.modal-body #email').val(recipient2)
        modal.find('.modal-body #cell').val(recipient3)
        modal.find('.modal-body #home').val(recipient4)

      });
          </script>

</body>
</html>
