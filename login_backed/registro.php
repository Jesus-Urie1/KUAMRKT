  
<?php session_start();

    if(isset($_SESSION['email'])) {
        header('location: ../sesion.php');
    }
    
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $nombres = $_POST['nombres'];
        $telefono = $_POST['telefono'];
        $calle = $_POST['calle'];
        $cp = $_POST['cp'];
        $ecalles = $_POST['ecalles'];
        $clave = $_POST['clave'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        $nexterior = $_POST['nexterior'];
        $ninterior = $_POST['ninterior'];
        $colonia = $_POST['colonia'];
        $referencias = $_POST['referencias'];
        $confclave = $_POST['confclave'];

        
        $error = '';
        try{
            $conexion = new PDO('mysql:host=localhost;dbname=hsing_kuamrkt', 'hsing', 'H5*ing2020');
        }catch(PDOException $prueba_error){
            echo "Error: " . $prueba_error->getMessage();
        }
        
        $clave_cifrada = hash('sha512', $clave);
        $statement = $conexion->prepare('SELECT * FROM loginkua WHERE email = :email LIMIT 1');
        $statement->execute(array(':email' => $email));
        $resultado = $statement->fetch();
            
                        
        if ($resultado != false){
            
            $error .= "<script>
            Swal.fire(
                'Error!',
                'Este email ya esta registrado!',
                'error'
                )
            </script>";
        }
            
        if ($clave != $confclave){
            $error .= "<script>
            Swal.fire(
                'Error!',
                'Las contraseñas no coinciden!',
                'error'
                )
            </script>";
        }
        
        if ($error == ''){
            $statement = $conexion->prepare('INSERT INTO loginkua (nombres, apellidos, telefono, email, calle, nexterior, ninterior, cp, colonia, ecalles, referencias, clave) VALUES (:nombres, :apellidos, :telefono, :email, :calle, :nexterior, :ninterior, :cp, :colonia, :ecalles, :referencias, :clave)');
            $statement->execute(array(
                
                ':nombres' => $nombres,
                ':apellidos' => $apellidos,
                ':telefono' => $telefono,
                ':email' => $email,
                ':calle' => $calle,
                ':nexterior' => $nexterior,
                ':ninterior' => $ninterior,
                ':cp' => $cp,
                ':colonia' => $colonia,
                ':ecalles' => $ecalles,
                ':referencias' => $referencias,
                ':clave' => $clave_cifrada
                
            ));
            
            $error .= "<script>
            Swal.fire(
                'Buen Trabajo!',
                'Usuario registrado exitosamente!',
                'success'
                )
            </script>";
        }
    }


    require '../login_frontend/registro_vista.php';

?>
