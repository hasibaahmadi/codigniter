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
            echo form_open('addmision/add')?>
        
        <table>
        <tr>
            <td>Id</td>
            <td><input type="number" name="id" min="1" max="100"></td>
        </tr>
        <tr>
            <td>Date</td>
            <td><input type="date" name="date"></td>
        </tr>
        <tr>
            <td> Time</td>
            <td><input type="time" name="time"></td>
        </tr>
        <tr>
            <td>patient Id</td>
            <td><input type="number" name="patientId" min="1" max="100" step="1"></td>
        </tr>
        <tr>
            <td>staff Id</td>
            <td><input type="number" name="staffId" min="1" max="100"></td>
        </tr>
        
        <tr>
            <td>ward Id</td>
            <td><input type="number" name="wardID" min="1" max="10"></td>
        </tr>
        <tr>
            <td>bed Id</td>
            <td><input type="number" name="bedID" min="1" max="50" stop="1"></td>
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






        