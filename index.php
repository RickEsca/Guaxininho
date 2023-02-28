<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align:center;">
    <a style="font-size:160%;" href="?page=Home" >Home</a>
    <a style="font-size:160%;" href="?page=Tabuada">Tabuada</a>
    <a style="font-size:160%;" href="?page=IMC">IMC</a>
    <a style="font-size:160%;" href="?page=Viagem">Viagem</a>
    <a style="font-size:160%;" href="?page=Sobre">Sobre</a>
    
    <!-- <form method="post">
        <input type="number"    name="tab" placeholder="tab">
        <input type="number"    name="inicio" placeholder="inicio">
        <input type="number"    name="fim" placeholder="fim">
        <input type="submit" value="Enviar">
    </form> -->
    <?php
        http://materialaulapw3.local/?page
        if(isset($_GET['page'])){
            $page = $_GET['page'];
            switch($page){
                case 'Home':
                    require_once './page/Home.php';
                    break;
                case 'IMC':
                    require_once './page/IMC.php';
                    break;
                case 'Viagem':
                    require_once './page/Viagem.php';
                    break;
                case 'Sobre':
                    require_once './page/Sobre.php';
                    break;
                case 'Tabuada':
                    require_once './page/Tabuada.php';
                    break;
                default:
                   
            }
        }
    ?>


</body>
</html>