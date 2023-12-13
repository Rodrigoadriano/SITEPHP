<?php 
    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $sql = "INSERT INTO marcas (nome_marca) VALUES (' ".$_POST['nome_marca']." ') ";
            $res = $conn->query($sql);

            if($res ==true) {
                print "<script> alert('Cadastro com sucesso!') </script>";   
                print "<script> location.href='?page=marca-listar' </script>";   
            
            }else{
                print "<script> alert('Falha') </script>";   
               // print "<script> location.href='?page=marca-listar' </script>"; 
            };

            break;
        case 'editar':
            $sql = "UPDATE marcas SET nome_marca = '".$_POST['nome_marca']." ' WHERE id_marca =". $_POST['id_marca'];
            $res = $conn->query($sql);
            if($res ==true) {
                //print "<script> alert('Editado com sucesso!') </script>";   
                print "<script> location.href='?page=marca-listar' </script>";   
            
            }else{
                print "<script> alert('Falha') </script>";   
               // print "<script> location.href='?page=marca-listar' </script>"; 
            };

            break;
        case 'excluir':
            $sql = "DELETE FROM marcas WHERE id_marca = " . $_REQUEST['id_marca'] ;
            $res = $conn->query($sql);

            if($res ==true) {
                //print "<script> alert('Excluído com sucesso!') </script>";   
                print "<script> location.href='?page=marca-listar' </script>";   
            
            }else{
                print "<script> alert('Falha') </script>";   
               // print "<script> location.href='?page=marca-listar' </script>"; 
            };

            break;
        
    }

?>