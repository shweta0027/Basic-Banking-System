<?php
session_start();
$con=mysqli_connect('localhost','root','','basic_banking_system');
$name1=$_SESSION['name'];
$q="select name from customer where not name='$name1'";
$result=mysqli_query($con,$q);
?>


<html>
<head>
   <title>Transfer</title>

    <link rel="stylesheet" href="css/header.css">
	
  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
	
		
	<style>
body{
	background-image: url("images/31.jpg");
	text-align: center;
}

	



</style>
</head>
<body>


  <div class="topnav">
 <a href="#contact">ABOUT US</a>
  <a href="transaction_history.php">TRANSACTION HISTORY</a>
  
 <a href="index.php"><i class="fa fa-home"></i>HOME</a>
</div>

	<center>
		<div class="view">
			<br><br><h2 style=" font-size:45px;color:red;text-shadow: 2px 2px white;">Transfer Amount</h2>
			<form action="checkcredit.php" method="post" >
				<div class="border">
				<table>
					<tr>
						<td style="font-size:15pt;color:#fff;">
						<label for="sender" align="left">RECEIVER'S NAME:</label>
							&nbsp; <select name="receiver" style="font-size: 12pt; height: 28px; width:290px;">
           <?php while($row = $result->fetch_assoc()) { ?>
			<option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option>
			<?php } ?>
			</td>
		</tr><br>
		<tr>
			<td>
			<br><label for="transfer" style="font-size:15pt;color:#fff;" > AMOUNT:</label> 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<input type="number" name="transfer" style="font-size: 12pt; height: 28px; width:290px;" min="0" required></td>
		</tr>
       <tr>
			<td >
				<div class="button">
				<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
				<button  type="submit" value="Credit" style="background-color:blue;color:#fff; font-size:18px;height:40px; width:100px;">Transfer</button>
				</div>
		   </td>
        </tr>
       </table>
	   </div>
      </form>
    </div><br>

</center>
</body>
</html>
