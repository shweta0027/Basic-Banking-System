<?php
session_start();
$con=mysqli_connect('localhost','root','','basic_banking_system');
$name1=$_SESSION['name'];
$q="select amount from customer where name='$name1'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$var=$row['amount'];
$from=$_SESSION['name'];
$to=$_POST['receiver'];
$q1="select amount from customer where name='$to'";
$result1=mysqli_query($con,$q1);
$row=mysqli_fetch_array($result1);
$var1=$row['amount'];
session_destroy();
if ( $var >= $_POST["transfer"] )
{
    $sub=$var-$_POST["transfer"];
    $q="update customer set amount='$sub' where name='$from' ";
    $result=mysqli_query($con,$q);
    $sum=$var1+$_POST["transfer"];
    $q="update customer set amount='$sum' where name='$to' ";
    $result=mysqli_query($con,$q);
	$c=$_POST["transfer"];
	$q="insert into transaction(sender,receiver,amount)
		values('$from','$to',$c)";
	$result=mysqli_query($con,$q);
    include 'customer_details.php';
    $message="Successful transfer";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
   
    
}
else
{
	include 'customer_details.php';
    $message="Insufficient amount";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
}
?>