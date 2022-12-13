<main>
    <section>
        <a href="index.php">
            <button class="btn btn-warning">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3"><?= TITLE ?></h2>

    <form method="post" class="form-empresa">
        <div class="form-group">
            <label>CNPJ</label>
            <input type="text" class="form-control input-cnpj" name="cnpj" value="<?= $obEmpresa->cnpj ?>" required>
        </div>

        <div class="form-group">
            <label>Razão social</label>
            <input type="text" class="form-control" name="razao_social" value="<?= $obEmpresa->razao_social ?>" required>
        </div>

        <div class="form-group">
            <label>Nome Fantasia</label>
            <input type="text" class="form-control" name="nome_fantasia" value="<?= $obEmpresa->nome_fantasia ?>" required>
        </div>

        <div class="form-group">
            <label>Ramo</label>
            <input type="text" class="form-control" name="ramo" value="<?= $obEmpresa->ramo ?>" required>
        </div>

        <div class="form-group">
            <label>Número de funcionários</label>
            <input type="number" class="form-control input-number" name="num_fun" value="<?= $obEmpresa->num_fun ?>" required>
        </div>

        <div class="form-group">
            <label>Descrição</label>
            <textarea class="form-control" name="descricao" rows="5" required><?= $obEmpresa->descricao ?></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>

    </form>

    <script>
        $('.input-cnpj').mask('00.000.000/0000-00', {reverse: true});
    </script>

</main>