<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php
    date_default_timezone_set('America/Sao_Paulo');
        const MENSAGEM = "Olá, mundo!<br>";
        $hora = date("G:i:s");
        $data = date("d/m/Y");
    ?>

    <p>
        <?php 
            echo MENSAGEM;
        ?>
    </p>

    <table>
        <thead>
            <tr>
                <td> Data </td>
                <td> Hora </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <?php echo $data; ?> </td>
                <td> <?php echo $hora; ?> </td>
            </tr>
        </tbody>
    </table>

</body>

<style>
    table {
        border-collapse: collapse;
    }
    td {
        border: 1px solid #000;
        padding: 5px;
    }
</style>
</html>