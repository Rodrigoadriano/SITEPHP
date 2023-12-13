<h1>Editar Marca</h1>
<?php 
    $sql = "SELECT * FROM marcas WHERE id_marca =" . $_REQUEST['id_marca'];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
    $nome = $row->nome_marca;
    $id = $row->id_marca;




?>
<form action="?page=marca-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_marca" value="<?php print $id ?>">
    <div class="mb-3">
        <label>Nome da MARCA</label>
        <input type="text" name="nome_marca" value="<?php print $nome ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Editar</button>

    </div>
</form>