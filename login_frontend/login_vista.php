<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">
    <link rel="stylesheet" href="../SweetAlert/dist/sweetalert2.min.css">
    <script src="../SweetAlert/dist/sweetalert2.all.min.js"></script>
    
</head>
<body class="bg-light">
    <div class="d-flex justify-content-center m-5 p-5">
 
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post"> 
            <a href="/sesion.php" class="h1 text-secondary d-flex justify-content-center">KUAMRKT</a>
            <input class="form-control  my-2" type="text" name="email"  size="30" required placeholder="Ingresar email">
            <input class="form-control  my-2" type="password" name="clave"  size="30" required placeholder="Ingresar contraseña">
            <?php if(!empty($error)): ?>
            <div class="h5">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>
            <button class="form-control btn btn-secondary my-2" type="submit">Ingresar</button>
            <a href="../login_backed/registro.php" class="text-secondary d-flex justify-content-center">Registrate</a>
        </form>
    </div>
    

</body>
</html>