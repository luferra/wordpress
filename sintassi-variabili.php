<?php
echo "luca scemo<br />";
echo 12345676 ." prova<br />";

//Variabili
$nome = "Luca";
$cognome = "Ferrari";

echo $nome."<br />";

//costanti
define("TITOLO", "Pippo pluto");

echo TITOLO;

//array
$utenti = array(
  'chicco', 'mario', 25
);

echo $utenti[1];
print_r($utenti);

//array associativo
$user = array(
  'nome' => 'pluto', 'cognome' => 'pluto', 'eta' => 25
);

print_r($user);
echo $user['cognome'];

//funzioni
function salutare() {
echo "<br />funzione<br />";
};

salutare();

function moltiplica($x, $y) {
echo "<br />motliplica: ".$x*$y;
};

moltiplica(3,4);

//costrutto if compatto
echo ("pluto" == "pluto" ? "uguali" : "diversi");

//classi in php
/**
 * definizione nuova classe
 */
class Utente
{
  var $tipologia = "supereroe";

  function power(){
    echo "sei un supereroe stronzo <br />";
  }

}

$jack = new Utente();

$jack ->power();

 ?>
