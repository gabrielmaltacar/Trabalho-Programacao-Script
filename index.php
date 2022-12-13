<?php

require __DIR__ . '/vendor/autoload.php';

use App\Entity\Vaga;
use App\Entity\Empresa;

$empresas = Empresa::getEmpresas();
$vagas = Vaga::getVagas();

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/listagem-vaga.php';
include __DIR__ . '/includes/footer.php';
