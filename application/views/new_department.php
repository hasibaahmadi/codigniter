<!DUCTYPE html>
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

    <?php echo form_open('department/add')?>
    <table>
        <tr>
            <td>departmentName</td>
            <td><input type="text" name="departmentName" /></td>
        </tr>
        <tr>
            <td>departmentDescription</td>
            <td><input type="text" name="departmentDescriptio" /></td>
        </tr>
        <tr>
            <td>numberOfEmployees</td>
            <td><input type="number" name="numberOfEmployees" min="1" max="50" step="1" /></td>
        </tr>

        <tr>
            <td>
            </td>
        <td>
            <input type="submit" name="submit" value="Add department" />
        </td>
        </tr>
       
    </table>
    </body>
    </html>