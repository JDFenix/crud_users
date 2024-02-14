<form action="{{ route('modifyUser', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input class="form-control" type="text" name="id" value="{{$user->id}}" hidden>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ $user->email }}" required>

    <button type="submit">Actualizar</button>
</form>
