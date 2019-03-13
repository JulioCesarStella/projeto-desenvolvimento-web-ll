<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../css/favicon.ico">

    <title>Acesso ao Sistema</title>

    <!-- Bootstrap core CSS -->
            <link href="../bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
            <link href="../css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
       <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">
      
    <!-- Custom styles for this template -->
  
    <link href="../css/signin.css" rel="stylesheet">
      

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
      <script src="../bootstrap-3.3.7/docs/assets/js/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
        
      <form method="post" action="index.php" class="form-signin">
          
        <h1 class="form-signin-heading" align="center"><strong>Login</strong></h1>
          
        
          
        <input type="email" id="inputEmail" class="form-control" placeholder="Endereço de E-Mail"><br>
          
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Senha" >
        
        <div class="checkbox">
          <label>

            <button class="btn btn-success"  type="button" onClick="window.open('cadastro.php')"><strong>Cadastrar</strong></button>
           <button class="btn btn-danger " type="button" onClick="window.open('recuperar.php')"><strong>Recuperar</strong></button>
          <button class="btn btn-warning" type="reset"><strong>Limpar</strong></button>   
          </label>
        </div>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit"><strong>Acesse</strong></button><br>
               
                          
      </form>

    </div> <!-- /container -->
  
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="../bootstrap-3.3.7/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
