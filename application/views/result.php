<!--main content start-->
<head>
<meta dir="rtl">
</head>
<section id="main-content">
      <section class="wrapper">
        <h3 style="position:relative; left:65%;"><i></i> (CHC+DH) شت خلاصه راپورهای مراکز صحی   </h3>
        <div class="row">
          
          <div class="col-md-12 mt">
            <div class="content-panel">
              <table class="table table-hover" style="text-align:center; dir:rtl;">
                <h4 style="position:relative; left:12%;"><i"></i>  :تاریخ </h4>
                <h4 style="position:relative; left:88%;"><i class=""></i>  :نام مرکز صحی</h4>

                <hr>
                <thead style="text-align:center;">
                  <tr>
                    <th rowspan="3" style="text-align:center;">شماره</th>
                    <th rowspan="3" style="text-align:center;"> تفصیلات</th>
                    <th colspan="4" style="text-align:center;">واقعات جدید </th>
                    <th rowspan="3" style="text-align:center;">مجموعه مراجعین جدید </th>
                    <th rowspan="3" style="text-align:center;"> مراجعه دوباره </th>
                    <th rowspan="3" style="text-align:center;"> رجعت گرفته شده </th>
                    <th rowspan="3" style="text-align:center;"> رجعت داده شده </th>
                </tr>
                <tr>
                    <th colspan="2">کمتر از 5 سال</th>
                    
                    <th colspan="2">بیشتر یا مساوی از 5 سال</th>
                </tr>
                <tr>
                    <th> ذکور </th>
                    <th> اناث </th>
                    <th> ذکور </th>
                    <th> اناث </th>
                </tr>
                <thead>
                <tbody style="text-align:center;">
                <tr>
                <td>1</td>
                <td>OPD تالی شیت</td>
                <td>
                <?php
                $con=mysqli_connect("localhost","root","","system");
    mysqli_set_charset($con,"utf8");
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql="SELECT * FROM patient where typeOfEvent='new' and gender='male' and age<'5'";
    if ($result=mysqli_query($con,$sql))
    {
    // Return the number of rows in result set
    $rowcount=mysqli_num_rows($result);
    echo "<div class='count'><h4>".$rowcount."</h4></div>";
    // Free result set
    mysqli_free_result($result);
    }
    mysqli_close($con);
    ?>
                </td>
                

                <td>
                <?php
                $con=mysqli_connect("localhost","root","","system");
    mysqli_set_charset($con,"utf8");
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql="SELECT * FROM patient where typeOfEvent='new' and gender='female' and age<'5'";
    if ($result=mysqli_query($con,$sql))
    {
    // Return the number of rows in result set
    $rowcount=mysqli_num_rows($result);
    echo "<div class='count'><h4>".$rowcount."</h4></div>";
    // Free result set
    mysqli_free_result($result);
    }
    mysqli_close($con);
    ?>
                </td>
                <td>
                <?php
                $con=mysqli_connect("localhost","root","","system");
    mysqli_set_charset($con,"utf8");
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql="SELECT * FROM patient where typeOfEvent='new' and gender='male' and age>='5'";
    if ($result=mysqli_query($con,$sql))
    {
    // Return the number of rows in result set
    $rowcount=mysqli_num_rows($result);
    echo "<div class='count'><h4>".$rowcount."</h4></div>";
    // Free result set
    mysqli_free_result($result);
    }
    mysqli_close($con);
    ?>
                </td>

                <td>
                <?php
                $con=mysqli_connect("localhost","root","","system");
    mysqli_set_charset($con,"utf8");
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql="SELECT * FROM patient where typeOfEvent='new' and gender='female' and age>='5'";
    if ($result=mysqli_query($con,$sql))
    {
    // Return the number of rows in result set
    $rowcount=mysqli_num_rows($result);
    echo "<div class='count'><h4>".$rowcount."</h4></div>";
    // Free result set
    mysqli_free_result($result);
    }
    mysqli_close($con);
    ?>
                </td>

                <td>
                <?php
                $con=mysqli_connect("localhost","root","","system");
    mysqli_set_charset($con,"utf8");
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql="SELECT * FROM patient where typeOfEvent='new'";
    if ($result=mysqli_query($con,$sql))
    {
    // Return the number of rows in result set
    $rowcount=mysqli_num_rows($result);
    echo "<div class='count'><h4>".$rowcount."</h4></div>";
    // Free result set
    mysqli_free_result($result);
    }
    mysqli_close($con);
    ?>
                </td>

                <td>
                <?php
                $con=mysqli_connect("localhost","root","","system");
    mysqli_set_charset($con,"utf8");
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql="SELECT * FROM patient where typeOfEvent='old' ";
    if ($result=mysqli_query($con,$sql))
    {
    // Return the number of rows in result set
    $rowcount=mysqli_num_rows($result);
    echo "<div class='count'><h4>".$rowcount."</h4></div>";
    // Free result set
    mysqli_free_result($result);
    }
    mysqli_close($con);
    ?>
                </td>

                <td>
                <?php
                $con=mysqli_connect("localhost","root","","system");
    mysqli_set_charset($con,"utf8");
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql="SELECT * FROM patient where takenthrowback!='null' ";
    if ($result=mysqli_query($con,$sql))
    {
    // Return the number of rows in result set
    $rowcount=mysqli_num_rows($result);
    echo "<div class='count'><h4>".$rowcount."</h4></div>";
    // Free result set
    mysqli_free_result($result);
    }
    mysqli_close($con);
    ?>
                </td>

                <td>
                <?php
                $con=mysqli_connect("localhost","root","","system");
    mysqli_set_charset($con,"utf8");
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql="SELECT * FROM patient where giventhrowback!='NULL' ";
    if ($result=mysqli_query($con,$sql))
    {
    // Return the number of rows in result set
    $rowcount=mysqli_num_rows($result);
    echo "<div class='count'><h4>".$rowcount."</h4></div>";
    // Free result set
    mysqli_free_result($result);
    }
    mysqli_close($con);
    ?>
                </td>

                
                </tr>





                  
                </tbody>
               
              </table>
            </div>
          </div>
          <!-- /col-md-12 -->
     
        <!-- row -->
        
            <!-- /content-panel -->
          