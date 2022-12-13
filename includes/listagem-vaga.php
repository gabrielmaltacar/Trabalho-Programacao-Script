<?php
$resultados = '';
foreach ($vagas as $vaga) {
    $resultados .= '<tr>
                      <td>' . $vaga->id . '</td>
                      <td>' . $vaga->empresa . '</td>
                      <td>' . $vaga->titulo . '</td>
                      <td>' . $vaga->descricao . '</td>
                      <td>' . ($vaga->ativo == 's' ? 'Ativo' : 'Inativo') . '</td>
                      <td>' . date('d/m/Y à\s H:i:s', strtotime($vaga->data)) . '</td>
                      <td>
                        <a href="editar-vaga.php?id=' . $vaga->id . '"class="btn btn-primary m-1">Editar</a>
                        <a href="excluir-vaga.php?id=' . $vaga->id . '" class="btn btn-danger m-1">Excluir</a>
                      </td>
                    </tr>';
}

$resultados = strlen($resultados) ? $resultados : '<tr>
                                                       <td colspan="6" class="text-center">
                                                              Nenhuma vaga encontrada
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
    <h2 class="text-center styleh2 karma pt-4">Vagas</h2>
    <section>
        <a href="cadastrar-vaga.php">
            <button class="btn btn-success">Nova vaga</button>
        </a>
    </section>
    <br>
    <?= $mensagem ?>
    <section class="table-responsive">
        <table class="table table-hover table-vagas text-center bg-light mt-3">
            <thead>
                <tr class="table-info">
                    <th>ID</th>
                    <th>Empresa</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th>Data</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?= $resultados ?>
            </tbody>
        </table>

    </section>


</main>