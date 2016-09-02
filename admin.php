<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
      <style>
        
body{
  background-color: lightgray;
  padding-top:50px;
}

img{
  border-radius: 50%;
  border:1px solid lightgray;
  padding: 5px;
}

.card{
  background-color:#eee;
  width:300px;
  text-align: center;
  margin:0 auto;
  padding: 10px;
  border-radius: 5px;
}



        </style>
    </head>
    <body>
      
      <div class="container">
      <div class="card text-center">
  
    
  <div class="card-block">
    <h4 class="card-title">Admin Login</h4>
    <p class="card-text">Sing in to your account</p>
     <form action="" name="contactform" method="post">
    <div class="form-group row">
     
      <div class="col-sm-12">
        <input type="text" class="form-control" name="emai" placeholder="Email">
      </div>
    </div>
    <div class="form-group row">
     
      <div class="col-sm-12 text-center">
        <input type="password" class="form-control" name="password" placeholder="Password">
      </div>
    </div>

     <div class="form-group">
                            <input type="submit" class="btn btn-default pull-right" name="submitcontact" value="Sing In">
                        </div>
  </form>
    
  </div>
  <div class="row ">

</div>
      </div>
      </div>


 
    </body>

</html>
<?php 
if (isset($_POST['submitcontact'])){
  $email=$_POST['emai'];
  $password=$_POST['password'];
  session_start();
  if(!empty($email) && !empty($password)){
    if($email=="admin@code.edu.az" && $password=="admin"){
      $_SESSION['login']=true;
      header('Location:select.php');
    }else{
      $_SESSION['mesage']="You are not admin";
      header('Location:admin.php');
    }
  
  }
  else{
    $_SESSION['mesage']='Boshluq!';
    header('Location:admin.php');
  }
}



?>