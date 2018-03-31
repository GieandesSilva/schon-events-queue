@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">
                <h3>Saídas de Estoque</h3>
            </div>
            <div class="col-9">
                <a href="{{route('stock_outputs.create')}}" class="btn btn-primary float-right">Nova Saída</a>
            </div>
        </div>
        <br/>
        @include('stock-movements._index')
    </div>
@endsection
