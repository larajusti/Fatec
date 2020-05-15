<!DOCTYPE html>
<html lang="pt-br">
<?php
include_once('routes.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumindo API</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="." method="post">
        <select name="selectApi">
            <option value="viacep">Viacep</option>
            <option value="postmon">Postmon</option>
            <option value="cepaberto">Cep Aberto</option>
        </select>
        <p>Digite o CEP para encontrar o endereço.</p>
        <input type="text" placeholder="Digite um cep..." name="cep" value="<?php echo $address->cep ?>">
        <input type="submit">
        <input type="text" placeholder="rua" name="rua" value="<?php echo $address->logradouro ?>">
        <input type="text" placeholder="bairro" name="bairro" value="<?php echo $address->bairro ?>">
        <input type="text" placeholder="cidade" name="cidade" value="<?php echo $address->localidade ?>">
        <input type="text" placeholder="estado" name="estado" value="<?php echo $address->uf ?>">
    </form>

</body>

</html>