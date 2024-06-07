<?php
include 'connect.php';
if(isset($_POST['Create'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $designation=$_POST['designation'];
    $company=$_POST['company'];
    $experience=$_POST['experience'];

    $sql="insert into `employees` (id,name,email,phone,address,designation,company,experience)values('$id','$name','$email','$phone','$address','$designation','$company','$experience')";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo"inserted";
         //header('location:index.php');
    }
    else{
        die(mysqli_error($conn));
    }
    if(isset($_POST['Create'])){
        $employee_id=$_POST['employee_id'];
        $company=$_POST['company'];
        $start_date=$_POST['start_date'];
        $end_date=$_POST['end_date'];
        $designation=$_POST['designation'];
        $experience=$_POST['experience'];
    
        $sql="insert into `experiences` (employee_id,Company,Start_date,End_date,Designation,Experience) values('$emp_id','$company','$start_date','$end_date','$designation','$experience')";
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
        <label>Employe ID</label><br>
        <input class=id name="id" type="text" placeholder="Enter your empid"><br>
    </div>
    <div class=empname>
        <label>Name</label><br>
        <input class=Name name="name"type="text" placeholder="Enter your name"><br>
    </div>
    <div class=emp>
        <label>Email</label><br>
        <input class=email name="email" type="text" placeholder="Enter your email"><br>
    </div>
    <div class=empphone>
        <label>Phone</label><br>
        <input class=Phone name="phone" type="text" placeholder="Enter your Phone"><br>
    </div>
    <div class=empaddress>
        <label>Address</label><br>
        <input class=Address name="address" type="text" placeholder="Enter your Address"><br>
    </div>
    <div class=empDesignation>
        <label>Designation</label><br>
        <input class=Designation name="designation" type="text" placeholder="Enter your Designation"><br>
    </div>
    <div class=Company>
        <label>Company</label><br>
        <input class=name name="company" type="text" placeholder="Enter your name"><br>
    </div>
    <div class=sd>
        <input class=start name="start_date" type="text" placeholder="Enter your Start_date">
    </div>
    <div class=ed>
        <input class=end name="end_date" type="text" placeholder="Enter your End_date">
    </div>
    <div class=Expereience>
        <label>Total Expereience</label><br>
        <input class=exp name="experience" type="text" placeholder="Enter your experiences"><br>
    </div>
    <button type="submit" name="Create">submit</button>
    </form>
</body>
</html>