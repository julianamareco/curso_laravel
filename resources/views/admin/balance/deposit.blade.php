@extends('adminlte::page')

@section('title', 'Novo Depósito')

@section('content_header')
    <h1>Fazer Depósito</h1>
    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Saldo</a></li>
        <li><a href="">Depositar</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h3>Fazer Depósito</h3>
        </div>
        <div class="box-body">
            <form method="POST" action="{{route('deposit.store')}}">
                {!! csrf_field() !!}
                <div class="form-group">
                    <input type="text" placeholder="Valor Depósito" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Depositar</button>
                </div>
            </form>
        </div>
    </div>
@stop