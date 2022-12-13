<?php

require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Cadastrar empresa');

use App\Entity\Empresa;

$obEmpresa = new Empresa;

//VALIDAÇÃO DO POST
if (isset($_POST['cnpj'], $_POST['razao_social'], $_POST['nome_fantasia'], $_POST['ramo'], $_POST['num_fun'], $_POST['descricao'])) {

    $obEmpresa->cnpj = $_POST['cnpj'];
    $obEmpresa->razao_social = $_POST['razao_social'];
    $obEmpresa->nome_fantasia = $_POST['nome_fantasia'];
    $obEmpresa->ramo = $_POST['ramo'];
    $obEmpresa->num_fun = $_POST['num_fun'];
    $obEmpresa->descricao = $_POST['descricao'];
    $obEmpresa->cadastrar();

    header('location: index-empresas.php?status=success');
    exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formulario-empresa.php';
include __DIR__ . '/includes/footer.php';
