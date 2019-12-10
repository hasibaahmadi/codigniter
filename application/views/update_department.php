<html>
<head>
    <title> New Patient</title>

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

<?php echo form_open('department/update/'.$department['id']);?>  
<table>
        <tr>
            <td>departmentID</td>
            <td><input type="text" name="id" value="<?php echo $department['id']?>" /></td>
        </tr>
        <tr>
            <td>departmentName</td>
            <td><input type="text" name="departmentName" value="<?php echo $department['departmentName']?>" /></td>
        </tr>
        <tr>
            <td>departmentDescription</td>
            <td><input type="text" value="<?php echo $department['departmentDescriptio']?>" name="departmentDescriptio"></td>
        </tr>
        <tr>
            <td>numberOfEmployees</td>
            <td><input type="number" value="<?php echo $department['numberOfEmployees']?>" name="numberOfEmployees" min="1" max="50" /></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="update department"></td>
        </tr>
       
    </table>
    </body>
    </html>