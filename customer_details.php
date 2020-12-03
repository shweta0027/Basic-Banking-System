<?php 
session_start();
$con=mysqli_connect('localhost','root','','basic_banking_system');

$q="select * from customer ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
//echo $_SESSION['name'];

?>
<html>
<head>
   <title>CUSTOMER DETAILS</title>
   <link rel="stylesheet" href="css/getdetail.css">
  
    <link rel="stylesheet" href="css/header.css" >
	
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>
body{
	background-image: url("images/25.png");
}
</style>
   
</head>


<body >


  <div class="topnav">
 <a href="#contact">Contact</a>
  <a href="transaction_history.php">Transaction History</a>
  
 <a href="index.php"> <i class="fa fa-home"></i>Home</a>
</div>

	<h1 style="color:red;text-shadow: 2px 2px white;">CUSTOMER DETAILS</h1>
    <table background="images/26.jpg">


		<thead bgcolor="blue">
			<th>Sr No.</th>
			<th>Name</th>
			<th>Email</th>
			<th>Balance</th>
				<th>View</th>
			
		</thead>
		
		
		<tbody>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 1</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="customer.php" method="post"  class="view">
					<button class="button1" type="submit" name="name" value="Shweta">View</button>
				
				</form>
			</td>
		</tr>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 2</td>
			<td ><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="customer.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Siya">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 3</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="customer.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Rohan">View</button>
				</form>
			</td>
		</tr>
     <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 4</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="customer.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Shrey">View</button>
				</form>
			</td>
   

        </tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 5</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="customer.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Riya">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 6</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="customer.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Myron">View</button>
				</form>
			</td>
        </tr>
        <tr>
			<?php  
     
				$row=mysqli_fetch_array($result);
			?>
			<td> 7</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="customer.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Shreya">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php   
				$row=mysqli_fetch_array($result);
			?>
			<td> 8</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="customer.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Raj">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 9</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="customer.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Anisha">View</button>
				</form>
			</td>
        </tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 10</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="customer.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Asif">View</button>
				</form>
			</td>
		</tr> 
		</tbody>
	</table><br><br>

</body>
</html>
