<?php 
	include 'config.php';
	$id = $_GET['id'];
 ?>
 <html>
 <head>
 	<title>Edit</title>
 </head>
 <body>

 	<?php 


 		if (isset($_POST['submit'])) {
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$address = $_POST['address'];

			$query = mysqli_query($db, "UPDATE sinhvien SET fname = '$fname', lname = '$lname', email = '$email', address = '$address' WHERE id = $id");

			if ($query) {
				echo "Luu thanh cong";
			} else {
				echo "That bai";
			}
		}



 		$q = mysqli_query($db, "SELECT * FROM sinhvien WHERE id = $id");


 		while ($row = mysqli_fetch_assoc($q)) {

 	 ?>

 	 	<form action="" method="POST">

 		Fname: <input type="text" name="fname" value="<?php echo $row['fname']; ?>"><br>
 		Lname: <input type="text" name="lname" value="<?php echo $row['lname']; ?>"><br>
 		Email: <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
 		Add: <input type="text" name="address" value="<?php echo $row['address']; ?>"><br>

 		<button name="submit">Save</button>

 		</form>

 	<?php } ?>
 </body>
 </html>