<?php

require __DIR__ . '/vendor/autoload.php';

use App\Entity\Empresa;

$empresas = Empresa::getEmpresas();

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/listagem-empresa.php';
include __DIR__ . '/includes/footer.php';
