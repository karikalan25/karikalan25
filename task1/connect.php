<?php
$username='root';
$pass='';
$dbname='employe_db';

if($conn=new mysqli('localhost',$username,$pass,$dbname)){
    //echo "Database is connected";
}else{
    die("Connection failed");
}
?>