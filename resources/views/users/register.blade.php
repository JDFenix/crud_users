@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 30rem; ">
            <div class="card-body">
                <h1 class="card-title text-center">Registro de usuario</h1>
                <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
                    @csrf
                   

                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="paternal_surname">Apellido Paterno</label>
                        <input type="text" name="paternal_surname" id="paternal_surname" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="maternal_surname">Apellido Materno</label>
                        <input type="text" name="maternal_surname" id="maternal_surname" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" min="8" max="20" id="password" class="form-control">
                    </div><br>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
