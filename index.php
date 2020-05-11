
<?php
  $base = "https://<some_id>.ngrok.io/<folder_where_download.php_file_is>/";
  $link = $base."download.php";


  if(isset($_GET['r'])){
    $filepath = $_GET['r'];

    $headers = get_headers($filepath, 1);// use file absolute path here
    $fsize = $headers['Content-Length'];

    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($filepath));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header("Content-Length: " . $fsize);
    ob_clean();
    flush();
    readfile($filepath);

  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Youtube to mp3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/cover/cover.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">mp3 Converter</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#">Home</a>
            <!--<a class="nav-link" href="#">Features</a>-->
            <a class="nav-link" href="#">Contact</a>
          </nav>
        </div>
      </header>

      <form action="<?php echo $link; ?>" method="GET">
      <main role="main" class="inner cover">
        <h1 class="cover-heading">Youtube to mp3</h1>
        <p class="lead">
			   <input type="text" name="q" class="form-control" aria-label="Text input with radio button" placeholder="your favorite youtube music link">
         <input type="hidden" name="h" value="<?php echo $base; ?>">
        </p>
        <p class="lead">
          <button  class="btn btn-lg btn-secondary">Download</button>
        </p>
      </main>
  	  </form>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a></p>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>
