@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Produtos</h3>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Quant.</th>
                        <th>Quant. Max</th>
                        <th>Preço Venda</th>
                        <th>Preço Compra</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>{{ $product->stock_max }}</td>
                            <td>{{ $product->price_sale }}</td>
                            <td>{{ $product->price_purchase }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <div class="col-12">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
