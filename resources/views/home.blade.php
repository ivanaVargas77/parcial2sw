@extends('layouts.index')
<!--aca es la pagina despues de loguearse -->
@section('contenido')
    <div class="row">
        <div class="col-12 m-t-30">
            <div class="card-columns">
<!--donde esta los botones de mi pagina principal junto con index.blade.php-->
                <div class="card text-center p-3" >
                    <div class="card-body">
                        <h4 class="card-title">Elecciones</h4>
                        <p class="card-text"><img src="{{asset('plantilla/assets/images/vote.png')}}" width="200" height="200" ></img></p>
                         <!--favot es el icnono-->
                        <a class="btn btn-outline-danger btn-lg btn-block " href="{{url('admin/elecciones')}}"> Ver </a>
                    </div>
                </div>



                <div class="card text-center p-3" >
                    <div class="card-body">
                        <h4 class="card-title">Participantes</h4>
                        <p class="card-text"><img src="{{asset('plantilla/assets/images/campana.png')}}" width="200" height="200" ></img></p>
                        <a class="btn btn-outline-danger btn-lg btn-block " href="{{url('admin/participantes')}}"> Ver </a>
                    </div>
                </div>


                <div class="card text-center p-3" >
                    <div class="card-body">
                        <h4 class="card-title">Paises</h4>
                        <p class="card-text"><img src="{{asset('plantilla/assets/images/planet-earth.png')}}" width="180" height="180" ></img></p>
                        <a class="btn btn-outline-danger btn-lg btn-block " href="{{url('admin/paises')}}"> Ver </a>
                    </div>
                </div>

                <div class="card text-center p-3" >
                    <div class="card-body">
                        <h4 class="card-title">Departamentos</h4>
                        <p class="card-text"><img src="{{asset('plantilla/assets/images/paises-bajos.png')}}" width="200" height="200" ></img></p>
                        <a class="btn btn-outline-danger btn-lg btn-block  " href="{{url('admin/departamentos')}}"> Ver </a>
                    </div>
                </div>

                <div class="card text-center p-3" >
                    <div class="card-body">
                        <h4 class="card-title">Provincias</h4>
                        <p class="card-text"><img src="{{asset('plantilla/assets/images/mapa-del-pais.png')}}" width="200" height="200" ></img></p>
                        <a class="btn btn-outline-danger btn-lg btn-block  " href="{{url('admin/provincias')}}"> Ver </a>
                    </div>
                </div>

                <div class="card text-center p-3" >
                    <div class="card-body">
                        <h4 class="card-title">Localidades</h4>
                        <p class="card-text"><img src="{{asset('plantilla/assets/images/place.png')}}" width="180" height="180" ></img></p>
                        <a class="btn btn-outline-danger btn-lg btn-block  " href="{{url('admin/localidades')}}"> Ver </a>
                    </div>
                </div>

                <div class="card text-center p-3" >
                    <div class="card-body">
                        <h4 class="card-title">Recintos</h4>
                        <p class="card-text"><img src="{{asset('plantilla/assets/images/universidad.png')}}" width="200" height="200" ></img></p>
                        <a class="btn btn-outline-danger btn-lg btn-block " href="{{url('admin/recintos')}}"> Ver </a>
                    </div>
                </div>

                <div class="card text-center p-3" >
                    <div class="card-body">
                        <h4 class="card-title">Mesas</h4>
                        <p class="card-text"><img src="{{asset('plantilla/assets/images/pupitre-de-escuela.png')}}" width="200" height="200" ></img></p>
                        <a class="btn btn-outline-danger btn-lg btn-block " href="{{url('admin/mesas')}}"> Ver </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
