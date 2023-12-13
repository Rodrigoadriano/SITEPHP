<h1>Cadastro de MARCAS</h1>

<form action="?page=marca-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome da MARCA</label>
        <input type="text" name="nome_marca" class="form-control" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>