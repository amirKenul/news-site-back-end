<?php

/*
if (isset($_SESSION['login'] != true)) {


	header('Location:admin.php');
}
*/
include "db.php";

$news1 = new news("localhost","root","","connect");

$query = $news1->select("news");
?>
<!DOCTYPE html>
<html>

<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


</head>
<style>
	table{
		margin-top: 50px;
	}
</style>
<body>
<div class="container">
<a class="btn btn-default" href="insert.php">Create</a>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>title</th>
			<th>Content</th>
			<th>big_content</th>
			<th>Image_name</th>
			<th>create date</th>
			<th>ACtion</th>
			
		</tr>
	</thead>
	<tbody>
	<?php
	
	while($row=mysqli_fetch_assoc($query)){
		?>
		<tr>
		<td><?=$row["title"]?></td>
		<td><?=$row["content"]?></td>
		<td><?=$row["big_content"]?></td>
		<td><?=$row["img_name"]?></td>
		<td><?=$row["create_date"]?></td>

		<td>
		 <a class="btn btn-info" href="update.php?id=<?php echo $row['id']?>" class="update">Update</a>
	     <a class="btn btn-warning" href="delete.php?id=<?php echo $row['id']?>" class="delete">Delete</a>


	     </td>
		
		</tr>
		<?php
	}
	?>
	</tbody>
</table>
</div>
</body>
</html>
<?php
/*if (isset($_SESSION['login'] != true)) {


	header('Location:admin.php');
}*/

?>