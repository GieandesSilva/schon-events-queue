
<div class="card">
    <div class="card-header">
        <h3>Produtos</h3>
    </div>
    <div class="card-body table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Quant.</th>
                <th>Produto</th>
                <th>Estoque</th>
            </tr>
            </thead>
            <tbody>
            @foreach($movements as $movement)
                <tr>
                    <td>{{ $movement->id }}</td>
                    <td>{{ $movement->quantity }}</td>
                    <td>{{ $movement->product->name }}</td>
                    <td>{{ $movement->product->stock }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <div class="col-12">
            {{ $movements->links() }}
        </div>
    </div>
</div>
