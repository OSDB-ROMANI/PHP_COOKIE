<?php
    if(isset($_COOKIE['numero'])){
        $numero = $_COOKIE['numero'] + 1;
        setcookie('numero',$numero,time()+(86400),"/");
        //il cookie essiste, stampo a video il benvenuto
        echo "Questa è la $numero volte che apri questa pagina";

    }else{
        //il cookie non esiste, controllo se ho ricevuto username, se si creo il cookie e salvo i dati
            /*salvo i dati: 
                key->numero
                valore --> 1
                tempo di vita 1 giorno
                "/" valito per tutto il dominio 
            */
            setcookie('numero',1,time()+(86400),"/");
            echo "Benvenuto per la prima volta sul sito";
    }
?>