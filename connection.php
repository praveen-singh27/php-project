<?php
error_reporting(0);
$servername='localhost:3307';
$username='root';
$password='';
$dbname='myform';
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn){
    echo"connection ok!";

}
else{
    echo"connection failed!".mysqli_connect_error();
}
?>