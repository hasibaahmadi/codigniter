<!DUCTYPE html>
<html>
    <head>
        <title>New staff</title>
        <style>
    table{
        position:relative;
        left:400px;
        top:150px;
        width:50%;
        background-color: #b3b3;
        color:black;
       
    }
    table{
        height:50%;

    }
    th, td{
        font-size:20px;
        margin:15px;
        padding-left:15px;
    }
</style>
    </head>
    <body>





<?php echo form_open_multipart('user/add');?>
<table>
<tr>
<td><label for="name">Name:* </label></td>
<!-- set_value is for if the error ocured the filled input remain-->
<td><input type="text" id="name" name="name" size="30" value="<?php
echo set_value('name'); ?>" /></td>
<!-- show the error if form error exist-->
<td><?php echo form_error('name'); ?></td>
</tr>

<tr>
<td><label for="uname">User Name:*</label> </td>
<td><input type="text" id="uname" name="uname"size="30" value="<?php
echo set_value('uname'); ?>" /></td>
<td><?php echo form_error('uname'); ?></td>
</tr>
<tr>
<td><label for="password">Password:* </label> </td>
<td><input type="password" id="password" name="pass"size="30"
value="<?php echo set_value('password'); ?>"/></td>
<td><?php echo form_error('pass'); ?></td>
</tr>
<!--<tr>
<td><label for="email">Email:*</label> </td>
<td><input type="email" id="email" name="email" size="30" value="<?php
//echo set_value('email'); ?>"/></td>
<td><?php //echo form_error('email'); ?></td>
</tr>-->
<tr>
<td><label for="file">Image: *</label> </td>
<!--<td><input type="file" id="file" name="userfile" size="30" /><div>-->

<td>
        <div class="row mt">
          <div class="col-lg-12">
            <!-- The file upload form used as target for the file upload widget -->
            <form id="" action="<?= base_url('index.php/user/add_user')?>" method="POST" enctype="multipart/form-data">
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
                  <input type="file" name="photo" multiple>
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



 <?
php if (isset($error) ) { echo $error;}?><!--</div></td>
</tr>-->
<tr>
<td></td>
<td>
<input type="submit" name="submit" value="Save Changes" />
</td></tr>
</table>


</body>
</html>
