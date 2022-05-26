<form method="post">

<h3>LOGIN DE ACESSO</h3>
<input  type="text" name="login" placeholder="login">
<input type="password" name="senha"placeholder="Senha">
<input type="submit" name="acao" value="Login">

<style>


*{margin0; padding: 0;box-sizing: border-box;}

body{

	    background-image: url(.///imagens/puma.jpg);

}

form{

	 background-color: black;
	 max-width: 500px;
	 width: 80%;
	 padding: 20px;
	 position: absolute;
	 left: 50%;
     top: 50%;
     transform: translate(-50%, -50%);
      font-family: FFDINforPumaW01, Helvetica, Roboto, Arial, sans-serif;
          border-radius: 20px;

}

form h3{

	text-align: center;
	color: white;
	font-family: FFDINforPumaW01, Helvetica, Roboto, Arial, sans-serif;
}

input[type=text] {

   width: 100%;
  padding-left: 10px;
  margin: 10px 0;
  border: 11px solid white;
  border-radius: 4px;
  }

 input[type=password] {

   width: 100%;
  padding-left: 10px;
  margin: 10px 0;
  border: 11px solid white;
  border-radius: 4px;
  }
   input[type=submit] {

   width: 100%;
  padding-left: 10px;
  margin: 10px 0;
  border: 2px solid white;
  border-radius: 4px;
  	cursor: pointer;
	height: 30px;
	cursor: pointer;
	background-color: green;
	border-radius: 20px;

  }






</style>

</form>