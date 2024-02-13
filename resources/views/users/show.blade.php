<a href="/register">Register</a>

@if (isset($error))
    <h5>{{ $error }}</h5>
@endif

@if(isset($allUsers))
@foreach ($allUsers as $users)
    <h1>{{ $users['name'] }}</h1>



    <form action="{{ route('deleteUser', ['id' => $users['id']]) }}" method="post">
        @csrf 

        <input type="text" name="id" value="{{$users['id']}}" hidden>
        <button type="submit">Borrar</button>
    </form>
@endforeach
@endif