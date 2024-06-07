<?php
include 'connect.php';
if(isset($_GET['deletebyid'])){
    $id=$_GET['deletebyid'];
    $sql="delete from `employees` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo "deleted";
        header('location:index.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>