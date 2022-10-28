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
    <title>MMO CLICK - Profile</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Custom JS -->
    <script src="././js/script.js"></script>
</head>
<body>
    <h1>Perfil Usuário LvL 100</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-1 border">
            <img src="././imgs/photo_users/default.jpg" alt="" width="150" height="150">
            </div>
            <div class="col-6 border">
            <h1>Nome usuário</h1>
            <img src="././imgs/icons/life_icon.png" height="20" width="20" alt=""><progress value="100" max="100"></progress>100/100 <br>
            <img src="././imgs/icons/mana_icon.png" height="20" width="20" alt=""><progress value="100" max="100"></progress>100/100 <br>
            <img src="././imgs/icons/level_icon.png" height="20" width="20" alt=""><progress value="50" max="100"></progress>50/100xp Level 1<br>
            </div>
        </div>
    </div>
</body>
</html>
