<?php
    $background = "blue";
        //Se ricevo un dato in post allora lo salvo sul cookie
        if(isset($_POST['background'])){
            $background = "#".$_POST['background'];
            /*salvo i dati: 
                key->background
                valore --> post
                tempo di vita 1 giorno
                "/" valito per tutto il dominio 
            */
            //salvo i dati sul cookie
            setcookie('background',$_POST['background'],time()+(86400),"/");
            //resetto l'array post
            $_POST = array();
        }
        else if(isset($_COOKIE['background'])){
            $background = '#'.$_COOKIE['background'];
    }
    //scegli il colore del sito: chiaro o scuro
    echo ' 
            <body style = "background: '.$background.';">
            <form method="post">
                <fieldset>
                    <legend>Scegli un colore:</legend>
                    <label for="color">Colore:</label>
                    <select id="color" name="background">
                        <option value="dcdcdc">Chiaro</option>
                        <option value="404040">Scuro</option>
                        <!-- Aggiungi altre opzioni -->
                    </select>
                    <input type="submit" value="Aggiorna">
                </fieldset>
            </form>
    ';            

?>