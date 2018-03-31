<div class="row">
    <div class="col">
        {!! Form::label('quantity', 'Quant.', ['class' => 'control-label']) !!}
        {!! Form::text('quantity', null, ['class' => 'form-control']) !!}
    </div>
    <div class="col">
        {!! Form::label('product_id', 'Produto', ['class' => 'control-label']) !!}
        {!! Form::select('product_id', $products, null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="row mt-3">
    <div class="col-12">
        {!! Form::submit('Criar', ['class' => 'btn btn-primary float-right']) !!}
    </div>
</div>