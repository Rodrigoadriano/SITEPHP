<h1>Lista de Marcas</h1>

<?php 
    $sql = "SELECT * FROM marcas";
    $res = $conn->query($sql);
    $qnt = $res->num_rows;

    if($qnt > 0) {
        print "<p>Encontrou <b> $qnt </b> resultado(s). </p>";
        print "<table class='table table-bordered table-striped table-hover'>";

        print "<tr>";
        print " <th> ID </th>"; ;
        print "<th> NOME </th>";
        print "<th> Ações </th>";
        print "</tr>";


        while($row = $res->fetch_object()) {
            print "<tr>";
            print " <td> " .$row->id_marca . "</td>"; ;
            print "<td>" .$row->nome_marca . "</td>";
            print "<td>
                <button onclick=\" location.href='?page=marca-editar&id_marca=$row->id_marca' \" class='btn btn-primary'>Editar</button>
                <button onclick=\" if(confirm('Tem certeza que deseja excluir?')){location.href='?page=marca-salvar&acao=excluir&id_marca=$row->id_marca'}else{false;}  \"class='btn btn-danger'>Excluir</button>

                </td>"; 
            print "</tr>";
        };
        print "</table>";
        






    }else {
        print "<p>Nenhum resultado encontrado.</p>";
        
    };



?>