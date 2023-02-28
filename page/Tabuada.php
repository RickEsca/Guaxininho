<form method="post">
    <br>
    <input style=" width: 25%;height:50%;"  type="number" name="input_tab" placeholder="Informe a tabuada desejada"><br>
    <br>
    <input  type="submit" value="Gerar">
</form>
<h3></h3>

<?php
    if(isset($_POST['input_tab'])){
        $tab = $_POST['input_tab'];
            for($id = 0; $id < 11; $id++){
                $resultado = $id * $tab;
                echo"<h3>$id * $tab = $resultado</h3>";
            }
    }

?>