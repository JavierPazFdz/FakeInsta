@extends('layouts.app')

@section('titulo')
<p>Tu cuenta</p>
@endsection

@section('contenido')

<div class="flex justify-center">
    <div>
        <div class="weigth 8/12">
            <img src="{{asset('/favicon.ico')}}" alt="imagen usuario"/>
        </div>
        <div class="weigth 8/12">
            <p>{{auth()->user()->userName}}</p>
        </div>
    </div>
</div>
@endsection