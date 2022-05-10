<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Total de Ativos</th>
                <th>Ver Carteira</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($clientes as $cliente) :
                echo "
                <tr>
                    <td>{$cliente['id']}</td>
                    <td>{$cliente['name']}</td>
                    <td>{$cliente['totalAtivos']}</td>
                    <td></td>                                 
                </tr>"; 
            endforeach;           
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td>Totais</td>
                <td><?php echo count($clientes) ?> clientes</td>
                <td></td>
                <td></td>
            </tr>
        </tfoot>
    </table>

</body>

</html>