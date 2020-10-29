<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KUAMRKT</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
	<link href="style.css" rel="stylesheet">
</head>
<body>
<div> 
<nav class="navbar navbar-expand-l navbar-dark bg-dark col-md-12">
        <div>
            <a href="#" class="navbar-brand">KUAMRKT</a>
            <a href="#" class="navbar-brand">Iniciar Sesion</a>
        </div>
        <div class="md-form mx-6">
                <form class = "form-inline my-2 my-lg-0">
                    <input class = "form-control mr-sm-2" type = "text" placeholder = "Buscar" size="70">
                    <button class = "btn btn-secundaria my-2 my-sm-0" type = "submit"> <font style = "vertical-align: heredar;"> <font style = "vertical-align: heredar;"> Buscar </font> </font> </button>
                </form>
        </div>
        <div>
            <a href="#" class="navbar-brand">Pedidos</a>
            <a href="#" class="navbar-brand">Carrito</a>
        </div>
</nav>
</div>
<div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                    <button type="button" class="btn btn-primary my-sm-3 btn-block">Categoria</button>
                    <button type="button" class="btn btn-primary my-sm-3 btn-block">Categoria</button>
                    <button type="button" class="btn btn-primary my-sm-3 btn-block">Categoria</button>
                    <button type="button" class="btn btn-primary my-sm-3 btn-block">Categoria</button>
                    <button type="button" class="btn btn-primary my-sm-3 btn-block">Categoria</button>
                    <button type="button" class="btn btn-primary my-sm-3 btn-block">Categoria</button>
                    <button type="button" class="btn btn-primary my-sm-3 btn-block">Categoria</button>
                    <button type="button" class="btn btn-primary my-sm-3 btn-block">Categoria</button>
                    <button type="button" class="btn btn-primary my-sm-3 btn-block">Categoria</button>
                    <button type="button" class="btn btn-primary my-sm-3 btn-block">Categoria</button>
                    <button type="button" class="btn btn-primary my-sm-1 btn-block">Categoria</button>
                    
            </div>
            <div class="col-md-8 bg-primary  my-sm-3 mx-sm-5">
                <div class="d-flex justify-content-center "><h1>Productos destacados</h1></div>
                <div class="d-flex justify-content-center">
                        <!--<div id="slides" class="carousel slide" data-ride="carousel">
                            <ul class="carousel-indicators">
                                <li data-target="#slides" data-slide-to="0" class="active"></li>
                                <li data-target="#slides" data-slide-to="1"></li>
                                <li data-target="#slides" data-slide-to="2"></li>
                            </ul>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/charcuteria.jpg">
                                    <div class="carousel-caption">
                                        <h1 class="display-2">Bootstrap</h1>
                                        <h3>Complete Website Layout</h3>
                                        <button type="button" class="btn btn-outline-light btn-lg">VIEW DEMO</button>
                                        <button type="button" class="btn btn-primary btn-lg">Get Started</button>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                        <img src="images/lacteos.jpeg" alt="">
                                </div>
                                <div class="carousel-item">
                                        <img src="images/limpieza.jpg" alt="">
                                </div>
                            </div>
                        </div-->
                        <div class="container-fluid padding">
                            <div class="row padding">
                                <div class="col-md-4">
                                    <div class="card">
                                        <img class="card-img-top" src="img/panaderia.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Pan dulce</h4>
                                            <p class="card-text">9.50/pza</p> 
                                            <input class="sm-1" type="number" id="artic" name="articulos" min="1" max=""> <!--Añadir maximo segun el inventario--->
                                            <button type="button" class="btn btn-outline-secondary">Agregar al carrito</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img class="card-img-top" src="img/panaderia.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Pan dulce</h4>
                                            <p class="card-text">9.50/pza</p> 
                                            <input class="sm-1" type="number" id="artic" name="articulos" min="1" max=""> <!--Añadir maximo segun el inventario--->
                                            <button type="button" class="btn btn-outline-secondary">Agregar al carrito</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img class="card-img-top" src="img/panaderia.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Pan dulce</h4>
                                            <p class="card-text">9.50/pza</p> 
                                            <input class="sm-1" type="number" id="artic" name="articulos" min="1" max=""> <!--Añadir maximo segun el inventario--->
                                            <button type="button" class="btn btn-outline-secondary">Agregar al carrito</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
    </body>
</html>