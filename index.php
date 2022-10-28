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
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Custom JS -->
</head>
<body>
    <img src="imgs/site_imgs/logo.png" alt="">
</body>
</html>
<?php 
check_url();
//function das page
function check_url(){
    $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);
    if ($page == null) {
        header("Location: index.php?page=register");
    }elseif ($page == "register") {
        include("sys/pages/register.php");
    }elseif ($page == "profile") {
        include("sys/pages/profile.php");
    }elseif ($page == "index") {
        include("sys/pages/login.php");
    }
}


?>