<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analytics Decibeles</title>
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    
    <script
      src="https://kit.fontawesome.com/7e5b2d153f.js"
      crossorigin="anonymous"
    ></script>
    <script defer src="./index.js"></script>
</head>
<body>
   
    <header class="header">
        <nav class="nav">
            <a href="index.php" class="logo nav-link">Analytics Decibeles</a>
            <button class="nav-toggle" aria-label="Abrir menú">
                <i clas="fas fa-bars"></i>
           </button>
               <!--  <ul class="nav-menu" >
                    <li class="nav-menu-item">
                        <a href="#" class="nav-menu-link nav-link">Colombia</a>
                    </li>
                    <li class="nav-menu-item">
                        <a href="#" class="nav-menu-link nav-link">Venezuela</a>
                    </li>
                    <li class="nav-menu-item">
                        <a href="#" class="nav-menu-link nav-link">Ecuador</a>
                    </l>
                    <li class="nav-menu-item">
                        <a href="#" class="nav-menu-link nav-link nav-menu-link_active">Contacto</a>
                    </li>
                 </ul> -->
        </nav>
    </header>
    <main>
       <form action="validar.php" method="post">
        <h1>Conoce Tus Reportes</h1>
        <p>Usuario<input type="text" placeholder="ingrese su usuario" name="usuario"></p>
        <p>Contraseña<input type="password" placeholder="ingrese su contraseña" name="contraseña"></p>
        <input type="submit" value="Ingresar">
       </form>
    </main>
   
       <!-- <a href="https://datastudio.google.com/s/ix4RnJCbhEQ" class="btn btn-primary" role="button" data-bs-toggle="button" s>Toggle link</a>-->
    
</body>
</html>