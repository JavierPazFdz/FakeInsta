@extends('layouts.app')
@section('titulo')
    Registrarse en FakeInsta
@endsection

@section('contenido')
    <div class="d-flex" style="justify-center">
        <div class="w-50">
            <p>Imagen aqui</p>
        </div>
        <div class="w-50">
            <form action={{route('register')}} method="POST">
                 @csrf
                <div>
                    <label for="name">Nombre</label>
                    <input id="name" name="name" type="text" placeholder="Tu nombre" class="border">
                    @error('name')
                    <p>{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label for="userName">Nombre de usuario</label>
                    <input id="userName" name="userName" type="text" placeholder="Tu nombre de usuario" class="border" value="{{old('userName')}}">
                    @error('userName')
                    <p>{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" placeholder="Tu Email" class="border">
                    @error('email')
                    <p>{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" placeholder="Tu password" class="border">
                    @error('password')
                    <p>{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label for="password_confirmation">Repetir Password</label>
                    <input id="password_confirmation" name="password_confirmation" type="password_confirmation" placeholder="Repite tu password" class="border">
                </div>
                <input type="submit" value="Crear cuenta" class="button">
            </form>
        </div>
    </div>
@endsection
<script>
    document.addEventListener('input', function() {
        if (this.value === 'null') {
            this.style.borderColor = 'red';
        }
    });
</script>
