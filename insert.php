<?php

include "db.php";
$news1 = new news("localhost","root","","connect");



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1>INSERT SOME NEW NEWS</h1>
<form action="" method="post" enctype="multipart/form-data">

<input type="text"  class="form-control" name="title" placeholder="title">
<input type="text" class="form-control" name="content" style="margin-top: 50px; height:200px;" placeholder="content">

<input type="text" class="form-control" name="bigcontent" style="margin-top: 50px; height:200px;" placeholder="big Content">

<input type="file" class="form-control" name="image"></input></br>

<input type="submit" name="submit" value="Create">
<a href="select.php">Back</a>	

</form>

<?php




if (isset($_POST['submit'])) {

	$file_name=$_FILES['image']['name'];

    $file_tipe=$_FILES['image']['type'];

    $file_size=$_FILES['image']['size'];

    $file_tmp_name=$_FILES['image']['tmp_name'];

    $target_file=date('dmYGis').$file_name;
		


move_uploaded_file($file_tmp_name,"images/$target_file");

	$a = $news1->insert($_POST['title'],$_POST['content'],$_POST['bigcontent'],$target_file,'news');
    
     header("Location:select.php");

}



?> 
</div>
</body>
</html>