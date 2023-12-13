<?php 
session_start();
if (empty($_SESSION)){
    echo "<script>location.href='indexo.php'</script>";
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <title>Site PHP ></title>
</head>
<body>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Carros</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Marcas
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?page=marca-listar">Listar</a></li>
                <li><a class="dropdown-item" href="?page=marca-cadastrar">Cadastrar marca</a></li>
            </ul>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Modelos
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?page=modelo-listar">Listar</a></li>
                <li><a class="dropdown-item" href="?page=modelo-cadastrar">Cadastrar modelo</a></li>
            </ul>
            </li>
        </ul>
        <form class="d-flex" action="indexo.php">
            <button class="btn btn-danger ml-2" >Logout</button>
        </form>
        </div>
    </div>
    </nav>

    <div class="container mt-3">
        <div class="row">
            <div class="col">

            <?php 
            
                //Inclide de conexão
                include('config.php');

                //Include das paginas
                switch (@$_REQUEST['page'] ){
                    //MARCAS
                    case 'marca-listar':
                        include('PAGES/marca-listar.php');
                        break;
                    case 'marca-cadastrar':
                        include('PAGES/marca-cadastrar.php');
                        break;
                    case 'marca-editar':
                            include('PAGES/marca-editar.php');
                        break;
                    case 'marca-salvar':
                        include('PAGES/marca-salvar.php');
                        break;
                    //MODELOS
                    case 'modelo-listar':
                        include('PAGES/modelo-listar.php');
                        break;
                    case 'modelo-cadastrar':
                        include('PAGES/modelo-cadastrar.php');
                        break;
                    case 'modelo-editar':
                            include('PAGES/modelo-editar.php');
                        break;
                    case 'modelo-salvar':
                        include('PAGES/modelo-salvar.php');
                        break;



                    
                    default:
                        print "<h1> Seja bem vindo ".$_SESSION['nome'] ." </h1>";

                        break;
                }
            
            
            
            ?>


            </div>
        </div>
    </div>



</body>
</html>