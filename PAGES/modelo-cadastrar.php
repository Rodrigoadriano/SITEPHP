<h1>Cadastrar modelo</h1>


<form action="?page=modelo-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
    <label for="">Marca</label>
    <select name="id_marca" class="form-control"  >
        
        <?php 
            $sql = "SELECT * FROM marcas ";
            $res = $conn->query($sql);

            if ($res->num_rows>0) {
                while ($row = $res->fetch_object()) {
                    print "<option value='". $row->id_marca ."'> ". $row->nome_marca . " </option>";
                };

            }else{
                print "<option>SEM MARCAS</option>";
            };
        ?>    



    </select>
  
    </div>
    <div class="mb-3">
    <label for="">Modelo</label>
    <input type="text" name="nome_modelo" class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Cor</label>
    <input type="text" name="cor_modelo" class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Ano</label>
    <input type="number" name="ano_modelo" class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Placa</label>
    <input type="text" name="placa_modelo" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Enviar</button>


</form>