@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Criar Saída</h3>
            </div>
            <div class="card-body">
                {!! Form::open(['url' => route('stock_outputs.store'), 'method' => 'POST']) !!}
                    @include('stock-movements._create')
                {!! Form::close() !!}
                <br/>
            </div>
        </div>
        <br/>
        @include('stock-movements._index')
    </div>
@endsection
