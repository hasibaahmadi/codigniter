<!DUCTYPE html>
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
            echo form_open('ward/update/'.$ward['id'])?>
        
        <table>
        <tr>
            <td>نام</td>
            <td><input type="text" name="wardName"value="<?=$ward['wardName']?>"></td>
        </tr>
        <tr>
            <td>تعدادبستر</td>
            <td><input type="text" name="numberOfBed"value="<?=$ward['numberOfBed']?>"></td>
        </tr>
        <tr>
            <td>تعداد کارمندان</td>
            <td><input type="number" name="numberOfStaff" min="1" max="100" step="1"value="<?=$ward['numberOfStaff']?>"></td>
        </tr>
        <tr>
            <td>تعدادمریضها</td>
            <td><input type="number" name="numberOfPatient" min="1" max="100" step="1" value="<?=$ward['numberOfPatient']?>"></td>
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