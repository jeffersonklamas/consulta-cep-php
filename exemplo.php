<?php

require_once "vendor/autoload.php";

use Jeffersonklamas\ConsultaCepPhp\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('83150000');

print_r($resultado);