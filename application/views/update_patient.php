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

    <?php echo form_open('patient/update/'.$patient["id"]);?>
    <table>
        <tr>
            <td>Date</td>
            <td><input type="date" value="<?=$patient['date']?>"name="date" /></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" value="<?=$patient['name']?>" name="name" /></td>
        </tr>
        <tr>
            <td>FatherName</td>
            <td><input type="text" value="<?=$patient['fhaterName']?>" name="fhaterName" /></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" value="<?=$patient['address']?>" name="address" /></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><input type="radio" value="<?=$patient['gender']?>" name="gender" value="male" checked> Male
        
        <input type="radio" value="<?=$patient['gender']?>" name="gender" value="female"> Female</td>
        </tr>
        <tr>
            <td>Age</td>
            <td><input type="number" value="<?=$patient['age']?>" name="age" min="0" max="100" step="1" value="20"></td>
        </tr>
        <tr>
            <td>TypeOfEvent</td>
            <td><input type="radio" value="<?=$patient['typeOfEvent']?>" name="typeOfEvent" value="new" checked> New
        
            <input type="radio" value="<?=$patient['typeOfEvent']?>" name="typeOfEvent" value="Old"> Old</td>
        </tr>
        <tr>
            <td>TakenTrowback</td>
            <td><input type="text" value="<?=$patient['takenthrowback']?>" name="takenthrowback" /></td>
        </tr>
        <tr>
            <td>GivenTroeback</td>
            <td><input type="text" value="<?=$patient['giventhrowback']?>" name="giventhrowback" /></td>
        </tr>
        <tr>
            <td>Estate</td>
            <td><input type="text" value="<?=$patient['estate']?>" name="estate" /></td>
        </tr>
        <tr>
            <td>DetectionID</td>
            <td><input type="number" value="<?=$patient['detectionID']?>" name="detectionID" min="1" max="100" step="1" value="1"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="update Patient"></td>
        </tr>
    </table>
    </body>
    </html>

        
            
