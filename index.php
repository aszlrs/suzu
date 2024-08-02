<?php

require_once "Controladores/principalC.php";

// require_once "Controladores/loginC.php";
// require_once "Modelos/loginM.php";

// require_once "Controladores/listasC.php";
// require_once "Modelos/listasM.php";

// require_once "Controladores/formatosuiC.php";
// require_once "Modelos/formatosuiM.php";

// require_once "Controladores/clientesC.php";
// require_once "Modelos/clientesM.php";

// require_once "Controladores/ticketsC.php";
// require_once "Modelos/ticketsM.php";

$principal = new Principal();
$principal -> CargaPrincipal();
  
?>