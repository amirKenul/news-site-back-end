<?php
    include "db.php";
      $id=$_GET['id'];
	$news1=new news("localhost","root","","connect");

   // $query = $news1->update('news',$title,$content,$id);

    $result = $news1->getbyId('news',$id);
    $row=mysqli_fetch_assoc($result);
	
	


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		input{
			display:block;
			padding:5px 15px;
			margin:5px;
		}
	</style>

</head>
<body>
	<form action="" method="post">	
		<input type="text" name="title" value="<?php echo $row['title'];?>">
		<input type="text" name="content"  value="<?php echo $row['content'];?>">
		<input type="text" name="bigcontent"  value="<?php echo $row['content'];?>">
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>

<?php 


if(isset($_POST["submit"])){
	$query = $news1->update("news",$_POST["title"],$_POST["content"],$_POST["big_content"],$id);


	var_dump($query);
		if($query){
         
			header("Location:select.php");
		}else{
			echo "Error";
		}
	}
	 ?>