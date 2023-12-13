<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .lg{
            width: 100%;
            height: 100vh;
            align-items: center;
            justify-content: center;
            display: flex;

        };

        body{
            background-color: blanchedalmond;
        };



    </style>
</head>
<body>
    <div class="lg">
        <div class="container">
            <div class="row">
            <div class="col-lg-4 offset-lg-4">

            <div class="card">
                <div class="card-body"><h3>Entrar</h3>
                <div class="card-body">
                    <form action="login.php" method="POST">
                        
                        <div class="mb-3">
                            <label for="">Usuário</label>
                            <input type="text" name="usuario" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Senha</label>
                            <input  name="senha" class="form-control" type="password">
                            
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </div>
                        
                        
                        
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
</div>






</body>
</html>