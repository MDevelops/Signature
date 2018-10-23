<?php
session_start();
if(!isset($_SESSION["id"] )) {
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




                    <li >
                        <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Users </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">

                            <li ><a href="index.php">Creation</a></li>
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

                    <li class="active">
                        <a class="dropmenu" href="#"><i class="fa fa-check-square-o"></i><span class="fa arrow"></span><span class="hidden-tablet">Confirm Request</span></a>
                        <ul class="nav nav-second-level collapse">
                          <li><a href="Crear.php">Create File</a></li>
                          <li class="active"><a href="File.php">View File</a></li>
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














        <div>

            <div class="tabs-container">
                <ul class="nav nav-tabs">
                      <div class="row">
                        <div class="col-xs-4">
                          <h2 style="color:#050403">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;File</h2>
                        </div>
                      </br>
                <div class="col-xs-4">

                    <li ><a href="Activiti.php" style="color:#339FFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Activities list</a></li>
                </div>
                <div class="col-xs-4">
                  <li><a href="notification.php" style="color:#339FFF">Notifications</a></li>
                </div>



                </ul>


      </br>

              <div class="botton12">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-warning " type="button" onclick="location.href='Crear.php'"><i class="fa fa-plus-square" ></i>&nbsp;&nbsp;&nbsp; <span class="bold">Add File</span></button>
                <button class="btn btn-primary" type="button"><a href="tabla2.php" style="color:#FFFFFF"  class="fa fa-th"  style="font-size: 20px;" ></a>
              </div>
      <div class="wrapper wrapper-content animated fadeInRight">

        <div class="input-group">
          <input type="text" placeholder="Search" class="input form-control" width='20%' id="name" name="name" onkeyup="if (event.keyCode == 13) valor();" >
            <span class="input-group-btn" >

              <button type="button" id="button" onclick="valor();"class="btn btn-primary" > <i class="fa fa-search"></i></button>
            </span>
        </div>

        <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row" id="all" method="post" >




            </div>
        </div>

        </div>

                    <div class="footer">
                        <div>
                            <strong>ALL RIGHTS RESERVED</strong> LEADER REALTY &copy; 2009-2018
                        </div>
                    </div>
        </div>
        </div>



    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>
    <script src="js/templates/view.js"></script>


</body>

</html>
