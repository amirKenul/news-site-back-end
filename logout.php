<?php 

session_start();
/*$_SESSION['login']=false;*/
/*session_destroy();*/

  if(isset($_POST['out'])){
  $_SESSION['login']=false;
    
     header('Location:index.php');
    }else{
   header('Location:index.php');

  }



?>
