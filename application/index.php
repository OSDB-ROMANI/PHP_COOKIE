<?php
    include_once "lib.php";
    getForm();
    if(!empty($_POST)){
        if($_POST["scegli"] == "reset"){
            $dati = array(
                "count"=>0,
                "max"=>0,
                "min"=>0,
                "med"=>0,
                "tot"=>0
            );
            $durata = -1;
            setC($dati, $durata);
            echo "<h2>COOKIE RESETTATO</h3>";
        }else if($_POST["scegli"] == "setCookie"){
            echo "<p>Numero inserito: ".$_POST["numero"]."</br>";
            if(isset($_COOKIE["count"])){
                $count = $_COOKIE["count"] + 1; 
                if($_POST["numero"]>$_COOKIE["max"]){ 
                    $max = $_POST["numero"];
				}
                if($_POST["numero"]<$_COOKIE["min"]){
                    $min = $_POST["numero"];
				}
                $tot = ($_COOKIE["med"] * $_COOKIE["count"])+$_POST["numero"];
                $med = $tot/$count;

                $dati = array(
                    "count"=>$count,
                    "max"=>$max,
                    "min"=>$min,
                    "med"=>$med,
                    "tot"=>$tot
                );
                echo"
                    Il numero di numero inseriti $count</br>
                    Il numero max $max</br>
                    Il numero min $min</br>
                    Il numero med $med</br>
                    Il numero tot $tot</br>
                ";
            }else{
                $dati = array(
                    "count"=>1,
                    "max"=>$_POST["numero"],
                    "min"=>$_POST["numero"],
                    "med"=>$_POST["numero"],
                    "tot"=>$_POST["numero"]
                );
                $durata = time()+86400;
                setC($dati, $durata);
                echo "<h2>COOKIE SET PRIMA VOLTA</h3>";                
            }
        }
    }else{
		echo "<h2>devi inserire un valore</h2>";
	}
?>