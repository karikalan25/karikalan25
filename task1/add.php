<?php
include 'connect.php';
if(isset($_POST['Create'])){
    $Emp_id=$_POST['Emp_id'];
    $Company=$_POST['Company'];
    $Start_date=$_POST['Start_date'];
    $End_date=$_POST['End_date'];
    $Designation=$_POST['Designation'];
    $Experience=$_POST['Experience'];

    $sql="insert into `experiences` (Emp_id,Company,Start_date,End_date,Designation,Experience) values('$Emp_id','$Company','$Start_date','$End_date','$Designation','$Experience')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo 'inserted';
        
        //header('location:index.php');
        }
        else{
            die(mysqli_error($conn));
        }
    }else{
        die(mysqli_error($conn));
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='POST'>
    <div class=empID>
        <input class=id name="Emp_id" type="text" placeholder="Enter your empid">
    </div>
    <div class=Company>
        <input class=comp name="Company" type="text" placeholder="Enter your Company">
    </div>
    <div class=sd>
        <input class=start name="Start_date" type="text" placeholder="Enter your Start_date">
    </div>
    <div class=ed>
        <input class=end name="End_date" type="text" placeholder="Enter your End_date">
    </div>
    <div class=empDesignation>
        <input class=Designation name="Designation" type="text" placeholder="Enter your Designation">
    </div>
    <div class=empExperiences>
        <input class=Experience name="Experience" type="text" placeholder="Enter your Experiences">
    </div>
    </div>
    <button type="submit" name="Add">submit</button>
    </form>
    </form>
    
</body>
</html>