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
                </div>
                <div class="navbar-brand dropdown show">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Categorias</button>
                    <div class="dropdown-menu show">
                        <a class="dropdown-item" href="#">Frutas y Verduras</a>
                        <a class="dropdown-item" href="#">Carniceria</a>
                        <a class="dropdown-item" href="#">Lacteos</a>
                        <a class="dropdown-item" href="#">Lacteos</a>
                        <a class="dropdown-item" href="#">Lacteos</a>
                        <a class="dropdown-item" href="#">Lacteos</a>
                        <a class="dropdown-item" href="#">Lacteos</a>
                        <a class="dropdown-item" href="#">Lacteos</a>
                        <a class="dropdown-item" href="#">Lacteos</a>
                        <a class="dropdown-item" href="#">Lacteos</a>
                    </div>
                </div>
                <div class="md-form mx-6">
                        <form class = "form-inline my-2 my-lg-0">
                            <input class = "form-control mr-sm-2" type = "text" placeholder = "Buscar" size="70">
                            <button class = "btn btn-secundaria my-2 my-sm-0" type = "submit"> <font style = "vertical-align: heredar;"> <font style = "vertical-align: heredar;"> Buscar </font> </font> </button>
                        </form>
                </div>
                <div>
                <a href="#" class="navbar-brand"><i class="fas fa-user fa-lg"></i></a>
                    <a href="#" class="navbar-brand"> <i class="fas fa-sort"></i> Pedidos</i></a>
                    <a href="#" class="navbar-brand"><i class="fas fa-shopping-cart fa-lg"></i></a>
                </div>
        </nav>
    </div>
<div class="container-fluid">
            <div class="col-md-11 bg-primary  my-sm-3 mx-sm-5">
                <div class="d-flex justify-content-center"><h1> Productos </h1></div>
                <div class="d-flex justify-content-center">
                        <div class="container-fluid padding">
                            <div class="row padding">
                                <div class="col-md-3 mt-2">
                                    <div class="card">
                                        <img class="card-img-top" src="images/Manzanas.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title d-flex justify-content-center">Manzanas</h4>
                                            <div class="input-group mb-3">
                                                <input class="form-control mx-4 my-sm-0" size="10" type="number" id="artic" name="articulos" min="1" max=""> <!--Añadir maximo segun el inventario--->
                                                    <select class="custom-select">
                                                    <option selected="">Pieza(s)</option>
                                                    <option value="1">Kilo(s)</option>
                                                    </select>
                                            </div>
                                            <div>
                                                <p class="h5 d-flex justify-content-center"> $49.90 </p>
                                            </div>
                                            <div>    
                                                <a href="#" class="btn btn-outline-secondary">Agregar al carrito</a>
<!--Conectar con descripcion en BDD--->         <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                    <i class="fas fa-info-circle fa-lg"></i>
                                                </button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-2">
                                    <div class="card">
                                        <img class="card-img-top" src="images/Naranjas.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title d-flex justify-content-center">Naranjas</h4>
                                            <div class="input-group mb-3">
                                                <input class="form-control mx-4 my-sm-0" size="10" type="number" id="artic" name="articulos" min="1" max=""> <!--Añadir maximo segun el inventario--->
                                                    <select class="custom-select">
                                                    <option selected="">Pieza(s)</option>
                                                    <option value="1">Kilo(s)</option>
                                                    </select>
                                            </div>
                                            <div>
                                                <p class="h5 d-flex justify-content-center"> $49.90 </p>
                                            </div>
                                            <div>    
                                                <a href="#" class="btn btn-outline-secondary">Agregar al carrito</a>
<!--Conectar con descripcion en BDD--->         <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                    <i class="fas fa-info-circle fa-lg"></i>
                                                </button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 mt-2">
                                    <div class="card">
                                        <img class="card-img-top" src="images/Platanos.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title d-flex justify-content-center">Platanos</h4>
                                            <div class="input-group mb-3">
                                                <input class="form-control mx-4 my-sm-0" size="10" type="number" id="artic" name="articulos" min="1" max=""> <!--Añadir maximo segun el inventario--->
                                                    <select class="custom-select">
                                                    <option selected="">Pieza(s)</option>
                                                    <option value="1">Kilo(s)</option>
                                                    </select>

                                            </div>
                                            <div>
                                                <p class="h5 d-flex justify-content-center"> $49.90 </p>
                                            </div>
                                            <div>    
                                                <a href="#" class="btn btn-outline-secondary">Agregar al carrito</a>
<!--Conectar con descripcion en BDD--->         <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                    <i class="fas fa-info-circle fa-lg"></i>
                                                </button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 mt-2 mb-2">
                                    <div class="card">
                                        <img class="card-img-top" src="images/Mangos.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title d-flex justify-content-center">Mangos</h4>
                                            <div class="input-group mb-3">
                                                <input class="form-control mx-4 my-sm-0" size="10" type="number" id="artic" name="articulos" min="1" max=""> <!--Añadir maximo segun el inventario--->
                                                    <select class="custom-select">
                                                    <option selected="">Pieza(s)</option>
                                                    <option value="1">Kilo(s)</option>
                                                    </select>

                                            </div>
                                            <div>
                                                <p class="h5 d-flex justify-content-center"> $49.90 </p>
                                            </div>
                                            <div>    
                                                <a href="#" class="btn btn-outline-secondary">Agregar al carrito</a>
<!--Conectar con descripcion en BDD--->         <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                    <i class="fas fa-info-circle fa-lg"></i>
                                                </button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 mt-2">
                                    <div class="card">
                                        <img class="card-img-top" src="images/Naranjas.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title d-flex justify-content-center">Manzanas</h4>
                                            <div class="input-group mb-3">
                                                <input class="form-control mx-4 my-sm-0" size="10" type="number" id="artic" name="articulos" min="1" max=""> <!--Añadir maximo segun el inventario--->
                                                    <select class="custom-select">
                                                    <option selected="">Pieza(s)</option>
                                                    <option value="1">Kilo(s)</option>
                                                    </select>

                                            </div>
                                            <div>
                                                <p class="h5 d-flex justify-content-center"> $49.90 </p>
                                            </div>
                                            <div>    
                                                <a href="#" class="btn btn-outline-secondary">Agregar al carrito</a>
<!--Conectar con descripcion en BDD--->         <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                    <i class="fas fa-info-circle fa-lg"></i>
                                                </button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 mt-2">
                                    <div class="card">
                                        <img class="card-img-top" src="images/Naranjas.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title d-flex justify-content-center">Manzanas</h4>
                                            <div class="input-group mb-3">
                                                <input class="form-control mx-4 my-sm-0" size="10" type="number" id="artic" name="articulos" min="1" max=""> <!--Añadir maximo segun el inventario--->
                                                    <select class="custom-select">
                                                    <option selected="">Pieza(s)</option>
                                                    <option value="1">Kilo(s)</option>
                                                    </select>

                                            </div>
                                            <div>
                                                <p class="h5 d-flex justify-content-center"> $49.90 </p>
                                            </div>
                                            <div>    
                                                <a href="#" class="btn btn-outline-secondary">Agregar al carrito</a>
<!--Conectar con descripcion en BDD--->         <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                    <i class="fas fa-info-circle fa-lg"></i>
                                                </button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 mt-2">
                                    <div class="card">
                                        <img class="card-img-top" src="images/Naranjas.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title d-flex justify-content-center">Manzanas</h4>
                                            <div class="input-group mb-3">
                                                <input class="form-control mx-4 my-sm-0" size="10" type="number" id="artic" name="articulos" min="1" max=""> <!--Añadir maximo segun el inventario--->
                                                    <select class="custom-select">
                                                    <option selected="">Pieza(s)</option>
                                                    <option value="1">Kilo(s)</option>
                                                    </select>

                                            </div>
                                            <div>
                                                <p class="h5 d-flex justify-content-center"> $49.90 </p>
                                            </div>
                                            <div>    
                                                <a href="#" class="btn btn-outline-secondary">Agregar al carrito</a>
<!--Conectar con descripcion en BDD--->         <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                    <i class="fas fa-info-circle fa-lg"></i>
                                                </button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 mt-2">
                                    <div class="card">
                                        <img class="card-img-top" src="images/Naranjas.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title d-flex justify-content-center">Manzanas</h4>
                                            <div class="input-group mb-3">
                                                <input class="form-control mx-4 my-sm-0" size="10" type="number" id="artic" name="articulos" min="1" max=""> <!--Añadir maximo segun el inventario--->
                                                    <select class="custom-select">
                                                    <option selected="">Pieza(s)</option>
                                                    <option value="1">Kilo(s)</option>
                                                    </select>

                                            </div>
                                            <div>
                                                <p class="h5 d-flex justify-content-center"> $49.90 </p>
                                            </div>
                                            <div>    
                                                <a href="#" class="btn btn-outline-secondary">Agregar al carrito</a>
<!--Conectar con descripcion en BDD--->         <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                    <i class="fas fa-info-circle fa-lg"></i>
                                                </button>
                                            </div>
                                            
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