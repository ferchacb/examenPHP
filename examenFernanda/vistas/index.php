<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Red Social!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../vistas/index.php">Registrar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="resultado2.php">Buscar Músico</a>
            </li>
        </ul>
        
        <form class="form-inline" action="/action_page.php">
            <input class="form-control mr-sm-2" type="text" placeholder="Buscar">
            <button class="btn btn-success" type="submit" href="resultado.php">Buscar</button>
        </form>
    </nav>
    <br>
    <h2><center>Red social para músicos!</h2>
    <div class="container" style="padding-top:50px; width: 500px;">
            <div class="card">
                  <div class="card-header">
                        Datos del Músico
                  </div>
                  <div class="card-body">
                        <form method = "POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="cedula">Cédula</label>
                            <input type="number" name="cedula" class="form-control" id="cedula" required placeholder="Ingrese la cédula">
                            
                        </div>
                              <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre" required placeholder="Ingrese el nombre">
                                    
                              </div>
                              <div class="form-group">
                                    <label for="apellidos">Apellidos</label>
                                    <input type="text" class="form-control" name="apellidos" id="apellidos" required placeholder="Ingrese los apellidos">
                    
                              </div>
                              <div class="form-group">
                                    <label for="direccion">Dirección</label>                                   
                                    <input type="text" class="form-control" name="direccion" id="direccion" required placeholder="Ingrese su domicilio">
                                
                              </div>
                              <div class="form-group">
                                    <label for="instrumento">Instrumento</label>                                   
                                    <input type="text" class="form-control" name="instrumento" id="instrumento" required placeholder="Ingrese su instrumento musical">
                    
                              </div>
                              <div class="form-group">
                                    <label for="generomusi">Género Musical</label>                                   
                                    <input type="text" class="form-control" name="generomusi" id="generomusi" required placeholder="Ingrese su género musical">
                    
                              </div>
                              <div class="form-group">
                                    <label for="correo">Correo</label>                                   
                                    <input type="text" class="form-control" name="correo" id="correo" required placeholder="Ingrese su correo">
                    
                              </div>
                              <div class="form-group">
                                    <label for="passw">Contraseña</label>                                   
                                    <input type="text" class="form-control" name="passw" id="passw" required placeholder="Ingrese su contraseña">
                                    
                              </div>
                            <div class="card">
                                <label for="passw">Foto</label>
                                <input type="file" name="img" id="foto" required>
                                </div>
                            </div>
                              
                              
                            
                              <input type="hidden" name="id" value>
                              <button type="submit" class="btn btn-primary">Registrar</button>

                        </form>
                  </div>
            </div>
      </div>
      <br>
      <br>
      <br>
</body>
</html>