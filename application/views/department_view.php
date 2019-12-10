
	<!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> List Of Department</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
              <h4><i class="fa fa-angle-right"></i><?php echo anchor('department/add_department/',"<button>Add department</button>");?></h4>
            <hr>
            <thead>
              <tr>

              
              <th><h4> <i></i>   DepartmentId</h4></th>
                <th><h4><i></i> Department Mame </h4></th>
                <th><h4><i></i> Description<h4></th>
                <th><h4><i></i>  number of employees<h4></th>

                <th><i class=" fa fa-trash-o"></i> Status</th>
                <th><i class=" fa fa-edit"></i> Status</th>

                
                
              </tr>
            </thead>
           
              </div>
      <!-- /col-md-12 -->
    </div>
    <!-- /row -->
  </section>
</section>
<!-- /MAIN CONTENT -->
<!--main content end-->
          <?php
                foreach ($departments as $raw){ ?>
                    <tr>
        <td><?php echo "<h4>".$raw->id."</h4>"?></td>
        <td><?php echo "<h4>".$raw->departmentName."</h4>"?></td>
        <td><?php echo "<h4>".$raw->departmentDescriptio."</h4>"?></td>
        <td><?php echo "<h4>".$raw->numberOfEmployees."</h4>"?></td>
        <!--echo "<p>".substr(strip_tags($raw->body), 0,50)."..."."</p>";
        //echo anchor('department/details/'.$raw->id,"<button> show more</button> ");-->
       <?php echo "<td>".anchor('department/update_department/'.$raw->id,"<button class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></button>")."</td>";?>
       <?php echo "<td>".anchor('department/delete/'.$raw->id,"<button class='btn btn-danger btn-xs'><i class='fa fa-trash-o '></i></button>")."</td>";?>
          </tr>
      
              <?php }  ?>
                
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
