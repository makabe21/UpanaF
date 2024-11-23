
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Titulo') }}</label>
    <div>
        {{ Form::text('Titulo', $product->Titulo, ['class' => 'form-control' .
        ($errors->has('Titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
        {!! $errors->first('Titulo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Introduce <b>titulo</b> del Producto.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Descripcion') }}</label>
    <div>
        {{ Form::text('Descripcion', $product->Descripcion, ['class' => 'form-control' .
        ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
        {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Descripcion <b>del</b> Producto.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Stock') }}</label>
    <div>
        {{ Form::text('Stock', $product->Stock, ['class' => 'form-control' .
        ($errors->has('Stock') ? ' is-invalid' : ''), 'placeholder' => 'Stock']) }}
        {!! $errors->first('Stock', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Stock <b>del</b> Producto.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Precio') }}</label>
    <div>
        {{ Form::text('Precio', $product->Precio, ['class' => 'form-control' .
        ($errors->has('Precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
        {!! $errors->first('Precio', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Introduce <b>el precio</b> del Producto.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Enviar</button>
            </div>
        </div>
    </div>
