<h1>Editar modelo</h1>
<?php 

    $sql_m = "SELECT * FROM modelo WHERE id_modelo =".  $_REQUEST['id_modelo'];
    $res_m = $conn->query($sql_m);
    $row_m = $res_m->fetch_object();
    

?>
<form action="?page=modelo-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_modelo" value=" <?php print $row_m->id_modelo; ?> ">

    <div class="mb-3">
    <label for="">Marca</label>
    <select name="id_marca" class="form-control">

        <?php 
            $sql = "SELECT * FROM marcas ";
            $res = $conn->query($sql);
            if ($res->num_rows>0) {
                while ($row = $res->fetch_object()) {

                    if($row_m->marca_id_marca == $row->id_marca){
                        print "<option value='".$row->id_marca."' selected>".$row->nome_marca."</option>";
                    }else{
                        print "<option value='".$row->id_marca."'>".$row->nome_marca."</option>";
                    };
                };         
            }else{
                print "<option>SEM MARCAS</option>";
            };
        ?>    



    </select>
  
    </div>

    <div class="mb-3">
    <label for="">Modelo</label>
    <input type="text" name="nome_modelo" class="form-control" value="<?php print $row_m->nome_modelo  ?>">
    </div>

    <div class="mb-3">
    <label for="">Cor</label>
    <input type="text" name="cor_modelo" class="form-control"value="<?php print $row_m->cor_modelo  ?>">
    </div>

    <div class="mb-3">
    <label for="">Ano</label>
    <input type="number" name="ano_modelo" class="form-control"value="<?php print $row_m->ano_modelo  ?>">
    </div>

    <div class="mb-3">
        <label for="">Placa</label>
        <input type="text" name="placa_modelo" class="form-control"value="<?php print $row_m->placa_modelo ?>">
    </div>
    
    <div class="mb-3">
        <button type="submit" class="btn btn-success ">Atualizar</button>
    </div>


</form>