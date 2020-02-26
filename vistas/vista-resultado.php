<div class="opcion">
    <?php
    $widthBar = $porcentaje * 5;
    $estilo = "barra";

    if ($survie->getOptionSelected() == $lenguaje['opcion']) {
        $estilo = "seleccionado";
    }

    echo $lenguaje['opcion'];
    ?>

    <div class="<?php echo $estilo; ?>" style="width: <?php echo $widthBar . 'px' ?>"><?php echo $porcentaje . '%'; ?></div>
</div>