<?php session_start();

    if(isset($_SESSION['email'])) {
        header('location: ../sesion.php');
    }

    $error = '';
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $email = $_POST['email'];
        $clave = $_POST['clave'];
        $clave = hash('sha512', $clave);
        try{
            $conexion = new PDO('mysql:host=localhost;dbname=hsing_kuamrkt', 'hsing', 'H5*ing2020');
            }catch(PDOException $prueba_error){
                echo "Error: " . $prueba_error->getMessage();
            }
        
        $statement = $conexion->prepare('SELECT * FROM loginkua WHERE email = :email AND clave = :clave');
        
        $statement->execute(array(':email' => $email, ':clave' => $clave));
            
        $resultado = $statement->fetch();

        if ($resultado !== false){
            $_SESSION['email'] = $email;
            header('location: ../principal.php');
        }else{
            $error .= "<script>
            Swal.fire(
                'Error!',
                'La contraseña o el email son incorrectos!',
                'error'
                )
            </script>";
        }
    }
    
require '../login_frontend/login_vista.php';


?>