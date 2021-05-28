<?php
$page = 'home';
if(isset($_GET['page'])){
    $page = addslashes($_GET['page']);
}

if((strpos($_SERVER['HTTP_USER_AGENT'],"iPhone"))||(strpos($_SERVER['HTTP_USER_AGENT'],"Android"))){
    include 'mob/header.php';
    switch($page){
        case 'votar':
            include 'process.php';
            break;
        case 'eleicoes':
            include 'mob/home.php';
            break;
        case 'home':
            include 'mob/home.php';
            break;
        default:
            include 'mob/home.php';
            break;
    }
    include 'mob/footer.php';
}

else{
    include 'header.php';
    switch ($page){
        case 'teste':
            include 'testeescrita.php';
            break;
        case 'votar':
            include 'process.php';
            break;
        case 'eleicoes':
            include 'eleicoes.php';
            break;
        case 'compass':
            include 'compass.php';
            break;
        default:
            include 'home.php';
            break;
    }
    include 'footer.php';
}
?>