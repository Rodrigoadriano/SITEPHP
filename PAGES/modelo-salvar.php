<?php 
/*
foreach ($_POST as $key => $value) {
    echo "Chave: " . $key . ", Valor: " . $value . "<br>";
};

*/


switch ($_REQUEST['acao']) {
    case 'cadastrar':
                // Utilizando Prepared Statements para evitar problemas de segurança e sintaxe
                $sql = "INSERT INTO modelo (marca_id_marca, nome_modelo, cor_modelo, ano_modelo, placa_modelo) VALUES (?, ?, ?, ?, ?)";

                $MARCA = $_POST["id_marca"];
                $NOME = $_POST["nome_modelo"];
                $COR =  $_POST["cor_modelo"];
                $ANO = $_POST["ano_modelo"];
                $PLACA = $_POST["placa_modelo"];
        
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("issis", $MARCA, $NOME, $COR, $ANO, $PLACA);
                
                if ($stmt->execute()) {
                    echo "<script>Alert(Inserção realizada com sucesso!)</script>";
                    echo "<script>location.href='?page=modelo-listar' </script>";
                } else {
                    echo "<script>Alert(Erro ao inserir dados: " . $conn->error . "</script>";
                }
          
                $stmt->close();
                $conn->close();
           
                break;
        case 'editar':
            $sql = "UPDATE modelo SET
            			marca_id_marca=".$_POST['id_marca'].",
						nome_modelo='".$_POST['nome_modelo']."',
						cor_modelo='".$_POST['cor_modelo']."',
						ano_modelo='".$_POST['ano_modelo']."',
						placa_modelo='".$_POST['placa_modelo']."'
					WHERE
						id_modelo=".$_POST['id_modelo'];
                        $res = $conn->query($sql);

                        if($res==true){
                            
                            print "<script>location.href='?page=modelo-listar';</script>";
                        }else{
                            print "<script>alert('Não foi possível!');</script>";
                            print "<script>location.href='?page=modelo-listar';</script>";
                        }
                        break;








            
        case 'excluir':
            $sql = "DELETE FROM modelo WHERE id_modelo = " . $_REQUEST['id_modelo'] ;
            $res = $conn->query($sql);

            if($res ==true) {
                
                print "<script> alert('Excluído com sucesso!') </script>"; 
                print "<script> location.href='?page=modelo-listar' </script>";   
            
            }else{
                print "<script> alert('Falha') </script>";   
               // print "<script> location.href='?page=marca-listar' </script>"; 
            };
            break;
        
    }
   
?>