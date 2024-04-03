<?php
    if(isset($_COOKIE['username'])){
        //il cookie essiste, stampo a video il benvenuto
        echo "Ciao, ben tornato ".$_COOKIE['username'];
    }else{
        //il cookie non esiste, controllo se ho ricevuto username, se si creo il cookie e salvo i dati
        if(isset($_POST['username'])){
            /*salvo i dati: 
                key->username
                valore --> post
                tempo di vita 1 giorno
                "/" valito per tutto il dominio 
            */
            setcookie('username',$_POST['username'],time()+(86400),"/");
            echo "Cookie creato, f5 per vedere il contenuto";
        }else{
            //chiedo i dati all'utente
            echo '
                <form method="post">
                    <label for="username">Inserisci il tuo nome:</label>
                    <input type="text" id="username" name="username">
                    <input type="submit" value="Invia">
                </form>
            ';
        }
    }
?>