<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Ducnvph02882</title>
</head>
<body>
	<h1 style="text-align: center"> Thêm - Sửa - Xóa</h1>
<?php

include 'config.php';

$q = mysqli_query($db, 'SELECT * FROM sinhvien');


?>


<html>
<head>
	<title>Home</title>
	<style type="text/css">
		td {
			padding: 3px 10px;
		}
	</style>
</head>
<body>
	<table border="1" style="text-align: center; font-size: 20px; margin: auto">
		<tr>
			<td>Id</td>
			<td>Name</td>
			<td>Email</td>
			<td>Address</td>
			<td>Edit</td>
			<td>Delete</td>
		</tr>	

		<?php 

			while ($row = mysqli_fetch_assoc($q)) {
				echo '<tr>';
				echo '<td>'.$row['id'].'</td>';
				echo '<td>'.$row['fname'].' '.$row['lname'].'</td>';
				echo '<td>'.$row['email'].'</td>';
				echo '<td>'.$row['address'].'</td>';
				echo '<td><a href="edit.php?id='.$row['id'].'">Edit</a></td>';
				echo '<td><a href="delete.php?id='.$row['id'].'">Delete</a></td>';

				echo '</tr>';
			}


		 ?>
		 <button style=" padding:20px; float: right"><a href="add.php">Add</a></button>
	</table>

</body>
</html>




</body>
</html>