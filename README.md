# PHP_COOKIE
Il protocollo HTTP/HTTPS è stateless, ossia non permette di salvare lo stato del client per essere utilizzato nelle richieste successive. Per ovviare a questo problema è possibile utilizzare diversi approcci:
<li>hidden input (non più in uso)</li>
<li>Cookie</li>
<li>Sessioni</li>
I cookie è una stringa di testo che contiene le informazioni da salvare, caratteristiche:
<li>Contiene l'informazione che si vuole far persistere per richieste successive.</li>
<li>L'informazione è salvata dalla coppia: nome, valore.</li>
<li>Vengono inviati dal server al client.</li>
<li>E' un file di testo salvato nel device client.</li>
<li>Ogni web application può salvare uno o più cookies per il proprio uso.</li>
<li>Se richiesto il client invia i dati salvati nel cookie al server.</li>
Generalmente i cookies vengono utilizzati per tener traccia della frequenza di visita, tempi di visita, banner cliccati, preferenze dell'utente, etc. Nel casi si vogliano salvare dati personali o sensibili è consigliabile crittografare l'informazione per migliorare la sicurezza.</br>
<h2>Cookie in php</h2>
Per la gestione dei cookie PHP fornisce allo sviluppare la struttura dati:
<li>$_COOKIE: array associativo che contiene i dati del cookie.</li>
Una funzione
<li>setcookie(): Definisce un cookie da inviare insieme al resto delle intestazioni HTTP/HTTPS che potrà essere utilizzato nelle pagine web successive.</li>
<h3>SETCOOKIE</h3>
 Caratteristiche:
<li>string $name: nome del cookie.</li>
<li>string $value = "": valore da salvare associato alla chiave $name.</li>
<li>int $expires_or_options = 0: Ora di scadenza del cookie espresso come timestamp (unix), in pratica si utilizza la funzione time() sommando il numero in secondi della durata prima che scada.</li>
<ul><li>time(): restituisce i secondi dall'inizio dell'epoca al momento delle richiesta.</li>
  <li>Se impostato a zero o omesso il cookie scadrà alla chiusura della sessione.</li></ul>
<li>string $path = "": Il percorso sul server in cui sarà disponibile il cookie. Se impostato su '/' il cookie sarà disponibile per tutto il dominio oppure '/nome' sarà disponibile per tutte le sottodirectory di nome.</li>
<li>string $domain = "": indica il dominio a cui è associato il cookie. E' possibile indicare anche un sottodominio.</li>
<li>bool $secure = false: indica se il cookie può essere trasmesso solo in HTTPS se impostato su true.</li>
<li>bool $httponly = false: Indice se il cookie può essere letto sono tramite protocollo HTTP se impostato su true. Ciò non permette l'accesso a linguaggi di scription come JS.</li>
La funzione restituisce un bool: true se viene eseguita correttamente, ciò non implica che l'utente abbia accettato il cookie.</br>
Esempio:</br>
setcookie("Colore","Rosso");</br>
setcookie("Colore","Rosso",time()+3600); //dura 1 ora</br>
setcookie("Colore","Rosso",time()+3600,"/colore","miosito.com",1);</br>
