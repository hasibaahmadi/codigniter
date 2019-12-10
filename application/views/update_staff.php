<!DOCTYPE html>
<html>
    <head>
        <title>New staff</title>
        <style>
    table{
        position:relative;
        left:300px;
        width:70%;
        background-color: #b3b3b3;
        color:black;
       
    }
    table, th,td{
        height:100%;

    }
    th, td{
        font-size:20px;
        margin:15px;
        padding-left:15px;
    }
</style>
    </head>
    <body>
        <?php
            echo form_open('staff/update/'.$staff["staffID"])?>
        
        <table>
        <tr>
            <td> ID</td>
            <td><input type="number" name="staffID" min="1" max="100" step="1"value="<?=$staff['staffID']?>"></td>
        </tr>
        <tr>
            <td>نام</td>
            <td><input type="text" name="firstName"value="<?=$staff['firstName']?>"></td>
        </tr>
        <tr>
            <td>تخلص</td>
            <td><input type="text" name="lastName"value="<?=$staff['lastName']?>"></td>
        </tr>
        <tr>
            <td>تایم کاری</td>
            <td><input type="number" name="workingTime" min="1" max="12" step="1"value="<?=$staff['workingTime']?>"></td>
        </tr>
        <tr>
            <td>نمبردیپارتمنت</td>
            <td><input type="number" name="departmentId" min="1" max="100" step="1" value="<?=$staff['departmentId']?>"></td>
        </tr>
        <tr>
            <td>ادرس</td>
            <td><input type="text" name="address" value="<?=$staff['address']?>"></td>
        </tr>
        
        <tr>
            <td>وظیفه</td>
            <td><input type="text" name="staffJob"value="<?=$staff['staffJob']?>"></td>
        </tr>
        <tr>
            <td>معاش</td>
            <td><input type="number" name="salary" min="100" max="100000" step="1ooo"value="<?=$staff['salary']?>"></td>
        </tr>
        <tr>
            <td>سن</td>
            <td><input type="number" name="age" min="0" max="100" step="1"value="<?=$staff['age']?>"></td>
        </tr>
        <tr>
            <td>جنسیت</td>
            <td><input type="radio" name="gendeer" value="<?=$staff['gendeer']?>" checked> Male</td>
        <td><input type="radio" name="gendeer" value="<?=$staff['gendeer']?>"> Female</td>
        </tr>

        <tr>
        <td>photo</td>

        <td>
        <div class="row mt">
          <div class="col-lg-12">
            <!-- The file upload form used as target for the file upload widget -->
            <form id="fileupload" action="http://jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
              <!-- Redirect browsers with JavaScript disabled to the origin page -->
             <!-- <noscript>
                  <input type="hidden" name="redirect" value="http://blueimp.github.io/jQuery-File-Upload/">
                </noscript>-->
              <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
              <div class="row fileupload-buttonbar">
                <div class="col-lg-8">
                  <!-- The fileinput-button span is used to style the file input field as button -->
                  <span class="btn btn-success fileinput-button">
                    <!--<i class="glyphicon glyphicon-plus"></i>
                    <span>Add files...</span>-->
                  <input type="file" name="files[]" multiple>
                  </span>
                 <!-- <button type="submit" class="btn btn-theme start">
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start upload</span>
                    </button>-->
                  <button type="reset" class="btn btn-theme02 cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel upload</span>
                    </button>
                  <!--<button type="button" class="btn btn-theme04 delete">
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                    </button>-->
                 
                </div>
                <!-- /col-lg-7 -->
                <!-- The global progress state -->
                <div class="col-lg-4 fileupload-progress fade">
                  <!-- The global progress bar -->
                  <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-success" style="width:0%;">
                    </div>
                  </div>
                  <!-- The extended global progress state -->
                  <div class="progress-extended">
                    &nbsp;
                  </div>
                </div>
                <!-- /col-lg-5 -->
              </div>
              <!-- /row -->
              <!-- The table listing the files available for upload/download -->
              <table role="presentation" class="table table-striped">
                <tbody class="files">
                </tbody>
              </table>
            </form>
            </td>
        </tr>



        <tr>
        <td>
            </td>
        <td>
            <input type="submit" name="submit" value="Add staff" />
        </td>
        </tr>
    </table>
</body>
</html>