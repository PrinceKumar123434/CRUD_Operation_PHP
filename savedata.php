<?php
 $stu_name= $_POST['name'];
 $stu_address= $_POST['address'];
 $stu_class= $_POST['class'];
 $stu_phone= $_POST['phone'];

include 'config.php'; 
$sql = "insert into student(name, address, class, phone) values('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
$result= mysqli_query($conn,$sql) or die("Query Unsuccessful.");
header("location:http://localhost/learn/php_crud/index.php");
mysqli_close($$conn);
?>