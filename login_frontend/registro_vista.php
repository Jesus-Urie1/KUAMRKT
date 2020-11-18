<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css" >
    <link rel="stylesheet" href="../SweetAlert/dist/sweetalert2.min.css">
    <script src="../SweetAlert/dist/sweetalert2.all.min.js"></script>
</head>
<body class="bg-light">
    <div class="d-flex justify-content-center m-5 p-5">
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <h1 class="text-secondary d-flex justify-content-center">Registrate</h1>
            <div class="row">
                <div class="col">
                    <input class="form-control  my-2" type="text" name="nombres" required placeholder="Nombre(s)*">
                    <input class="form-control  my-2" type="text" name="telefono" required placeholder="Telefono*">
                    <input class="form-control  my-2" type="text" name="calle" required placeholder="Calle*">
                    <input class="form-control  my-2" type="text" name="cp" required placeholder="Codigo postal*">
                    <input class="form-control  my-2" type="text" name="ecalles" placeholder="Entre calles (opcional)">
                    <input class="form-control  my-2" type="password" name="clave" required placeholder="Contraseña*">
                </div>
                <div class="col">
                    <input class="form-control  my-1" type="text" name="apellidos" required placeholder="Apellido(s)*">
                    <input class="form-control  my-2" type="text" name="email" required placeholder="Correo electronico*">
                    <div class="row">
                        <div class="col">
                            <input class="form-control  my-1" type="text" name="nexterior" required placeholder="Núm. exterior*">
                        </div>
                        <div class="col">
                            <input class="form-control  my-1" type="text" name="ninterior" placeholder="Núm. interior">
                        </div>
                    </div>
                    <input class="form-control  my-1" type="text" name="colonia" required placeholder="Colonia*">
                    <input class="form-control  my-2" type="text" name="referencias" placeholder="Referencias (opcional)">
                    <input class="form-control  my-2" type="password" name="confclave" required placeholder="Confirmar contraseña*">
                </div>
            </div>
            <?php if(!empty($error)): ?>
            <div class="h5">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>
            <button class="form-control btn btn-secondary my-2" type="submit">Registrar</button>
            <a href="../login_backed/login.php" class="text-secondary d-flex justify-content-center">Ingresar</a>
        </form>
        
    </div>
    
</body>
    
</html>