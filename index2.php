<?php
 $data = $_GET;

 if (empty($data['name']) || empty($data['mail']) || empty($data['age']) ) {
   echo 'Errore, non tutti i parametri sono stati passati';
 }

 elseif (strlen($data['name']) <=3) {
   echo 'Accesso negato';
 }

 elseif (strpos($data['mail'], '@') === false || strpos($data['mail'], '.') === false) {
   echo 'Accesso negato';
 }

elseif (is_numeric($data['age']) ) {
  echo 'Accesso negato';
}
else {
  echo 'Accesso riuscito';
}
?>
