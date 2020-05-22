<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>

    
    <!--Bootstrap-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
    <!--css-->
    <link rel="stylesheet" href="static/css/portafolio.css">

    <script src="static/popper/popper.min.js"></script>
</head>
<body>
   
       
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <a class="navbar-brand text-light" href="#">Germán Contreras</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link text-light" href="#">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-light" href="#">Portafolio</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                      </a>
                      <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-light" href="#">Action</a>
                        <a class="dropdown-item text-light" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-light" href="#">Something else here</a>
                      </div>
                    </li>
                  </ul>
                  
                </div>
        </nav>
    </header>
    
    <div class="container-fluid">
      <br>
      <h1 class="text-light">Portafolio de proyectos</h1>
      <br><br>
      <div class="container bg-secondary rounded" id="lista">
        <!--Lista de proyectos-->
        <ul class="list-unstyled">
        <?php
          $conexion = mysqli_connect("localhost","root","","web_personal") or
            die("Problemas con la conexión");
            $registros = mysqli_query($conexion, "SELECT *FROM proyecto") or
              die("Error: " . mysqli_error($conexion));
            while($reg = mysqli_fetch_array($registros)): ?>
                
              <li class="media border-top border-bottom border-dark">
                <img class="mr-3"src="static/img/tecnidata.png" alt="imagen proyecto" style="width: 40%;" id="image_portafolio">
                  <div class="media-body">
                    <h5 class="mt-0 mb-1"><?php echo $reg['nombre']?></h5>
                      <?php echo $reg['descripcion'] ?>
                  </div>
              </li>
            <?php endwhile; ?>
        </ul>
      </div>
    </div>
   

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <footer class="bg-dark align-self-end">
        <br>
        <p class="text-light" style="margin-bottom: 5px;">&copy;2020 Germán Contreras. Todos los derechos reservados.</p>
        <a href="https://www.github.com/dargor980"><img src="static/img/redes-sociales.svg" style="width: 30px;height: 30px; display: block;margin:auto;"></a>
    </footer>
</body>
</html>