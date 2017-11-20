<?php
require 'class/Autoloader.php';
Autoloader::register();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <title>Bataillons</title>
</head>
<body>
    <div class="container">
    <?php
    $soldat1=new Tirailleur;
    $soldat2=new Soldat;
    $soldat3=new Tirailleur;
    $soldats=[$soldat1,$soldat2,$soldat3];
    var_dump($soldats);
    ?>  
    </div>
    
    <!-- Latest compiled and minified JS -->
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

