<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >KUAMRKT - Mascotas</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css" >
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
                    <a href="../sesion.php" class="navbar-brand">KUAMRKT</a>                    
                </div>
                <div class="navbar-brand dropdown">
                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Categorias</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="frutasyv.php">Frutas y Verduras</a>
                            <a class="dropdown-item " href="carniceria.php">Carniceria</a>
                            <a class="dropdown-item" href="lacteos.php">Lacteos</a>
                            <a class="dropdown-item" href="gym.php">Gimnasio</a>
                            <a class="dropdown-item" href="electronicosphpl">Electronicos</a>
                            <a class="dropdown-item " href="+cotas.php">Mascotas</a>
                            <a class="dropdown-item active" href="farmacia.php">Farmacia</a>
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
                            <a href="#" class="dropdown-item">Pedidos</a>
                            <a href="../login_backed/cerrar.php" class="dropdown-item">Cerrar Sesion</a>
                            <a class="dropdown-item"><?php echo $_SESSION['email']; ?></a>
                        </div>
                    </div>
                <?php else:?>
                    <a href="../login_backed/login.php" class="navbar-brand"><i class="fas fa-user fa-lg"></i></a>
                <?php endif; ?>
                <?php if(isset($_SESSION['email'])): ?>
                    <a href="#" class="navbar-brand"><i class="fas fa-shopping-cart fa-lg"></i></a>
                <?php else:?>
                    <a href="../login_backed/login.php" class="navbar-brand"><i class="fas fa-shopping-cart fa-lg"></i></a>
                <?php endif; ?>
                </div>
        </nav>    
    </div>
    <div class="container-fluid" id="productos">
            <div class="col-md-11 bg-primary  my-sm-3 mx-sm-5">
                <div class="d-flex justify-content-center">
                    <h1>Farmacia</h1>
                </div>
                <div class="d-flex justify-content-center">
                        <div class="container-fluid padding">
                            <div class="row padding" id="productosCat">
                                
                            </div>
                        </div>
                </div>
    
            </div>
    </div>
    <div class="container-fluid" id="barSearchResults">
        <div class="col-md-11 bg-primary  my-sm-3 mx-sm-5">
            <div class="d-flex justify-content-center">
                <h1>Productos Encontrados</h1>
            </div>
            <div class="d-flex justify-content-center">
                    <div class="container-fluid padding">
                        <div class="row padding" id="ProdE">
                        
                        </div>
                    </div>
            </div>

        </div>
    </div>
        

        <script type="text/javascript">
            $(document).ready(function(){
                $.ajax({
                    url:'catbdd/get_prod_farmacia.php',//cambiar a productos destacados
                    type:'POST',
                    data:{},
                    success:function(data){
                        console.log(data);
                        let html=''
                        for(var i = 0; i < data.datos.length;i++){
                            html+=
                            '<div class="col-md-3 mt-2 mb-4">'+
                                    '<div class="card">'+
                                            '<img class="card-img-top" src="../images/'+data.datos[i].rutimg+'">'+
                                            '<div class="card-body">'+
                                                    '<h4 class="card-title d-flex justify-content-center">'+data.datos[i].nombpro+'</h4>'+
                                                    '<div class="input-group mb-3">'+
                                                            '<input class="form-control mx-4 my-sm-0" size="10" type="number" id="artic" name="articulos" min="1" max="">'+
                                                            '<select class="custom-select">'+
                                                                    '<option selected="">Pieza(s)</option>'+
                                                                    '<option value="1">Kilo(s)</option>'+
                                                                    '</select>'+
                                                    '</div>'+
                                                                    '<div>'+
                                                                            '<p class="h5 d-flex justify-content-center">'+data.datos[i].precio+ '</p>'+
                                                                    '</div>'+
                                                                            '<div> '+   
                                                                                    '<a href="#" class="btn btn-outline-secondary">Agregar al carrito</a>'+
                                                                                    '<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">'+
                                                                                            '<i class="fas fa-info-circle fa-lg"></i>'+
                                                                                    '</button>'+
                                                                            '</div>'+
                                            
                                            '</div>'+
                                    '</div>'+
                            '</div>';   
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