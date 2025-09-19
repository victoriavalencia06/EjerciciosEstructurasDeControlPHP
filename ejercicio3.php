<?php require __DIR__ . '/includes/header.php'; ?>

<h2>Palíndromos</h2>
<p>Determina si una palabra o frase es un palíndromo.</p>

<?php
function esPalindromo($texto)
{
    $texto = strtolower($texto);

    $texto = preg_replace("/[^a-z0-9]/", "", $texto);

    $invertido = strrev($texto);

    return $texto === $invertido;
}

$frases = [
    "Ana",
    "Anita lava la tina",
    "La ruta natural",
    "Hola Mundo",
    "Flan"
];
?>

<div class="card">
    <h3>Resultados</h3>
    <ul>
        <?php foreach ($frases as $frase) : ?>
            <li>
                "<?php echo $frase; ?>" <?php echo esPalindromo($frase) ? "es un palíndromo" : "no es un palíndromo"; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>