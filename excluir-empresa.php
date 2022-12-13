<?php

require __DIR__ . '/vendor/autoload.php';

use App\Entity\Empresa;

//VALIDAÇÃO DO ID
if (!isset($_GET['id']) or !is_numeric($_GET['id'])) {
    header('location: index.php?status=error');
    exit;
}

//CONSULTA A EMPRESA
$obEmpresa = Empresa::getEmpresa($_GET['id']);

//VALIDAÇÃO DA EMPRESA
if (!$obEmpresa instanceof Empresa) {
    header('location: index.php?status=error');
    exit;
}

//VALIDAÇÃO DO POST
if (isset($_POST['excluir'])) {

    $obEmpresa->excluir();

    header('location: index-empresas.php?status=success');
    exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/confirmar-exclusao-empresa.php';
include __DIR__ . '/includes/footer.php';
