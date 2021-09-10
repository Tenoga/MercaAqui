@extends('layouts.app')
@section('content')
<div class="container">
    @if($errors->any())
    <div class="w-75 mx-auto" >
        <div class="alert alert-danger  my-1" role="alert"> Error! Producto no guardado </div>
        <ul class="list-group-flush" >
            @foreach( $errors->all() as $error)
            <li class="list-group-item list-group-item-danger">{{$error}} </li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="center-align">Editar producto: {{$productos->nombre}}</h2>
                </div>
                <div class="card-body">
                    <form action="/productos/{{$productos->id}}" method="POST" enctype="multipart/form-data" class="w-100"> 
                        @csrf
                        @method('put')           
                        <div class="row ">
                            <div class="input-field col s6">
                                <input placeholder="Manzana" id="nombre" name="nombre" type="text" class="validate">
                                <label for="nombre">Nombre</label>
                            </div>
                            <div class="input-field col s6">
                                <input placeholder="5.000" id="precio" name="precio" type="text" class="validate">
                                <label for="precio">Precio</label>
                            </div>
                        </div>                        
                        <div class="row">
                            <div class="input-field col s12">
                            <input placeholder="500" id="cantidad_disponible" name="cantidad_disponible" type="text" class="validate">
                            <label for="cantidad_disponible">Cantidad disponible</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <select class="browser-default" name="tipo">
                                    <option value="" disabled selected>Tipo de producto</option>
                                    <option value="Aseo">Aseo</option>
                                    <option value="Alimentos frescos">Alimentos frescos</option>
                                    <option value="Alimentos congelados">Alimentos congelados</option>
                                    <option value="Bebidas">Bebidas</option>
                                    <option value="Alimentos Empacados">Alimentos Empacados</option>
                                    <option value="Basicos del hogar">Basicos del hogar</option>
                                    <option value="Cuidado Personal">Cuidado Personal</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input class="form-control" type="file" id="img" name="img">
                            </div>
                        </div>
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="waves-effect waves-light light-blue lighten-2 btn">
                                    {{ __('Guardar') }}
                                </button>
                                <a href="/productos" class="waves-effect waves-light light-blue lighten-2 btn">
                                    {{ __('Regresar') }}
                                </a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection