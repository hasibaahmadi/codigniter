<!DOCTYPE html>
<html>
    <head>
        <title> New ward</title>
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
    <?php echo form_open('ward/add')?>
    <table>
        <tr>
        <td>Name</td>
        <td>
            <input type=" text" name="wardName" />
        </td>
        </tr>
        <tr>
        <td>number of bed</td>
        <td>
            <input type="number" name="numberOfBed" min="1" max="100" step="1" />
        </td>
        </tr>
        <tr>
        <td>number of staff</td>
        <td>
            <input type="number" name="numberOfStaff" min="1" max="100" step="1" />
        </td>
        </tr>
        <tr>
        <td>number of patient</td>
        <td>
            <input type="number" name="numberOfPatient" min="1" max="100" step="1" />
        </td>
        </tr>
        <tr> 
        <td></td>
        <td>
            <input type="submit" name="submit" value="Add ward" />
        </td>
        </tr>
    </table>
</body>
</html>