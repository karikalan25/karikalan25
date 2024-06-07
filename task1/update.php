<?php
include 'connect.php';
$id=$_GET['updatebyid'];
$sql="select * from `employees` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$phone=$row['phone'];
$address=$row['address'];
$designation=$row['designation'];
$company=$row['company'];
$experience=$row['experience'];

if(isset($_POST['Create'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $designation=$_POST['designation'];
    $company=$_POST['company'];
    $experience=$_POST['experience'];

    $sql="update `employees` set emp_id=$id,name='$name',email='$email',phone='$phone',address='$address',designation='$designation',company='$company',experience='$experience'where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo "updated";
        header('location:index.php');
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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method='POST' class="input">
    <div class=empID>
        <label>Employe ID</label><br>
        <input class=id name="id" type="text" placeholder="Enter your empid" value="<?php echo $Emp_id?>"><br>
    </div>
    <div class=empname>
        <label>Name</label><br>
        <input class=Name name="name"type="text" placeholder="Enter your name" value="<?php echo $Name;?>"><br>
    </div>
    <div class=emp>
        <label>Email</label><br>
        <input class=email name="email" type="text" placeholder="Enter your email"  value="<?php echo $Email;?>"><br>
    </div>
    <div class=empphone>
        <label>Phone</label><br>
        <input class=Phone name="phone" type="text" placeholder="Enter your Phone"  value="<?php echo $Phone;?>"><br>
    </div>
    <div class=empaddress>
        <label>Address</label><br>
        <input class=Address name="address" type="text" placeholder="Enter your Address"  value="<?php echo $Address;?>"><br>
    </div>
    <div class=empDesignation>
        <label>Designation</label><br>
        <input class=Designation name="designation" type="text" placeholder="Enter your Designation"  value="<?php echo $Designation;?>"><br>
    </div>
    <div class=Company>
        <label>Company</label><br>
        <input class=name name="company" type="text" placeholder="Enter your name" value="<?php echo $Company;?>"><br>
    </div>
    <div class=Expereience>
        <label>Total Expereience</label><br>
        <input class=exp name="experience" type="text" placeholder="Enter your experiences" value="<?php echo $Total_experiences;?>"><br>
    </div><br>
    <button type="submit" name="Create">submit</button>
    </form>
</body>
</html>