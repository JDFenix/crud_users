@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 30rem; ">
            <div class="card-body">
                <h1 class="card-title text-center">Actualizar datos</h1>
                <form action="{{ route('modifyUser', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input class="form-control" type="text" name="id" value="{{ $user->id }}" hidden>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}"
                            required>
                    </div><br>


                    <div class=" d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>


                </form>
            </div>
        </div>
    </div>
@endsection
