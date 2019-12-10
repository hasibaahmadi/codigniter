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
          <?php  echo anchor('home/lang_load/english',"English")."<br/>";
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
            <a href="<?php echo base_url()?>index.php/diagnosis/get_diagnosis">
              <i class="fa fa-tasks"></i>
              <span style="font-size:13px;">diagnosis</span>
              </a>
            
          </li>
          <!--<li class="sub-menu">
            <a href="<?php //echo base_url()?>index.php/addmision/get_addmision">
              <i class="fa fa-th"></i>
              <span style="font-size:13px;">Addmision </span>-->
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