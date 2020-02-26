<?php
include_once 'includes/survey.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Prueba Web App</title>
</head>

<body>
    <form action="" method="post">
        <?php
        $survie = new Survey();
        $showResults = false;

        if (isset($_POST['lenguaje'])) {
            $showResults = true;
            $survie->setOptionSelected($_POST['lenguaje']);
            $survie->vote();
        }


        ?>
        <h2>¿Cual es tu lenguaje de programación favorito?</h2>
        <?php
        if ($showResults) {
            $lenguajes = $survie->showResults();

            echo '<h2>' . $survie->getTotalVotes() . ' votos totales </h2>';

            foreach ($lenguajes as $lenguaje) {
                $porcentaje = $survie->getPercentageVotes($lenguaje['votos']);
                include 'vistas/vista-resultado.php';
            }
            $showResults = false;
        }else{
            include 'vistas/vista-votacion.php';
        }

        ?>


    </form>
</body>

</html>