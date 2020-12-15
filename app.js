$(function(){
    var URLactual = window.location.href;
    console.log(URLactual);
    //escondemos los resultados para solo sacarlos cuando haya una busqueda
    $('#barSearchResults').hide();
   
        //cada vez que una tecla se presione una tecla en el buscador, que haga una busqueda
        $('#search').keyup(function(e){

           if($('#search').val()){
                let search = $('#search').val();
                console.log(search);
                console.log(this.url)
        
                //usamos la funcion ajax la cual nos pide un obj
                //cambiar url en host a https://hs-ingenieria.com.mx/
                if(URLactual=="https://hs-ingenieria.com.mx/" || URLactual=="https://hs-ingenieria.com.mx/sesion.php" || URLactual=="https://hs-ingenieria.com.mx/principal.php"){//cambiar los urlsssssssssss
                    $.ajax({
                        url: 'servicios/search_products.php',
                        type: 'POST',
                        data: {
                            search  
                        },
                        success:function(data){
                            console.log(data);
                            
                            
                            let html=''
                            for(var i = 0; i < data.datos.length;i++){
                                $producto = data.datos[i].rutimg;
                                $nombre = data.datos[i].nombpro;
                                $precio = data.datos[i].precio;
                                $id = data.datos[i].id;
                                if(data.datos[i].tipo=="kg"){
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
                                }if(data.datos[i].tipo=="kp"){
                                    html+=
                                    '<div class="col-md-3 mt-2 mb-4">'+
                                    '<form action="../carrito_backend/pedidos_frutasyv.php" method="post">'+
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
                                                                            '<option selected="" value="Pieza(s)">Pieza(s)</option>'+
                                                                            '<option value="Kilo(s)">Kilo(s)</option>'+
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


                                }if(data.datos[i].tipo==""){
                                    html+=
                                    '<div class="col-md-3 mt-2 mb-4">'+
                                    '<form action="carrito_backend/pedidos_index.php" method="post">'+
                                    '<input type="hidden" name="precio" value="'+$precio+'"></input>'+
                                    '<input type="hidden" name="producto" value="'+$producto+'"></input>'+
                                    '<input type="hidden" name="nombre" value="'+$nombre+'"></input>'+
                                            '<div class="card">'+
                                                    '<img class="card-img-top" src="images/'+data.datos[i].rutimg+'">'+
                                                    '<div class="card-body">'+
                                                            '<h4 class="card-title d-flex justify-content-center">'+data.datos[i].nombpro+'</h4>'+
                                                            '<div class="input-group mb-3">'+
                                                                    '<input required placeholder class="form-control mx-4 my-sm-0" size="10" type="number" min="1" name="cantidad" max="" value="1">'+
                                                                    '<select class="custom-select" name="piezas_kilos">'+
                                                                            '<option selected="" value="Piezas">Pieza(s)</option>'+
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
                                
                                
                            }
                            document.getElementById("ProdE").innerHTML=html;
                            $('#productos').hide();
                            $('#barSearchResults').show();
                            $('#ProdE').show();
                        },
                        error:function(err){
                            console.log(err);
                        }
            
                    })//ajax es un metodo de jquery que recibe un obj
                }else if(URLactual=="https://hs-ingenieria.com.mx/categorias/frutasyv.php"){
                    $.ajax({
                        url: '../servicios/searchP/searchp_frutasyv.php',
                        type: 'POST',
                        data: {
                            search  
                        },
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
                            '<form action="../carrito_backend/pedidos_frutasyv.php" method="post">'+
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
                                                                    '<option selected="" value="Pieza(s)">Pieza(s)</option>'+
                                                                    '<option value="Kilo(s)">Kilo(s)</option>'+
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
                            document.getElementById("ProdE").innerHTML=html;
                            $('#productos').hide();
                            $('#barSearchResults').show();
                            $('#ProdE').show();
                        },
                        error:function(err){
                            console.log(err);
                        }
            
                    })
                }else if(URLactual=="https://hs-ingenieria.com.mx/categorias/carniceria.php"){
                    $.ajax({
                        url: '../servicios/searchP/searchp_carniceria.php',
                        type: 'POST',
                        data: {
                            search  
                        },
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
                            document.getElementById("ProdE").innerHTML=html;
                            $('#productos').hide();
                            $('#barSearchResults').show();
                            $('#ProdE').show();
                        },
                        error:function(err){
                            console.log(err);
                        }
            
                    })
                }else if(URLactual=="https://hs-ingenieria.com.mx/categorias/+cotas.php"){
                    $.ajax({
                        url: '../servicios/searchP/searchp_mascotas.php',
                        type: 'POST',
                        data: {
                            search  
                        },
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
                            '<form action="../carrito_backend/pedidos_+cotas.php" method="post">'+
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
                                                                    '<option selected="" value="Pieza(s)">Pieza(s)</option>'+
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
                            document.getElementById("ProdE").innerHTML=html;
                            $('#productos').hide();
                            $('#barSearchResults').show();
                            $('#ProdE').show();
                        },
                        error:function(err){
                            console.log(err);
                        }
            
                    })
                }else if(URLactual=="https://hs-ingenieria.com.mx/categorias/electronicos.php"){
                    $.ajax({
                        url: '../servicios/searchP/searchp_electronicos.php',
                        type: 'POST',
                        data: {
                            search  
                        },
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
                            '<form action="../carrito_backend/pedidos_elec.php" method="post">'+
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
                                                                    '<option selected="" value="Pieza(s)">Pieza(s)</option>'+
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
                            document.getElementById("ProdE").innerHTML=html;
                            $('#productos').hide();
                            $('#barSearchResults').show();
                            $('#ProdE').show();
                        },
                        error:function(err){
                            console.log(err);
                        }
            
                    })
                }else if(URLactual=="https://hs-ingenieria.com.mx/categorias/farmacia.php"){
                    $.ajax({
                        url: '../servicios/searchP/searchp_farmacia.php',
                        type: 'POST',
                        data: {
                            search  
                        },
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
                            '<form action="../carrito_backend/pedidos_farmacia.php" method="post">'+
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
                                                                    '<option selected="" value="Pieza(s)">Pieza(s)</option>'+
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
                            document.getElementById("ProdE").innerHTML=html;
                            $('#productos').hide();
                            $('#barSearchResults').show();
                            $('#ProdE').show();
                        },
                        error:function(err){
                            console.log(err);
                        }
            
                    })
                }else if(URLactual=="https://hs-ingenieria.com.mx/categorias/gym.php"){
                    $.ajax({
                        url: '../servicios/searchP/searchp_gym.php',
                        type: 'POST',
                        data: {
                            search  
                        },
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
                            '<form action="../carrito_backend/pedidos_gym.php" method="post">'+
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
                                                                    '<option selected="" value="Pieza(s)">Pieza(s)</option>'+
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
                            document.getElementById("ProdE").innerHTML=html;
                            $('#productos').hide();
                            $('#barSearchResults').show();
                            $('#ProdE').show();
                        },
                        error:function(err){
                            console.log(err);
                        }
            
                    })
                }else if(URLactual=="https://hs-ingenieria.com.mx/categorias/juguetes.php"){
                    $.ajax({
                        url: '../servicios/searchP/searchp_juguetes.php',
                        type: 'POST',
                        data: {
                            search  
                        },
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
                            '<form action="../carrito_backend/pedidos_juguetes.php" method="post">'+
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
                                                                    '<option selected="" value="Pieza(s)">Pieza(s)</option>'+
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
                            document.getElementById("ProdE").innerHTML=html;
                            $('#productos').hide();
                            $('#barSearchResults').show();
                            $('#ProdE').show();
                        },
                        error:function(err){
                            console.log(err);
                        }
            
                    })
                }else if(URLactual=="https://hs-ingenieria.com.mx/categorias/lacteos.php"){
                    $.ajax({
                        url: '../servicios/searchP/searchp_lacteos.php',
                        type: 'POST',
                        data: {
                            search  
                        },
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
                            '<form action="../carrito_backend/pedidos_lacteos.php" method="post">'+
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
                                                                    '<option selected="" value="Pieza(s)">Pieza(s)</option>'+
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
                            document.getElementById("ProdE").innerHTML=html;
                            $('#productos').hide();
                            $('#barSearchResults').show();
                            $('#ProdE').show();
                        },
                        error:function(err){
                            console.log(err);
                        }
            
                    })
                }
                
                
            }else{
                $('#productos').show();
                $('#barSearchResults').hide();
                $('#ProdE').hide();
            }
        } );
});
