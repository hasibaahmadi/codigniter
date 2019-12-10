













<!--main content start-->
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> List Of wards</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
              <h4><i class="fa fa-angle-right"></i><?php echo anchor('addmision/add_addmision/',"<button>Add staff</button>");?></h4>
            <hr>
            <thead>
              <tr>

              
              <th><h4> <i></i>   Id</h4></th>
                <th><h4><i></i>  date   </h4></th>
                <th><h4><i></i> time  <h4></th>
                <th><h4><i></i>  patientId    <h4></th>
                <th><h4><i></i>  staffId    <h4></th>
                <th><h4><i></i>  wardID    <h4></th>
                <th><h4><i></i>  bedID    <h4></th>
              
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
                foreach ($addmision as $raw){ ?>
                    <tr>
        <td><?php echo "<h4>".$raw->id."</h4>"?></td>
        <td><?php echo "<h4>".$raw->date."</h4>"?></td>
        <td><?php echo "<h4>".$raw->time."</h4>"?></td>
        <td><?php echo "<h4>".$raw->patientId."</h4>"?></td>
        <td><?php echo "<h4>".$raw->staffId."</h4>"?></td>
        <td><?php echo "<h4>".$raw->wardID."</h4>"?></td>
        <td><?php echo "<h4>".$raw->bedID."</h4>"?></td>


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































