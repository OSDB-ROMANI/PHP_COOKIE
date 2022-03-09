<?php
    function setC($dati, $durata){
        echo "setto il cookie </br>";
        foreach($dati as $nome=>$valore)
            setcookie($nome, $valore, $durata);
            echo "$nome, $valore, $durata</br>";
    }

    function getForm(){
        echo'
            <form action="index.php" method="post">
                <h3>Inserisci un numero</h3>
                <input type="number" name="numero" required>
                <input type="submit" name="scegli" value="setCookie">
                <input type="submit" name="scegli" value="reset">
            </form>
        ';
    }
?>