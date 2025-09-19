<?php require __DIR__ . '/includes/header.php'; ?>

<div>
    <h2>Números Primos</h2>
    <p>Determina si los números de un arreglo son primos o no.</p>

    <?php
    function esPrimo($numero) {
        if ($numero <= 1) {
            return false;
        }

        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return false; 
            }
        }
        return true;
    }

    $numeros = [2, 3, 4, 5, 10, 17, 20, 23, 44, 22];
    ?>

    <div class="card">
        <h3>Resultados</h3>
        <ul>
            <?php foreach ($numeros as $num) : ?>
                <li>
                    <?php echo $num . (esPrimo($num) ? " es primo" : " no es primo"); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
