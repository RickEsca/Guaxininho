<h1>Cálculo IMC</h1>
<form method="post">

    <input style=" width: 25%;height:50%;"; type="number" style="font-size:160%;" name="peso" placeholder="Informe seu peso">
    <input style=" width: 25%;height:50%;"; type="number" name="alt" placeholder="Informe sua altura">
    <input type="submit" name="btnCalc" value="Calcular">

 </form >
<?php
    if(isset($_POST['btnCalc'])){
        
        $peso = $_POST['peso'];
        $alt = $_POST['alt'];
        
            $quadrado = $alt * $alt;
            $resultado = $peso / $quadrado * 10000;
            echo"<h2>Seu imc é: $resultado</h2>";
        }
            

?>
<img src="https://endocrinologiacuritiba.com.br/wp-content/uploads/2012/02/tabela_imc.jpg" style="width:25%;height:25%;">