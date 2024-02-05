<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina sair da compra</title>
    <link rel="stylesheet" href="sair-da-compra.css">
</head>
<body>
    
</body>
</html>

<?php
// Texto para a label

$textoLabel = "SAIR DA COMPRA";
?>

<form method="post" action="processar_formulario.php">
    <label for="nome"><?php echo $textoLabel; ?></label>

    <br>

    <input type="submit" value="SIM">
    <input type="submit" value="NÃO">
</form>

</body>
</html>