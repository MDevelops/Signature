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

    <title>LEADER REALTY</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/plugins/steps/jquery.steps.css" rel="stylesheet">
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

                          <li class="active"><a href="index.php">Creation</a></li>
                          <li ><a href="Edit_Users.php">User Search</a></li>
                          <!--<li><a data-toggle="modal" data-target="#myModal2">Change Password of Users</a></li>-->
                      </ul>
                  </li>
                  <li>
                      <a href="#"><i class="fa fa-child"></i> <span class="nav-label">Contact </span><span class="fa arrow"></span></a>
                      <ul class="nav nav-second-level collapse">

                          <li><a href="Contact.php">Creation Contact </a></li>
                          <li><a href="Edit_Contact.php">Edit Contact </a></li>
                        <!--  <li><a data-toggle="modal" data-target="#myModal2">Change Password of Users</a></li>-->
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
                <li >
                  <a href="#"><i class="fa fa-indent"></i> <span class="nav-label">Menu Signbucket </span><span class="fa arrow"></span></a>
                  <ul class="nav nav-second-level collapse">
                      <li  ><a href="Signbucket.php"   >Signbucket                </a></li>
                      <li ><a href="TipSignbucket.php"   >Tip Signbucket            </a></li>
                      <li  ><a href="Upload_File.php"   >Upload Signbucket  File       </a></li>
                      <li  ><a href="MantenimientoPDF.php"   >Edit Signbucket  File         </a></li>
                  </ul>
              </li>
                <li class="active">
                    <a class="dropmenu" href="#"><i class="fa fa-check-square-o"></i><span class="fa arrow"></span><span class="hidden-tablet">Confirm Request</span></a>
                    <ul class="nav nav-second-level collapse">
                      <li class="active"><a href="Crear.php">Create File</a></li>
                      <li><a href="File.php">View File</a></li>
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
                        </i>Sing Out
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










        <div class="wrapper wrapper-content animated fadeInRight">

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">

                        <div class="panel-body">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <i class="fa fa-cogs"></i> Creation of loop
                                </div>
                                <div class="panel-body">
                        <div class="ibox-content">
                            <h2>
                              Create a new Loop
                            </h2>
                            <p>
                              text
                            </p>

                            <form id="form" action="#" method="POST" class="">
                                <h1>Loop</h1>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Name </label>
                                                <input id="Nameloop" name="Nameloop" type="text" class="form-control required" >
                                            </div>
                                            <br>
                                            <div class="controls">
                                                    <select type="text"   class="form-control required" name="status" id="status" required>
                                        						        <option id="status1" name="status1" selected="selected" disabled="disable">Selec to Status</option>
                                        						</select>
                              				</div>

                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 100px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                <h1>Type Loop</h1>
                                <fieldset>
                                    <h2>Select to Type Loop</h2>
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="form-group">

                                              <div class="controls">
                                                    <select type="text"   class="form-control required" name="loop" id="loop" required>
                                        						        <option id="loop1" name="loop1" selected="selected" disabled="disable">Selec to loop</option>
                                        						</select>
                              								</div>

                                            </div>

                                        </div>
                                        <div class="col-lg-5">


                                                <h2>Curiosities</h2>
                                                <p>At leader realty we think differently so we think so many steps if we can do them in a better way and saving time and effort accompany us in this new software signature experience</p>

                                        </div>
                                    </div>
                                </fieldset>

                                <h1>Picture</h1>
                                <fieldset>
                                    <div class="text-center" style="margin-top: 120px">
                                    <div id="img">
                                    </div>
                                        <p>Wooo! we have done a great job so let's continue like this, wooo, we have done a great job. Let's continue like that, what do you say if we add an image for our loop?

                                        Take the image of your computer and drag to me and we will have an image to display
                                        </p>
                                    </div>
                                </fieldset>

                                <h1>Finish</h1>
                                <fieldset>
                                    <h2>We have finished the process of creating a loop</h2>
                                </fieldset>

                                <div id="Registro"></div>
                            </form>


                </div>





            </div>
        </div>
        </div>
            </div>


        </div>
      </div>

        </div>

        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2015
            </div>
        </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Steps -->
    <script src="js/plugins/staps/jquery.steps.min.js"></script>

    <!-- Jquery Validate -->
    <script src="js/plugins/validate/jquery.validate.min.js"></script>

    <script src="js/templates/step.js"></script>


</body>

</html>
