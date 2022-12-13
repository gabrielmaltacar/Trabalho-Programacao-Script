<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Entity\Empresa;

$empresas = Empresa::getEmpresas();
?>

<main>

    <section>
        <a href="index.php">
            <button class="btn btn-warning">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3"><?= TITLE ?></h2>
    <form method="post">
        <div class="form-group">
            <label>Empresa</label>
            <select class="form-control" name="empresa_id" required>
                <option selected disabled value="">Selecione uma empresa</option>
                <?php
                foreach ($empresas as $empresa) : ?>
                    <option <?= $empresa->id === $obVaga->empresa_id ? 'selected' : '' ?> value="<?= $empresa->id ?>"><?= $empresa->nome_fantasia ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label>Título</label>
            <input type="text" class="form-control" name="titulo" value="<?= $obVaga->titulo ?>" required>
        </div>

        <div class="form-group">
            <label>Descrição</label>
            <textarea class="form-control" name="descricao" rows="5" required><?= $obVaga->descricao ?></textarea>
        </div>

        <div class="form-group">
            <label>Status</label>

            <div>
                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="s" checked> Ativo
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="n" <?= $obVaga->ativo == 'n' ? 'checked' : '' ?>>
                        Inativo
                    </label>
                </div>
            </div>

        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>

    </form>

</main>