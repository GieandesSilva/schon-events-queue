@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header text-center text-success">
                <h3>Sua Compra foi efetuada com Sucesso</h3>
            </div>
            <div class="card-body">
                <p>Order: {{$order->id}}</p>
                <p>Total: R$ {{$order->total}}</p>
            </div>
        </div>
    </div>
@endsection