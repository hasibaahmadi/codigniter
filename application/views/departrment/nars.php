
<?php 

$con = mysql_connect("localhost", "root", "", "system");
mysql_select_db("system");

//mysql_set_charset($con,"utf8");

$get = mysql_query("SELECT * from staff where staffJob = 'nars'", $con);

$row_get = mysql_fetch_assoc($get);





?>
<head>

<style>
/* Style The Dropdown Button */
.dropbtn {
background-color: #4CAF50;
color: white;
padding: 16px;
font-size: 16px;
border: none;
cursor: pointer;

}

/* The container <div> - needed to position the dropdown content */
.dropdown {
position: relative;
display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
display: none;
position: absolute;
background-color: #f9f9f9;
min-width: 160px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

/* Links inside the dropdown */
.dropdown-content a {
color: black;
padding: 12px 16px;
text-decoration: none;
display: inline;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
background-color: #3e8e41;
}
</style>

</head>


<!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> List Of Employees</h3>

    


    
    <div class="row mb">
      <!-- page start-->
      <div class="content-panel">
        <div class="adv-table">
          <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
        
       <!-- <div class="dropdown">
<button class="dropbtn">Lists of employees</button>
<div class="dropdown-content" style="position:relative; top:-50%;">
<a href="<?php //echo base_url('index.php/staff/result');?>">Department 1</a>
<a href="#">Department 2</a>
<a href="#">Department 3</a>
<a href="#">Department 4</a>
<a href="#">Link 5</a>
</div>
</div>-->


      
       
       
        <hr>
        <thead>
          <tr>

          
            <th><i></i> Id</th>
            <th><i></i> Name</th>
            <th><i></i> LastName</th>
            <th><i></i> Time of Work </th>
            <th><i></i>   DepartmentId</th>
            <th><i></i>  Address</th>
            <th><i></i>  Job</th>
            <th><i></i>  Salary</th>
            <th><i></i>  Age</th>
            <th><i></i> Gender </th>
            <th><i></i> Photo </th>



            
            
          </tr>
        </thead>
       
          
<?php do{ ?>

  <tr>
          <td><?php echo $row_get['staffID']; ?></td>
          <td><?php echo $row_get['firstName']; ?></td>
          <td><?php echo $row_get['lastName']; ?></td>
          <td><?php echo $row_get['workingTime']; ?></td>
          <td><?php echo $row_get['departmentId']; ?></td>
          <td><?php echo $row_get['address']; ?></td>
          <td><?php echo $row_get['staffJob']; ?></td>
          <td><?php echo $row_get['salary']; ?></td>
          <td><?php echo $row_get['age']; ?></td>
          <td><?php echo $row_get['gendeer']; ?></td>
          <td><?php echo $row_get['photo']; ?></td>

  </tr>

<?php } while($row_get = mysql_fetch_assoc($get)); ?>
   
        


    
          </table>
        </div>
      </div>
      <!-- page end-->
    </div>
    <!-- /row -->
  </section>
  <!-- /wrapper -->
</section>


<!-- /MAIN CONTENT -->
<!--main content end-->
<!--footer start-->
<footer class="site-footer">
  <div class="text-center">
    <p>
      &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
    </p>
    <div class="credits">
      <!--
        You are NOT allowed to delete the credit link to TemplateMag with free version.
        You can delete the credit link only if you bought the pro version.
        Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
        Licensing information: https://templatemag.com/license/
      -->
      Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
    </div>
    <a href="advanced_table.html#" class="go-top">
      <i class="fa fa-angle-up"></i>
      </a>
  </div>
</footer>
<!--footer end-->
</section>
<!-- js placed at the end of the document so the pages load faster -->
<script src="<?= base_url()?>file/lib/jquery/jquery.min.js"></script>
<script type="text/javascript" language="javascript" src="<?= base_url()?>file/lib/advanced-datatable/js/jquery.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="<?= base_url()?>file/lib/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?= base_url()?>file/lib/jquery.scrollTo.min.js"></script>
<script src="<?= base_url()?>file/lib/jquery.nicescroll.js" type="text/javascript"></script>
<script type="text/javascript" language="javascript" src="<?= base_url()?>file/lib/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?= base_url()?>file/lib/advanced-datatable/js/DT_bootstrap.js"></script>
<!--common script for all pages-->
<script src="<?= base_url()?>file/lib/common-scripts.js"></script>
<!--script for this page-->
<script type="text/javascript">
/* Formating function for row details */
function fnFormatDetails(oTable, nTr) {
  var aData = oTable.fnGetData(nTr);
  var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
  sOut += '<tr><td>Rendering engine:</td><td>' + aData[1] + ' ' + aData[4] + '</td></tr>';
  sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
  sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
  sOut += '</table>';

  return sOut;
}

$(document).ready(function() {
  /*
   * Insert a 'details' column to the table
   */
  var nCloneTh = document.createElement('th');
  var nCloneTd = document.createElement('td');
  nCloneTd.innerHTML = '<img src="lib/advanced-datatable/images/details_open.png">';
  nCloneTd.className = "center";

  $('#hidden-table-info thead tr').each(function() {
    this.insertBefore(nCloneTh, this.childNodes[0]);
  });

  $('#hidden-table-info tbody tr').each(function() {
    this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
  });

  /*
   * Initialse DataTables, with no sorting on the 'details' column
   */
  var oTable = $('#hidden-table-info').dataTable({
    "aoColumnDefs": [{
      "bSortable": false,
      "aTargets": [0]
    }],
    "aaSorting": [
      [1, 'asc']
    ]
  });

  /* Add event listener for opening and closing details
   * Note that the indicator for showing which row is open is not controlled by DataTables,
   * rather it is done here
   */
  $('#hidden-table-info tbody td img').live('click', function() {
    var nTr = $(this).parents('tr')[0];
    if (oTable.fnIsOpen(nTr)) {
      /* This row is already open - close it */
      this.src = "lib/advanced-datatable/media/images/details_open.png";
      oTable.fnClose(nTr);
    } else {
      /* Open this row */
      this.src = "lib/advanced-datatable/images/details_close.png";
      oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
    }
  });
});
</script>
</body>

</html>
