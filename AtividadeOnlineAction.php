<?php
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>GET e POST</title>

</head>
<body>
<div class="w3-container w3-teal">

<h2>Cadastro confirmado com Sucesso!</h2>
<h4>
    <?php
$nome = $_POST['txtNome'];
echo "Nome: ".$nome;
?>
</h4>
<h4>
    <?php
$sobrenome = $_POST['txtSobrenome'];
echo "Sobrenome: ".$sobrenome;
?>
</h4>
<h4>
    <?php
$email = $_POST['txtEmail'];
echo "Email: ".$email;
?>
</h4>
<h4>
    <?php
$formacao = $_POST['txtFormacao'];
echo "Formação: ".$formacao;
?>
</h4>
<h4>
    <?php
$ultimoEmprego = $_POST['txtEmprego'];
echo "Descrição Último emprego: ".$ultimoEmprego;
?>
</h4>
</div>
</body>
</html>