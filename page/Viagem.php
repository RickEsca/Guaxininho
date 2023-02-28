<h1>Viagem</h1>
<br>
<form method="post">
    <input style=" width: 25%;height:50%;"  type="number" name="aut" placeholder="Informe a autonomia do carro"> <br>
    <br>
    <input style=" width: 25%;height:50%;"  type="number" name="comb" placeholder="Informe o valor do litro combustível"><br>
    <br>
    <input style=" width: 25%;height:50%;"  type="number" name="km" placeholder="informe a kilometragem rodada"><br>
    <br>
    <input style=" width: 25%;height:50%;"  type="submit" name="btnCalc" value="Calcular">
</form>

<?php
    if(isset($_POST['btnCalc'])){
        
        $aut = $_POST['aut'];
        $comb = $_POST['comb'];
        $km = $_POST['km'];
        
            $corrida = (($km / $aut) * $comb);
            echo"<h2>Seu custo de viagem foi de: R$:$corrida</h2>";
        }
            

?>