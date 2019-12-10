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
            echo form_open('diagnosis/update/'.$diagnosis["id"])?>
        
        <table>
        <tr>
            <td>نمبر</td>
            <td><input type="number" name="id"value="<?=$diagnosis['id']?>"></td>
        </tr>
        <tr>
            <td>شماره مریض</td>
            <td><input type="number" name="patientId"value="<?=$diagnosis['patientId']?>"" min="1" max="1000" step="1"></td>
        </tr>
        <tr>
            <td> تاریخ</td>
            <td><input type="date" name="date" value="<?=$diagnosis['date']?>"></td>
        </tr>
        <tr>
            <td>معرفی شده توسط</td>
            <td><input type="text" name="uploadBy" value="<?=$diagnosis['uploadBy']?>"></td>
        </tr>
        <tr>
            <td>تشخیض توسط</td>
            <td><input type="text" name="diagnosedby" value="<?=$diagnosis['diagnosedby']?>"></td>
        </tr>
        <tr>
            <td>تاریخچه</td>
            <td><input type="text" name="diagnosesSummary"value="<?=$diagnosis['diagnosesSummary']?>"></td>
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