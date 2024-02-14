@extends('layouts.app')

@section('content')


    @if (isset($error))
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
    @endif

    @if (isset($allUsers))
        <div class="row justify-content-center">
            @foreach ($allUsers as $users)
                <div class="col-lg-4 col-md-6 mb-4" style="width: 30%">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $users['name'] }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $users['paternal_surname'] }}
                                {{ $users['maternal_surname'] }}</h6>
                            <p class="card-text">{{ $users['email'] }}</p>

                            <form action="{{ route('getUser', ['cipherid' => encrypt($users['id'])]) }}" method="post">
                                @csrf
                                <input type="text" name="{{ $users['id'] }}" id="id" hidden>
                                <button type="submit" style="width: 100px" class="btn btn-primary">Modificar</button>
                            </form><br>
                            <form action="{{ route('deleteUser', ['cipherid' => encrypt($users['id'])]) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="text" name="id" value="{{ $users['id'] }}" hidden>
                                <button type="submit" style="width: 100px" class="btn btn-danger">Borrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
