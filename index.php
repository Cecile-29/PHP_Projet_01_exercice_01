<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet01 Exercice01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid col-7 p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">PHP Projet01 Exercice01</h1>
            <h3 class="col-12 text-info text-center">Créez une variable et lui affecter une chaîne de caractères. Afficher cette variable.</h3>
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary text-center">
    <?php
        $maVariable = 'Dear lovely !';
        echo $maVariable;
    ?> 
        </div>
    </div> 
</body>
</html>