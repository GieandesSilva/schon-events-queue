@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">
                <h3>Entradas de Estoque</h3>
            </div>
            <div class="col-9">
                <a href="{{route('stock_entries.create')}}" class="btn btn-primary float-right">Nova Entrada</a>
            </div>
        </div>
        <br/>
        @include('stock-movements._index')
    </div>
@endsection
