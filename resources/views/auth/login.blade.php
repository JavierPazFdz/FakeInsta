@extends('layouts.app')
@section('titulo')
    Inicia sesión en FakeInsta
@endsection

@section('contenido')
    <div class="d-flex" style="justify-center">
        <div class="w-50">
            <p>Imagen aqui</p>
        </div>
        <div class="w-50">
            <form method="POST" action="{{route('login')}}">
                 @csrf
                 @if(session('message'))
                 {{-- Poner clase a este mensaje --}}
                 <p>{{session('message')}}</p>
                 @endif
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
                    <input type="checkbox" name="remember"><label>Mantener mi sesión abierta</label>
                </div>
                <input type="submit" value="Iniciar sesion" class="button">
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
