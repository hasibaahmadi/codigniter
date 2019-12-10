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
            echo form_open('addmision/update/'.$addmision["id"])?>
        
        <table>
        <tr>
            <td> ID</td>
            <td><input type="number" name="id" min="1" max="500" step="1"value="<?=$addmision['id']?>"></td>
        </tr>
        <tr>
            <td>date</td>
            <td><input type="date" name="date"value="<?=$addmision['date']?>"></td>
        </tr>
        <tr>
            <td>time</td>
            <td><input type="time" name="lastName"value="<?=$addmision['time']?>"></td>
        </tr>
        <tr>
            <td> patientId</td>
            <td><input type="number" name="patientId" min="1" max="12" step="1"value="<?=$addmision['patientId']?>"></td>
        </tr>
        <tr>
            <td>staffId</td>
            <td><input type="number" name="staffId" min="1" max="100" step="1" value="<?=$addmision['staffId']?>"></td>
        </tr>
        <tr>
            <td>wardId</td>
            <td><input type="number" name="wardID" min="1" max="100" value="<?=$addmision['wardID']?>"></td>
        </tr>
        <tr>
            <td>bedId</td>
            <td><input type="number" name="bedID" min="1" max="100" step="1"value="<?=$addmision['bedID']?>"></td>
        </tr>
    
        <tr>
        <td>
            </td>
        <td>
            <input type="submit" name="submit" value="Add addmision" />
        </td>
        </tr>
    </table>
</body>
</html>