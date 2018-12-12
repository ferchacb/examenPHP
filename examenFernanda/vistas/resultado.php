<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=., initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buscar Músicos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Registrar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="resultado.php">Buscar Músico</a>
            </li>
        </ul>
    </nav>
    <br>

    <div class="container" style="padding-top:50px; width: 500px;">
        <div class="card">
            <div class="card-header">
                Búsqueda de Músicos
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <?php if(isset($musico["nombre"])):?>
                            <input type="text" class="form-control" name="nombre" value="<?php echo sanitize($musico["nombre"]);?>" id="nombre">
                    <?php else:?>
                    <input type="text" class="form-control" name="nombre" id="nombre" required placeholder="Ingrese el nombre">
                    <?php endif;?>
                </div>
                <div class="form-group">
                    <label for="instrumento">Instrumento</label>                                   
                    <?php if(isset($musico["instrumento"])):?>
                            <input type="text" class="form-control" name="instrumento" value="<?php echo sanitize($musico["instrumento"]);?>" id="instrumento" >
                    <?php else:?>
                            <input type="text" class="form-control" name="instrumento" id="instrumento" required placeholder="Ingrese su instrumento musical">
                    <?php endif;?>
                </div>
                <div class="form-group">
                    <label for="generomusi">Género Musical</label>                                   
                    <?php if(isset($musico["generomusi"])):?>
                            <input type="text" class="form-control" name="generomusi" value="<?php echo sanitize($musico["generomusi"]);?>" id="generomusi" >
                    <?php else:?>
                            <input type="text" class="form-control" name="generomusi" id="generomusi" required placeholder="Ingrese su género musical">
                    <?php endif;?>
                </div>
                <input type="hidden" name="id" value>
                                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </div>
    </div>

    
</body>
</html>