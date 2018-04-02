@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Ceckout</h3>
            </div>
            <div class="card-body">
                {!! Form::open(['url' => route('orders.store'), 'method' => 'POST']) !!}
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Produto</th>
                            <th>Quant.</th>
                            <th>Price.</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>
                                    {!! Form::hidden("products[{$loop->index}][product_id]", $product->id) !!}
                                    {{ $product->name }}
                                </td>
                                <td>
                                    {!! Form::hidden("products[{$loop->index}][quantity]", $quantity = rand(1,2)) !!}
                                    {{ $quantity }}
                                </td>
                                <td>
                                    {!! Form::hidden("products[{$loop->index}][price]", $product->price_sale) !!}
                                    {{ $product->price_sale }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="col-12">
                    <div class="form-group">
                        {!! Form::submit('Criar',['class' => 'btn btn-primary float-right']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
            <div class="card-footer">
            </div>
        </div>
    </div>
@endsection