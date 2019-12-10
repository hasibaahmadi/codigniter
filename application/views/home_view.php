<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">

  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title> Hospital Information System</title>

  <!-- Favicons -->
  <link href="<?= base_url()?>file/img/favicon.png" rel="icon">
  <link href="<?= base_url()?>file/img/apple-touch-icon.png" rel="apple-touch-icon">
<!-- datatable -->
<link href="<?= base_url()?>file/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="<?= base_url()?>file/lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="<?= base_url()?>file/lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url()?>file/lib/advanced-datatable/css/DT_bootstrap.css" />
  <!-- Bootstrap corep CSS -->
  <link href="<?= base_url()?>file/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?= base_url()?>file/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="<?= base_url()?>file/css/style.css" rel="stylesheet">
  <link href="<?= base_url()?>file/css/style-responsive.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>


<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>  Hospital<span> information system </span></b></a>
      <!--logo end-->
      
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="<?= base_url()?>index.php/staff/admin_login">Logout</a></li>
          <?php  echo anchor('home/long_load/english',"English")."<br/>";
echo anchor('home/lang_load/dari',"Dari")."<br/>";?>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
	
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="<?php echo base_url()?>index.php/profile/index"><img src="<?= base_url()?>file/img/service.png" class="img-circle" width="80"></a></p>
          <h5 class="centered">Somaia Mosaddiq</h5>
          <li class="mt">
            <a href="<?php echo base_url()?>index.php/home/index">
              <i class="fa fa-home"></i>
              <span style="font-size:13px;"> Home</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="<?php echo base_url()?>index.php/staff/get_staff">
              <i class="fa fa-book"></i>
              <span style="font-size:13px;"> Employees </span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="<?php echo base_url()?>index.php/patient/get_patients">
              <i class="fa fa-desktop"></i>
              <span style="font-size:13px;"> patients</span>
              </a>
           
          </li>
          <li class="sub-menu">
            <a href="<?php echo base_url()?>index.php/department/get_department">
              <i class="fa fa-cogs"></i>
              <span style="font-size:15px;"> Departments</span>
              </a>
            
          </li>
          <li class="sub-menu">
            <a href="<?php echo base_url()?>index.php/ward/get_ward">
              <i class="fa fa-book"></i>
              <span style="font-size:13px;"> Wards</span>
              </a>
            
          </li>
          <li class="sub-menu">
            <a href="<?php echo base_url()?>index.pho/diagnosis/get_diagnosis">
              <i class="fa fa-tasks"></i>
              <span style="font-size:13px;">diagnosis</span>
              </a>
            
          </li>
          <li class="sub-menu">
            <a href="<?php echo base_url()?>index.php/addmision/get_addmision">
              <i class="fa fa-th"></i>
              <span style="font-size:13px;">Addmision </span>
              </a>
            
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
	
	
			</div>
			</section>
			</section>
			
			<!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!-- page start-->
        <div class="row mt">
          <div class="col-sm-3">
            
              </div>
            </section>
		
          </div>
        </div>
      </section>








<!--main content start-->
<section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Discover Our Panels</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <!-- CHART PANELS -->
            
                    
              
            <!--  SECOND ROW OF PANELS -->
            <div class="row">
              <div class="col-md-4 col-sm-4 mb">
                <!-- REVENUE PANEL -->
                <div class="green-panel pn">
                  <div class="green-header">
                    <h5>number of employees</h5>
                  </div>
                  <div class="chart mt">
                    <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,464,655]"></div>
                  </div>
                  
                  
                  
                  
                  <?php
    $con=mysqli_connect("localhost","root","","system");
    mysqli_set_charset($con,"utf8");
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql="SELECT * FROM staff";
    if ($result=mysqli_query($con,$sql))
    {
    // Return the number of rows in result set
    $rowcount=mysqli_num_rows($result);
    echo "<div class='count'><h3>".$rowcount."</h3></div>";
    // Free result set
    mysqli_free_result($result);
    }
    mysqli_close($con);
    ?>

<h2 class="mt"><i class="fa fa-user fa-3x"></i></h2>    
                  <!--<p class="mt"><b>$ 17,980</b><br/>Month Income</p>-->



                </div>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="stock card">
                  <div class="stock-chart">
                    <div id="chart"></div>
                  </div>
                  <div class="stock current-price">
                    <div class="row">
                      <div class="info col-sm-6 col-xs-6"><abbr>AAPL</abbr>
                        <time>Yesterday</time>
                      </div>
                      <div class="changes col-sm-6 col-xs-6">
                        <div class="value up"><i class="fa fa-caret-up hidden-sm hidden-xs"></i> 694.00</div>
                        <div class="change hidden-sm hidden-xs">+4.95 (3.49%)</div>
                      </div>
                    </div>
                  </div>
                  <div class="summary">
                    <strong>18.3 M</strong> <span>SHARES TRADED</span>
                  </div>
                </div>
              </div>
              <!--  /col-md-4 -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                    <h5>SITE STATICS</h5>
                  </div>
                  
                  <?php
    $con=mysqli_connect("localhost","root","","system");
    mysqli_set_charset($con,"utf8");
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql="SELECT * FROM patient";
    if ($result=mysqli_query($con,$sql))
    {
    // Return the number of rows in result set
    $rowcount=mysqli_num_rows($result);
    echo "<div class='count'><h5>".$rowcount."</h5></div>";
    // Free result set
    mysqli_free_result($result);
    }
    mysqli_close($con);
    ?>
<h1 class="mt"><i class="fa fa-user fa-3x"></i></h1>
                  <p><h5>Patients Of VISITS<h5></p>

                  
                </div>
                <!--  /darkblue panel -->
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row - SECOND ROW OF PANELS -->
            <!--  THIRD ROW OF PANELS -->
            <div class="row">
              <!-- WEATHER PANEL -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="weather pn">
                  <i class="fa fa-cloud fa-4x"></i>
                  

                <?php
    $con=mysqli_connect("localhost","root","","system");
    mysqli_set_charset($con,"utf8");
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql="SELECT * FROM departments";
    if ($result=mysqli_query($con,$sql))
    {
    // Return the number of rows in result set
    $rowcount=mysqli_num_rows($result);
    echo "<div class='count'><h2>".$rowcount."</h2></div>";
    // Free result set
    mysqli_free_result($result);
    }
    mysqli_close($con);
    ?>
    <h2>Departments </h2>
                </div>

          
              </div>
              <!-- /col-md-4-->
              <!-- WEATHER-2 PANEL -->
              <div class="col-lg-4 col-md-4 col-sm-4 mb">
                <div class="weather-2 pn">
                  <div class="weather-2-header">
                    <div class="row">
                      <div class="col-sm-6 col-xs-6">
                        <p>NEW YORK</p>
                      </div>
                      <div class="col-sm-6 col-xs-6 goright">
                        <p class="small">Thu Apr 14, 2014</p>
                      </div>
                    </div>
                  </div>
                  <!-- /weather-2 header -->
                  <div class="row centered">
                    <img src="img/ny.jpg" class="img-circle" width="120">
                  </div>
                  <div class="row data">
                    <div class="col-sm-6 col-xs-6 goleft">
                      <h4><b>16 ºC</b></h4>
                      <h6>21º max</h6>
                      <h6>8º min</h6>
                    </div>
                    <div class="col-sm-6 col-xs-6 goright">
                      <h5><i class="fa fa-sun-o fa-2x"></i></h5>
                      <h6><b>Sunny</b></h6>
                      <h5>7:15 am</h5>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /col-md-4 -->
              <!-- WEATHER-3 PANEL -->
              <div class="col-lg-4 col-md-4 col-sm-4 mb">
                <div class="weather-3 pn centered">
                  <i class="fa fa-sun-o"></i>


                  <?php
    $con=mysqli_connect("localhost","root","","system");
    mysqli_set_charset($con,"utf8");
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql="SELECT * FROM wards";
    if ($result=mysqli_query($con,$sql))
    {
    // Return the number of rows in result set
    $rowcount=mysqli_num_rows($result);
    echo "<div class='count'><h2>".$rowcount."</h2></div>";
    // Free result set
    mysqli_free_result($result);
    }
    mysqli_close($con);
    ?>

                  <div class="info">
                    <div class="row">
                      <h3 class="centered">wards</h3>
                      <div class="col-sm-6 col-xs-6 pull-left">
                        <p class="goleft"><i class="fa fa-tint"></i> 13%</p>
                      </div>
                      <div class="col-sm-6 col-xs-6 pull-right">
                        <p class="goright"><i class="fa fa-flag"></i> 15 MPH</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row - THIRD ROW OF PANELS -->
            <!--  FOURTH ROW OF PANELS -->
            <div class="row">
              <!-- TWITTER PANEL -->
              <div class="col-lg-4 col-md-4 col-sm-4 mb">
                <div class="twitter-panel pn">
                  <i class="fa fa-twitter fa-4x"></i>
                  <p>Dashio is here! Take a look and enjoy this new Bootstrap Dashboard theme.</p>
                  <p class="user">@Alvrz_is</p>
                </div>
              </div>
              
            
              <!-- /col-md-4 -->
              <!--  PROFILE 02 PANEL -->
              <div class="col-lg-4 col-md-4 col-sm-4 mb">
                <div class="content-panel pn">
                  <div id="profile-02">
                    <div class="user">
                      <img src="img/friends/fr-06.jpg" class="img-circle" width="80">
                      <h4>DJ SHERMAN</h4>
                      </div>
                      <?php
    $con=mysqli_connect("localhost","root","","system");
    mysqli_set_charset($con,"utf8");
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql="SELECT * FROM patient where gender='male' and age>='5'";
    if ($result=mysqli_query($con,$sql))
    {
    // Return the number of rows in result set
    $rowcount=mysqli_num_rows($result);
    echo "<div class='count'><h2>".$rowcount."</h2></div>";
    // Free result set
    mysqli_free_result($result);
    }
    mysqli_close($con);
    ?>

                    
                  </div>
                  <div class="pr2-social centered">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                  </div>
                </div>
                <!-- /panel -->
              </div>
              <!--/ col-md-4 -->
            </div>
            <!-- /row FIFTH ROW OF PANELS -->
          
            <!--  END SIXTH ROW OF PANELS -->
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    
    
    
    
    
    
    
    


    <?php
    $con=mysqli_connect("localhost","root","","system");
    mysqli_set_charset($con,"utf8");
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql="SELECT * FROM patient where gender=male";
    if ($result=mysqli_query($con,$sql))
    {
    // Return the number of rows in result set
    $rowcount=mysqli_num_rows($result);
    echo "<div class='count'><h3>".$rowcount."</h3></div>";
    // Free result set
    mysqli_free_result($result);
    }
    mysqli_close($con);
    ?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
