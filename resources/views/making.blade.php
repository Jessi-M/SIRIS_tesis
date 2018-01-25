@extends('layouts.app')
@section('content')

<section class="content-header">
        <h1>
            generar clousters
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary" id='contenido1'>

            <div class="box-body" >
                <div class="row">
                    {!! Form::open(['url' => '/noticias']) !!}

                        @include('formclouster')

                    {!! Form::close() !!}
                </div>
            </div>
             
        </div>
        
        <div class="box box-primary" id='contenido'>

            <div class="box-body" id='contenido1'>
                <div class="row">
                    <div class="loader" ></div> 
                </div>
            </div>
             
        </div>
        
        
    </div>


            
    
        <style>
            .loader {
                border: 16px solid #f3f3f3; /* Light grey */
                border-top: 16px solid #3498db; /* Blue */
                border-radius: 50%;
                width: 120px;
                height: 120px;
                animation: spin 2s linear infinite;
            }

            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }
        </style>
        
@endsection

<script type="text/javascript" >
    function muestra_oculta(id){
        if (document.getElementById){ //se obtiene el id
                
                
              var aux= document.getElementById('value'); 
              if(aux.value!=''){
                  
                    var el = document.getElementById(id); //se define la variable "el" igual a nuestro div
                el.style.display = (el.style.display == 'none') ? 'block' : 'none';
                 var el1 = document.getElementById('contenido1'); 
                    el1.style.display = (el1.style.display == 'none') ? 'block' : 'none';
              }else{
                 
                  var el = document.getElementById(id); //se define la variable "el" igual a nuestro div
                el.style.display = (el.style.display == 'block') ? 'block' : 'none';
              }
                   
        
                
            
                
       
               
        }
    }
    window.onload = function(){/*hace que se cargue la función lo que predetermina que div estará oculto hasta llamar a la función nuevamente*/
        muestra_oculta('contenido');/* "contenido_a_mostrar" es el nombre que le dimos al DIV */

    }
</script>
