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
            echo form_open('staff/add')?>
        
        <table>
        <tr>
            <td>نام</td>
            <td><input type="text" name="firstName"></td>
        </tr>
        <tr>
            <td>تخلص</td>
            <td><input type="text" name="lastName"></td>
        </tr>
        <tr>
            <td>تایم کاری</td>
            <td><input type="number" name="workingTime" min="1" max="12" step="1"></td>
        </tr>
        <tr>
            <td>نمبردیپارتمنت</td>
            <td><input type="number" name="departmentId" min="1" max="100" step="1"></td>
        </tr>
        <tr>
            <td>ادرس</td>
            <td><input type="text" name="address"></td>
        </tr>
        
        <tr>
            <td>وظیفه</td>
            <td><input type="text" name="staffJob"></td>
        </tr>
        <tr>
            <td>معاش</td>
            <td><input type="number" name="salary" min="5000" max="5000" step="1"></td>
        </tr>
        <tr>
            <td>سن</td>
            <td><input type="number" name="age" min="0" max="100" step="1"></td>
        </tr>
        <tr>
            <td>جنسیت</td>
            <td><input type="radio" name="gendeer" value="male" checked> Male</td>

            
        <br>
        <td><input type="radio" name="gendeer" value="female"> Female</td>
        </tr>
        <tr>
        
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