

$(document).ready(function(){
    
    $.get(BASE_URL+PEOPLES, function( data ) {

        $.each(data.response, function(key,value){

        let idPlaneta = processPlaneta(value.homeworld)

        let data = '<tr><th scope="row">'+key+'</th><td>'+value.name+'</td><td>'+value.height+'</td><td>'+value.eye_color+'</td><td>'+value.hair_color+'</td><td><button class="btn btn-primary exibir_dados" type="button" value="'+idPlaneta+'" id="exibir_dados">Descrição</button></td></tr>'

            $('#bodypersonagens').append(data);
        })
    
    });

    $(document).on('click','#exibir_dados', function(){

            var id = this.value;

            $.ajax({
                type: "GET",
                url: BASE_URL+PLANETS+id,
                dataType: "json",
                cors: false,
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json; charset=UTF-8',
                    "Access-Control-Allow-Origin":"*"
                },
                success: function(data){

                        let card = '<div class="card" style="width: 18rem;">' +
                        '<div class="card-header">'
                            + data.response.name +
                        '</div>'+
                        '<ul class="list-group list-group-flush">'+
                            '<li class="list-group-item">Quantidades de Luas: '+ data.response.name +'</li>'+
                            '<li class="list-group-item">Rotation period: '+ data.response.rotation_period +'</li>'+
                            '<li class="list-group-item">Orbital period: '+ data.response.orbital_period +'</li>'+
                            '<li class="list-group-item">Diameter: '+ data.response.diameter +'</li>'+
                            '<li class="list-group-item">Climate: '+ data.response.climate +'</li>'+
                            '<li class="list-group-item">Terrain: '+ data.response.terrain +'</li>'+
                            '<li class="list-group-item">Surface Water: '+ data.response.surface_water +'</li>'+
                            '<li class="list-group-item">Population: '+ data.response.population +'</li>'+
                        '</ul>'+
                    '</div>'
        
        
                    $('#bodyplaneta').html(card);
                }
            })

    })


    $('#searchPersonagem').on('click', function(){

        $('#bodypersonagens').html('');

        var param = $('#search').val();

        if(param!=""){


       

            $.get(BASE_URL+PEOPLES+param, function( data ) {

                
                $.each(data.response, function(key,value){
                    
                    let idPlaneta = processPlaneta(value.homeworld)

                    let data = '<tr><th scope="row">'+key+'</th><td>'+value.name+'</td><td>'+value.height+'</td><td>'+value.eye_color+'</td><td>'+value.hair_color+'</td><td><button class="btn btn-primary exibir_dados" type="button" value="'+idPlaneta+'" id="exibir_dados">Descrição</button></td></tr>'

                    $('#bodypersonagens').html(data);
                })
            
            });
        }else{

            $.get(BASE_URL+PEOPLES+param, function( data ) {
                

                $.each(data.response, function(key,value){

                    let idPlaneta = processPlaneta(value.homeworld)

                    let data = '<tr><th scope="row">'+key+'</th><td>'+value.name+'</td><td>'+value.height+'</td><td>'+value.eye_color+'</td><td>'+value.hair_color+'</td><td><button class="btn btn-primary exibir_dados" type="button" value="'+idPlaneta+'" id="exibir_dados">Descrição</button></td></tr>'

                    $('#bodypersonagens').append(data).html;
                })
            
            });

        }


    })


    function processPlaneta(str){
        let id =  str.split('/');
        return id[5];
    }
    
})