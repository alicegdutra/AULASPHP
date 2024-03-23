<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    hoje é dia <?php echo date("c"); ?> <!-- echo é o print() do php, date() é para mostrar a data,
                                         "c" mostra tudo sobre a data atual, porém pode colocar (d/m/y) para mostrar -->


    <form action="resposta.php" method="post">
        <label>Informe o valor 1:</label>
        <input type="text" name="valor1">
        <label>Informe o valor 2:</label>
        <input type="text" name="valor2">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>