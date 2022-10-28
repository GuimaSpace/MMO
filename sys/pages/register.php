<?php 
include_once("sys/conn.php");
?>
<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>MMO Click</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Custom JS -->
    <script src="././js/script.js"></script>
</head>
<body>
    <h1>Registro</h1>
    <form action="./sys/proc_cadastrar.php" method="post" id="Cad_Form">
        <label>Nome Completo</label><input type="text" name="Complete_Name" placeholder="Nome Completo"><br><br>
        <label>Nick Name</label><input type="text" name="Nick_Name" placeholder="Nick Name"><br><br>
        <label>Seu Email</label><input type="text" name="Email" placeholder="Seu Email"><br><br>
        <label>Sua Senha</label><input type="password" name="Senha" placeholder="Sua Senha"><br><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
