<!DUCTYPE html>
<html>
<head>
    <title> New Patient</title>

<style>
    /*table,tr,td{
        border:1px solid black;

    }*/
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

    <?php echo form_open('patient/add')?>
    <table>
        <tr>
            <td>Date</td>
            <td><input type="date" name="date" /></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" /></td>
        </tr>
        <tr>
            <td>FatherName</td>
            <td><input type="text" name="fhaterName" /></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address" /></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><input type="radio" name="gender" value="male" checked> Male
        
        <input type="radio" name="gender" value="female"> Female</td>
        </tr>
        <tr>
            <td>Age</td>
            <td><input type="number" name="age" min="0" max="100" step="1"></td>
        </tr>
        <tr>
            <td>TypeOfEvent</td>
            <td><input type="radio" name="TypeOfEvent" value="new" checked> جدید
        
            <input type="radio" name="TypeOfEvent" value="Old"> قبلی</td>
        </tr>
        <tr>
            <td>TakenTrowback</td>
            <td><input type="text" name="takentrowback" /></td>
        </tr>
        <tr>
            <td>GivenTroeback</td>
            <td><input type="text" name="giventrowback" /></td>
        </tr>
        <tr>
            <td>Estate</td>
            <td><input type="text" name="Estate" /></td>
        </tr>
        <tr>
            <td>DetectionID</td>
            <td><input type="number" name="detectionID" min="1" max="100" step="1" value="1"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Add Patient"></td>
        </tr>
    </table>
    </body>
    </html>

        
            

