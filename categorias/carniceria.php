<?php session_start();
$carniceria = '';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >KUAMRKT - Carniceria</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css" >
    <link rel="stylesheet" href="../SweetAlert/dist/sweetalert2.min.css">
    <script src="../SweetAlert/dist/sweetalert2.all.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
</head>
<body>

    <div> 
        <nav class="navbar navbar-expand-l navbar-dark bg-dark col-md-12">
                <div>
                    <a href="../sesion.php" class="navbar-brand font-weight-bold">KUAMRKT</a>                    
                </div>
                <div class="navbar-brand dropdown">
                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Categorias</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="frutasyv.php">Frutas y Verduras</a>
                            <a class="dropdown-item active" href="carniceria.php">Carniceria</a>
                            <a class="dropdown-item" href="lacteos.php">Lacteos</a>
                            <a class="dropdown-item" href="gym.php">Gimnasio</a>
                            <a class="dropdown-item" href="electronicos.php">Electronicos</a>
                            <a class="dropdown-item " href="+cotas.php">Mascotas</a>
                            <a class="dropdown-item" href="farmacia.php">Farmacia</a>
                            <a class="dropdown-item" href="juguetes.php">Juguetes</a>
                        </div>
                    </div>
                <div class="md-form mx-6">
                        <form class = "form-inline my-2 my-lg-0">
                            <input id="search"class = "form-control mr-sm-2" type = "text" placeholder = "Buscar" size="70">
                        </form>
                </div>
                <div>
                <?php if(isset($_SESSION['email'])): ?>
                    <div class="navbar-brand dropdown">
                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">Bienvenid@</button>
                        <div class="dropdown-menu">
                            <a href="../compras.php" class="dropdown-item">Pedidos</a>
                            <a href="../informacion.php" class="dropdown-item">Informacion</a>
                            <a href="../login_backend/cerrar.php" class="dropdown-item">Cerrar Sesion</a>
                            <a class="dropdown-item active"><?php echo $_SESSION['email']; ?></a>
                        </div>
                    </div>
                <?php else:?>
                    <a href="../login_backend/login.php" class="navbar-brand"><i class="fas fa-user fa-lg"></i></a>
                <?php endif; ?>
                <?php if(isset($_SESSION['email'])): ?>
                    <script>
                    $(document).ready(function(){
                        $.ajax({
                            url:'../categorias/catbdd/get_carrito.php',//cambiar a productos destacados
                            type:'POST',
                            data:{},
                            success:function(data){
                            console.log(data);
                            let html=''
                            var total = 0;
                            for(var i = 0; i < data.datos.length;i++){
                                $subtotal = data.datos[i].precio * data.datos[i].cantidad;
                                total += $subtotal;
                            }
                                html+= 
                                    '<p class="d-flex justify-content-center navbar-brand h4">'+'$' + total.toFixed(2) + '</p>';
                                document.getElementById("total").innerHTML=html;      
                        },
                            error:function(err){
                                console.log(err);
                        }
                    });
                });
            </script>
                    <a href="../carrito.php" class="navbar-brand"><i class="fas fa-shopping-cart fa-lg"></i></a>
                    <a id="total"></a>
                <?php else:?>
                    <a href="../login_backend/login.php" class="navbar-brand"><i class="fas fa-shopping-cart fa-lg"></i></a>
                <?php endif; ?>
                </div>
        </nav>    
    </div>
    <div class="container-fluid" id="productos">
            
                <div class="d-flex justify-content-center">
                    <h1 class="font-weight-bold text-dark mt-4">Carniceria</h1>
                </div>
            <div class="col-md-11 border rounded  my-sm-3 mx-sm-5">
                <div class="d-flex justify-content-center">
                        <div class="container-fluid padding">
                            <div class="row padding mt-4" id="productosCat">
                                
                            </div>
                        </div>
                </div>
    
            </div>
    </div>
    <div class="container-fluid" id="barSearchResults">
        
            <div class="d-flex justify-content-center">
                <h1 class="font-weight-bold text-dark mt-4">Productos Encontrados</h1>
            </div>
        <div class="col-md-11 border rounded  my-sm-3 mx-sm-5">
            <div class="d-flex justify-content-center">
                    <div class="container-fluid padding">
                        <div class="row padding mt-4" id="ProdE">
                        
                        </div>
                    </div>
            </div>

        </div>
    </div>
        

        <script type="text/javascript">
            $(document).ready(function(){
                $.ajax({
                    url:'catbdd/get_prod_carniceria.php',//cambiar a productos destacados
                    type:'POST',
                    data:{},
                    success:function(data){
                        console.log(data);
                        let html=''
                        for(var i = 0; i < data.datos.length;i++){
                            $producto = data.datos[i].rutimg;
                            $nombre = data.datos[i].nombpro;
                            $precio = data.datos[i].precio;
                            $id = data.datos[i].id;
                            html+=
                        '<div class="col-md-3 mt-2 mb-4">'+
                        '<form action="../carrito_backend/pedidos_carniceria.php" method="post">'+
                        '<input type="hidden" name="precio" value="'+$precio+'"></input>'+
                        '<input type="hidden" name="producto" value="'+$producto+'"></input>'+
                        '<input type="hidden" name="nombre" value="'+$nombre+'"></input>'+
                                '<div class="card">'+
                                        '<img class="card-img-top" src="../images/'+data.datos[i].rutimg+'">'+
                                        '<div class="card-body">'+
                                                '<h4 class="card-title d-flex justify-content-center">'+data.datos[i].nombpro+'</h4>'+
                                                '<div class="input-group mb-3">'+
                                                        '<input required placeholder class="form-control mx-4 my-sm-0" size="10" type="number" min="1" name="cantidad" max="" value="1">'+
                                                        '<select class="custom-select" name="piezas_kilos">'+
                                                                '<option selected="" value="Kilo(s)">Kilo(s)</option>'+
                                                                '</select>'+
                                                '</div>'+
                                                                '<div>'+
                                                                        '<p class="h5 d-flex justify-content-center">'+'$'+data.datos[i].precio+ '</p>'+
                                                                '</div>'+
                                                                        '<div class="d-flex justify-content-center"> '+
  
                                                                            '<button class="btn btn-outline-secondary" type="submit">Agregar al carrito</button>'+
                                                                        '</div>'+
                                        '</div>'+
                                '</div>'+
                            '</div>'+
                        '</form>';
                        
                    }
                        document.getElementById("productosCat").innerHTML=html;
    
                    },
                    error:function(err){
                        console.log(err);
                    }
                });
            });
    
        </script> 
        <script
			  src="https://code.jquery.com/jquery-3.5.1.min.js"
			  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
              crossorigin="anonymous"></script>
<script src="../app.js"></script>
</body>
</html>
<?php if(isset($_SESSION['carniceria'])) {
    $carniceria = $_SESSION['carniceria'];
    echo $carniceria;
    $_SESSION['carniceria'] = '';
}
?>