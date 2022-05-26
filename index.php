<php session-start()?>

<!DOCTYPE html>

<html>
<head>
<title>Login</title>
</head>
<body>

	<?php

  if(!isset($_SESSION['Login'])){

  	if(isset($_POST['acao'])){
   $login = 'clientepuma';
   $senha = 'adm1';

    $loginForm = $_POST['login'];
    $senhaForm = $_POST['senha'];

    if($login == $loginForm && $senha == $senhaForm){
      $_SESSION['login'] = $true;
      header('Location: principal.html');
    }else{

echo "<span style='color:red'>DADOS INVÁLIDOS</span>";

    }

  	}
  	include('login.php');
  }else{
  	include ('home.php');
  }

	?>
</body>
	</html>