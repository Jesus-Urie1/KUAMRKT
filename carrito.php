<?php session_start(); 
if(isset($_SESSION['email'])){
    $eliminar = '';
    $compra = '';
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
                <div>
                    <form>
                        <a class="navbar-brand font-weight-bold">CARRITO DE COMPRAS</a>
                    </form>
                </div>
                <div>
                <?php if(isset($_SESSION['email'])): ?>
                    <div class="navbar-brand dropdown">
                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">Mi cuenta</button>
                        <div class="dropdown-menu">
                            <a href="compras.php" class="dropdown-item">Pedidos</a>
                            <a href="informacion.php" class="dropdown-item">Informacion</a>
                            <a href="login_backend/cerrar.php" class="dropdown-item">Cerrar Sesion</a>
                            <a class="dropdown-item active"><?php echo $_SESSION['email']; ?></a>
                        </div>
                        
                    </div>
                <?php else:?>
                    <a href="login_backend/login.php" class="navbar-brand"><i class="fas fa-user fa-lg"></i></a>
                <?php endif; ?>
                </div>
        </nav>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $.ajax({
                url:'categorias/catbdd/get_carrito.php',//cambiar a productos destacados
                type:'POST',
                data:{},
                success:function(data){
                    console.log(data);
                    let html=''
                    for(var i = 0; i < data.datos.length;i++){
                        $subtotal = data.datos[i].precio * data.datos[i].cantidad;
                        $id = data.datos[i].id;
                        html+=
                        '<tr>'+
                                '<td><img src="images/'+data.datos[i].producto+'" width="86" height="65"></td>'+
                                '<td>'+data.datos[i].nombre+'</td>'+
                                '<td>'+'$'+data.datos[i].precio+'</td>'+
                                '<td>'+data.datos[i].cantidad+'</td>'+
                                '<td>'+data.datos[i].piezas_kilos+'</td>'+
                                '<td>'+'$'+$subtotal.toFixed(2)+'</td>'+
                                '<td><a href="carrito_backend/eliminar.php?id='+$id+'" class="btn btn-outline-secondary">Eliminar</a></td>'+
                        '</tr>';
                        }
                            document.getElementById("lista_p").innerHTML=html;      
                        },
                            error:function(err){
                                console.log(err);
                        }
                    });
                });
                $(document).ready(function(){
                        $.ajax({
                            url:'categorias/catbdd/get_carrito.php',//cambiar a productos destacados
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
                
            </script>

<div class="container-fluid" id="productos">
    <div class="col-md-11 my-sm-3 mx-sm-5">
        <div class="d-flex justify-content-center">
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
            <tbody id="lista_p">
            </tbody>
        </table>
        </div>
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
                            url:'categorias/catbdd/get_carrito.php',//cambiar a productos destacados
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
                                '<a href="carrito_backend/compras_update.php"class="btn btn-success btn-lg">Enviar a mi domicilio</a>';
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
            <div class="d-flex justify-content-center" id="boton"></div>
    </div>
</div>    
</body>
</html>
<?php 
if(isset($_SESSION['eliminar'])) {
    $eliminar = $_SESSION['eliminar'];
    echo $eliminar;
    $_SESSION['eliminar'] = '';
}
if(isset($_SESSION['compra'])) {
    $compra = $_SESSION['compra'];
    echo $compra;
    $_SESSION['compra'] = '';
}
} else{
    header ('location: login_backend/login.php');
}?>