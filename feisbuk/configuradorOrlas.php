<!DOCTYPE html>
<!-- saved from url=(0049)https://getbootstrap.com/docs/4.0/examples/cover/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Cover Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/cover.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">Feisbuk.com</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link " href="index.html">Home</a>
            <a class="nav-link active" href="configuradorOrlas.php">Orlas</a>
            <a class="nav-link" href="">Contacto</a>
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Bienvenido al configurador.</h1>
        <p class="lead">Feisbuk es la primera web online con la que podrás hacer tu orla online.</p>
        <p class="lead">
          <a href="configuradorOrlas.php" class="btn btn-lg btn-secondary">Navegar al Configurador de Orlas</a>
        </p>
		
		<p>
		<span>Se genera un número aleatorio con PHP:</span>
		<?php
			echo(rand());
			?>
		</p>
		
		<p>
		<span>Se obtiene la fecha actual con PHP:</span>
		<?php
			echo "Hoy es el día y hora: " . date("Y/m/d H:i:s") . "<br>"
			?>
		</p>
		
		
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./css/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
  

</body></html>