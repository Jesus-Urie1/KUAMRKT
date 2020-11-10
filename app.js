$(function(){

    //escondemos los resultados para solo sacarlos cuando haya una busqueda
    $('#barSearchResults').hide();
   
        //cada vez que una tecla se presione una tecla en el buscador, que haga una busqueda
        $('#search').keyup(function(e){

           if($('#search').val()){
                let search = $('#search').val();
                console.log(search);
        
                //usamos la funcion ajax la cual nos pide un obj
                $.ajax({
                    url: 'servicios/productos/search_products.php',
                    type: 'POST',
                    data: {
                        search  
                    },
                    success:function(data){
                        console.log(data);
                        
                        let html=''
                        for(var i = 0; i<data.datos.length;i++){
                            
                            html+=
                            '<div class="col-md-3 mt-2 mb-4">'+
                                    '<div class="card">'+
                                                '<img class="card-img-top" src="images/'+data.datos[i].rutimg+'">'+
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
                        document.getElementById("ProdE").innerHTML=html;
                        $('#productos').hide();
                        $('#barSearchResults').show();
                        $('#ProdE').show();
                    },
                    error:function(err){
                        console.log(err);
                    }
        
                })//ajax es un metodo de jquery que recibe un obj
            }else{
                $('#productos').show();
                $('#barSearchResults').hide();
                $('#ProdE').hide();
            }
        } );
});
