<?php

include 'config.php';

?>

<html>
<head>
	<title>Add</title>
</head>
<body>
	<?php 

		if (isset($_POST['submit'])) {
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$address = $_POST['address'];

			$query = "INSERT INTO `duc`.`sinhvien` (`id`, `fname`, `lname`, `email`, `address`) VALUES (NULL, '$fname', '$lname', '$email', '$address')";
			if (mysqli_query($db, $query)) {
				echo 'Successfuly';
				header('Location: index.php');
			} else {
				echo 'Error';
			}
		}

	 ?>
	<form action="add.php" method="POST">
	<table>
		<tr>
			<td>Fist Name</td>
			<td><input type="text" name="fname" value=""></td>
		</tr>	
		<tr>
			<td>Last Name</td>
			<td><input type="text" name="lname" value=""></td>
		</tr>	
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" value=""></td>
		</tr>	

		<tr>
			<td>Address</td>
			<td><input type="text" name="address" value=""></td>
		</tr>	

		<tr>
			<td></td>
			<td><button name="submit">Add</button></td>
		</tr>	
		
	</table>
	</form>
</body>
</html>



