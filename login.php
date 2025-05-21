<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.7.1.min.js" defer></script>
    <script src="js/bootstrap.js" defer></script>
    <title>Document</title>
</head>
<body>

    <div class="container mt-5">
        <div class="row     justify-content-center">
            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                <form method="post">
                    <div class="form-group">
                        <h1>Escolha o seu preferido</h1>
                        <input type="text" name="nome" class="form-control" id="nome"></input>
                        <input type="password" name="senha" class="form-control" id="senha"></input>
                        <input type="submit" class="btn btn-outline-primary" method="POST"></input>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row mt-5 justify-content-center">
        <?php
         if(isset($_POST['animal'])){
        


         }
        
        ?>
    </div>
</body>
</html>