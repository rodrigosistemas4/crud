<?php

require __DIR__.'/app/db/Database.php';
require __DIR__.'/app/Entity/Eclientes.php';

use \App\Entity\Cliente;


$Clientes = Cliente::getClientes();

include 'head.php';
include 'clientes.php';
include 'footer.php';
 ?>
