<?php 
    session_start();

    if(empty($_POST) || empty($_POST['usuario']) || empty($_POST['senha'])) {
        echo "<script>window.location.href='indexo.php';</script>";
    }
    include('config.php');

    $user = $_POST['usuario'];
    $pass = $_POST['senha'];

    $sql = "SELECT * FROM users WHERE user ='".$user."' AND senha ='". $pass . "'";
    echo $sql;
    $res = $conn->query($sql) or die($conn->error);
    $row = $res->fetch_object();
    $qnt = $res->num_rows;
    if ($qnt>0) {
    
    $_SESSION['usuario'] = $user;
    $_SESSION['senha'] = $row->senha;
    $_SESSION['nome'] = $row->nome;
    echo "<script> window.location.href='index.php'</script>";
}else{ 

    echo "<script> alert('Erro!!')</script>";
    echo "<script> window.location.href='indexo.php'</script>";
    
     };

     

?>