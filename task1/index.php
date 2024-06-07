<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <a href="style.css"></a>
</head>
<body>
    <div>
        <a class=button href="/php basics/task1/create.php"role="button">Create</a>
    </div>
    <style>
        table,th,td{
            border: 2px solid;
        }        
    </style>
    <table style="width:100%">
        <thead>
            <tr>
            <th>Employee_Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Designation</th>
            <th>Company</th>
            <th>Total Experiences</th>
            <th>Action</th>
            </tr>
            
        </thead>
        <tbody>
            <?php
            $sql="select * from `employees`";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $name=$row['name'];
                $email=$row['email'];
                $phone=$row['phone'];
                $address=$row['address'];
                $designation=$row['designation'];
                $company=$row['company'];
                $experience=$row['experience'];

                echo '<tr>
                <td>'.$id.'</td>
                <td>'.$name.'</td>
                <td>'.$email.'</td>
                <td>'.$phone.'</td>
                <td>'.$address.'</td>
                <td>'.$designation.'</td>
                <td>'.$company.'</td>
                <td>'.$experience.'</td>
                <td><button ><a href="update.php?updatebyid='.$id.'">Update</a></button>
                <button ><a href="delete.php?deletebyid='.$id.'" >Delete</a></button></td>
                </tr>';
            }
            ?>
        </tbody>
    </table>
    <br>
    <br>
    
    </table>
</body>
</html>