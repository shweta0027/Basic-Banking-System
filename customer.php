<?php 
session_start();
$con=mysqli_connect('localhost','root','','basic_banking_system');
$name=$_POST['name'];
$q="select * from customer where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$mail=$row['email'];
$amount=$row['amount'];
$_SESSION['name']=$name;

?>
<html>
<head>
	<title><?php echo $name?></title>
	<link rel="stylesheet" href="css/button.css">
	<link rel="stylesheet" href="css/customer.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
		
	<style>
body{
	background-image: url("images/14.jpg");
}
</style>
	
	
</head>
    <body>
	
	
  <div class="topnav">
 <a href="#contact">ABOUT US</a>
  <a href="transaction_history.php">TRANSACTION HISTORY</a>
  
 <a href="index.php"><i class="fa fa-home"></i>HOME</a>
</div>
	
	<br><br><br>
    <div class="view">
       <table  background="images/26.jpg" >
			<tr bgcolor="blue">
				<th>Name</th>
				<th>Email</th>
				<th>Balance</th>
				
			</tr>
			
			<tr>
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<td><?php echo $name?></td>
				<td><?php echo $mail?></td>
				<td><?php echo $amount?></td>
			</tr>

        </table>

        </div>
		<br>
        <br>
     <div class="buttons">
	<a href="money_transfer.php">
		<button class="btn">Transfer To</button>
	</a>
	</div>
	<br>
	<br>


       


    </body>
</html>