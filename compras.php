<?php session_start(); 
if(isset($_SESSION['email'])){
    $pedidos = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KUAMRKT</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css" >
    <link rel="stylesheet" href="SweetAlert/dist/sweetalert2.min.css">
    <script src="SweetAlert/dist/sweetalert2.all.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
</head>
<body>
    <div> 
        <nav class="navbar navbar-expand-l navbar-dark bg-dark col-md-12">
                <div class="navbar-brand dropdown">
                    <a href="sesion.php" class="navbar-brand font-weight-bold">KUAMRKT</a>
                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Categorias</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="categorias/frutasyv.php">Frutas y Verduras</a>
                            <a class="dropdown-item" href="categorias/carniceria.php">Carniceria</a>
                            <a class="dropdown-item" href="categorias/lacteos.php">Lacteos</a>
                            <a class="dropdown-item" href="categorias/gym.php">Gimnasio</a>
                            <a class="dropdown-item" href="categorias/electronicos.php">Electronicos</a>
                            <a class="dropdown-item" href="categorias/+cotas.php">Mascotas</a>
                            <a class="dropdown-item" href="categorias/farmacia.php">Farmacia</a>
                            <a class="dropdown-item" href="categorias/juguetes.php">Juguetes</a>
                        </div>
                    </div>
                    <div class="md-form mx-6">
                    <form class = "form-inline my-2 my-lg-0">
                        <a class="navbar-brand font-weight-bold">MIS COMPRAS</a>
                    </form>
                </div>
                <div>
                    <div class="navbar-brand dropdown">
                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">Bienvenid@</button>
                        <div class="dropdown-menu">
                            <a href="informacion.php" class="dropdown-item">Informacion</a>
                            <a href="login_backend/cerrar.php" class="dropdown-item">Cerrar Sesion</a>
                            <a class="dropdown-item"><?php echo $_SESSION['email']; ?></a>
                        </div>
                        <a href="carrito.php" class="navbar-brand"><i class="fas fa-shopping-cart fa-lg"></i></a>
                    </div>
                </div>
        </nav>
    </div>
    <script type="text/javascript">
    $(document).ready(function(){
            $.ajax({
                url:'categorias/catbdd/get_pedidos.php',//cambiar a productos destacados
                type:'POST',
                data:{},
                success:function(data){
                    console.log(data);
                    let html=''
                    for(var i = 0; i < data.datos.length;i++){
                        $subtotal = data.datos[i].precio * data.datos[i].cantidad;
                        html+=
                        '<tr>'+
                                '<td><img src="images/'+data.datos[i].producto+'" width="86" height="65"></td>'+
                                '<td>'+data.datos[i].nombre+'</td>'+
                                '<td>'+'$'+data.datos[i].precio+'</td>'+
                                '<td>'+data.datos[i].cantidad+'</td>'+
                                '<td>'+data.datos[i].piezas_kilos+'</td>'+
                                '<td>'+'$'+$subtotal.toFixed(2)+'</td>'+
                        '</tr>';
                        }
                            document.getElementById("pedidos").innerHTML=html;      
                        },
                            error:function(err){
                                console.log(err);
                        }
                    });
                });
            $(document).ready(function(){
                        $.ajax({
                            url:'categorias/catbdd/get_pedidos.php',//cambiar a productos destacados
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
                                '<tr>'+
                                    '<td class="d-flex justify-content-center h4">'+'$' + total.toFixed(2) + '</td>'+
                                '</tr>';
                                document.getElementById("total").innerHTML=html;      
                        },
                        
                            error:function(err){
                                console.log(err);
                        }
                    });
                });
                $(document).ready(function(){
            $.ajax({
                url:'categorias/catbdd/get_compras.php',//cambiar a productos destacados
                type:'POST',
                data:{},
                success:function(data){
                    console.log(data);
                    let html=''
                    for(var i = 0; i < data.datos.length;i++){
                        $subtotal = data.datos[i].precio * data.datos[i].cantidad;
                        html+=
                        '<tr>'+
                                '<td><img src="images/'+data.datos[i].producto+'" width="86" height="65"></td>'+
                                '<td>'+data.datos[i].nombre+'</td>'+
                                '<td>'+'$'+data.datos[i].precio+'</td>'+
                                '<td>'+data.datos[i].cantidad+'</td>'+
                                '<td>'+data.datos[i].piezas_kilos+'</td>'+
                                '<td>'+'$'+$subtotal.toFixed(2)+'</td>'+
                        '</tr>';
                        }
                            document.getElementById("compras").innerHTML=html;      
                        },
                            error:function(err){
                                console.log(err);
                        }
                    });
                });
    </script>
    <div class="container-fluid">
        <div class="col-md-11 my-sm-3 mx-sm-5">
            <table class="table table-hover" >
                <thead>
                    <tr class="table-secondary" >
                        <th scope="col" class="d-flex justify-content-center">Pedidos</th>
                    </tr>
                </thead>
            </table>
            <table class="table table-hover" >
                <thead> 
                    <tr class="table-primary" >
                        <th scope="col">Producto</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Piezas/Kilos</th>
                        <th scope="col">Total</th>
                        <th scope="col"></th>
                    </tr>
                </thead>    
                <tbody id="pedidos">
                </tbody>
            </table>
        <table class="table table-hover">
            <thead> 
                <tr class="table-primary">
                    <th scope="col" class="d-flex justify-content-center">Total a pagar</th>
                </tr>
            </thead>
            <tbody id="total">
            </tbody>
        </table>
        <script>
            $(document).ready(function(){
                        $.ajax({
                            url:'categorias/catbdd/get_pedidos.php',//cambiar a productos destacados
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
                                '<a href="carrito_backend/pedidos_update.php"class="btn btn-success btn-lg">Recibido</a>';
                                if(total > 0){
                                    document.getElementById("boton").innerHTML=html;
                                }                             
                        },
                        
                            error:function(err){
                                console.log(err);
                        }
                    });
                });
            </script>
            <div class="d-flex justify-content-center my-sm-3 mx-sm-5" id="boton"></div>
        </div>
    </div>
</body>
</html>
<?php
if(isset($_SESSION['pedidos'])) {
    $pedidos = $_SESSION['pedidos'];
    echo $pedidos;
    $_SESSION['pedidos'] = '';
}
} else{
    header ('location: login_backend/login.php');
}?>