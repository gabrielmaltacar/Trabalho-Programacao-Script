<?php
$resultados = '';
foreach ($empresas as $empresa) {
    $resultados .= '<tr>
                      <td>' . $empresa->id . '</td>
                      <td>' . $empresa->cnpj . '</td>
                      <td>' . $empresa->razao_social . '</td>
                      <td>' . $empresa->nome_fantasia . '</td>
                      <td>' . $empresa->ramo . '</td>
                      <td>' . $empresa->num_fun . '</td>
                      <td>' . $empresa->descricao . '</td>
                      <td>
                        <a href="editar-empresa.php?id=' . $empresa->id . '" class="btn btn-primary m-1">Editar</a>
                        <a href="excluir-empresa.php?id=' . $empresa->id . '" class="btn btn-danger m-1">Excluir</a>
                      </td>
                    </tr>';
}

$resultados = strlen($resultados) ? $resultados : '<tr>
                                                       <td colspan="6" class="text-center">
                                                              Nenhuma empresa encontrada
                                                       </td>
                                                    </tr>';

$mensagem = '';
if (isset($_GET['status'])) {
    switch ($_GET['status']) {
        case 'success':
            $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
            break;

        case 'error':
            $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
            break;
    }
}

?>
<main>
    <h2 class="text-center styleh2 karma pt-4">Empresas</h2>
    <section>
        <a href="cadastrar-empresa.php">
            <button class="btn btn-success">Nova empresa</button>
        </a>
    </section>
    <br>
    <?= $mensagem ?>
    <section class="table-responsive">
        <table class="table table-hover table-empresas text-center bg-light mt-3">
            <thead>
                <tr class="table-info">
                    <th>ID</th>
                    <th>CNPJ</th>
                    <th>Razão Social</th>
                    <th>Nome Fantasia</th>
                    <th>Ramo</th>
                    <th>Número de Funcionários</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?= $resultados ?>
            </tbody>
        </table>
    </section>
</main>