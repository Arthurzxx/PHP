<?php
session_start();

// isset significa nulo; e "!" significa negação
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 1;
} else {
    // como vc inicia com 1 ele adiciona mais um
    $_SESSION['contador']++;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Acessos</title>
</head>
<body>

    <h1>Contador de Acessos</h1>

    <p>
        Você acessou esta página
        <strong><?php echo $_SESSION['contador']; ?></strong>
        vezes nesta sessão.
    </p>

</body>
</html>