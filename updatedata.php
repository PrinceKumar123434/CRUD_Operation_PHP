<?php
$stu_id=$_POST['id'];
 $stu_name= $_POST['name'];
 $stu_address= $_POST['address'];
 $stu_class= $_POST['class'];
 $stu_phone= $_POST['phone'];

$conn = mysqli_connect("localhost","root", "","crudp") or die("Connection Failed");
$sql ="update student set name='{$stu_name}', address='{$stu_address}',class=' {$stu_class}',phone='{$stu_phone}' where id ={$stu_id}";
$result= mysqli_query($conn,$sql) or die("Query Unsuccessful.");
header("location:http://localhost/learn/php_crud/index.php");
mysqli_close($$conn);
?>