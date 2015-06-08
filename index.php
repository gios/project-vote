<?php
  require_once 'helpers/DatabaseHelper.php';
  use Helpers\DatabaseHelper as MySQLConnector;

  MySQLConnector::checkDatabaseConnection('localhost', 'root', 'qwerty');
?>
<html>
  <head>
    <title>Project Vote</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <!-- jQuery -->
    <script src="public/jquery/jquery.min.js"></script>
    <script src="public/jquery/jquery.min.map"></script>
    <!-- Bootstrap -->
    <script src="public/bootstrap/js/bootstrap.min.js"></script>
    <link href="public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/bootstrap/css/bootstrap.css.map" rel="stylesheet">
  </head>

  <body>
    <?php echo '<p>Hello World</p>'; ?>
    <footer>
      Version: <strong>0.0.2</strong>
    </footer>
  </body>
</html>
