<?php require __DIR__ . '/includes/header.php'; ?>

<div>
    <h2>Serie Fibonacci</h2>
    <p>Genera los primeros n términos de la serie Fibonacci.</p>

    <?php
    function generarFibonacci($n) {
        $fibonacci = [];

        if ($n >= 1) {
            $fibonacci[] = 0;
        }
        if ($n >= 2) {
            $fibonacci[] = 1;
        }

        for ($i = 2; $i < $n; $i++) {
            $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }

        return $fibonacci;
    }

    $n = 10;
    $resultado = generarFibonacci($n);
    ?>

    <div class="card">
        <h3>Resultados</h3>
        <p>Los primeros <strong><?php echo $n; ?></strong> términos de la serie Fibonacci son:</p>
        <ul>
            <?php foreach ($resultado as $num) : ?>
                <li><?php echo $num; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
