<?php

class news{
	public $host;
	public $username;
	public $password;
	public $dbname;
	public $conn;


	
	public function __construct($myhost,$myusername,$mypassword,$mydbname){

		$this->host=$myhost;
		$this->username=$myusername;
		$this->password=$mypassword;
		$this->dbname=$mydbname;

		$this->conn=mysqli_connect($this->host,$this->username,$this->password,$this->dbname);

if($this->conn){

			echo "goshulduq database name: 
			";
          	echo $this->dbname;
          }else {
          			echo "I think you have an error";
          }

		
	}


	//Select

	public function select($tname){

		if ($this->conn) {
			$this->tname=$tname;
		  $sql=	"SELECT * FROM $this->tname";
			$query=mysqli_query($this->conn, $sql);
			return $query;
		}
	}

//Show all this in index.php

	public function show($tname){

		if($this->conn){
			 $this->tname=$tname;
			 
		
			$sql="SELECT * FROM $tname";
			$query=mysqli_query($this->conn, $sql);

			return $query;
		}else{

			echo "ERROR";
		}
	}



//function create



	public function insert($title,$content,$bigcontent,$img_name,$tname){

	

		$sql="INSERT INTO $tname(title,content,big_content,img_name,create_date) VALUES ('$title','$content','$bigcontent','$img_name',current_timestamp)";

		$query=mysqli_query($this->conn, $sql);
		return $query;
	}


//function delete

	public function delete($tname,$id){
		$this->tname=$tname;
		$this->id=$id;

		$sql="DELETE FROM $tname WHERE id=$id";
      		$query=mysqli_query($this->conn,$sql);
      		return $query;

	}


	//function update 

	public function update($tname,$title,$content,$id){

		$this->tname=$tname;
		$this->title=$title;
		$this->content=$content;
		$this->id=$id;

		$sql="UPDATE $tname SET `title`='$title', `content`='$content' WHERE id =$id";

		$query=mysqli_query($this->conn,$sql);
		return $query;

	}


	public function lastnews($tname){
	  $sql="SELECT * FROM $tname ORDER BY id desc LIMIT 5 ";
	  $query1=mysqli_query($this->conn,$sql);


	  return $query1;



	}


	//show eith id


	public function getbyId($tname,$id){

		$sql="SELECT * FROM $tname WHERE id=$id";

		$query=mysqli_query($this->conn,$sql);
	  return $query;
	}

   
}