<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-12 pt-2 pb-2">
            </div>
            <div class="form-group col-lg-6">
                {{ Form::label('nombre') }}
                {{ Form::text('nombre', $proveedor->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col-lg-6">
                {{ Form::label('categoria:') }}
                {{ Form::select('categoria_id', $categorias, $proveedor->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar categoria']) }}
                {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col-lg-6">
                {{ Form::label('direccion:') }}
                {{ Form::text('direccion', $proveedor->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
                {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col-lg-6">
                {{ Form::label('RUC:') }}
                {{ Form::text('ruc', $proveedor->ruc, ['class' => 'form-control' . ($errors->has('ruc') ? ' is-invalid' : ''), 'placeholder' => 'RUC']) }}
                {!! $errors->first('ruc', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col-lg-6">
                {{ Form::label('telefono') }}
                {{ Form::text('telefono', $proveedor->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
                {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col-lg-6">
                {{ Form::label('correo') }}
                {{ Form::email('correo', $proveedor->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
                {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>       
        <div class="form-group">
            {{ Form::label('detalles') }}
            {{ Form::textarea('detalles', $proveedor->detalles, ['class' => 'ckeditor form-control' . ($errors->has('detalles') ? ' is-invalid' : ''), 'placeholder' => 'Puede dejar vacio este espacio']) }}
            {!! $errors->first('detalles', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <a class="btn btn-secondary mt-2" href="{{route('proveedores.index')}}">Cancelar</a>
        <button type="submit" class="btn btn-primary mt-2">Actualizar</button>
    </div>
</div>
<script>
    CKEDITOR.replace( 'detalles' );
</script>
