@if(count($errors))
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <ul>
                    @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endif
<div class="row">
      <div class="col mt-3">
          <label class="alinear">Nombre<span style="color:red">*</span></label>
          
              {{ Form::text('nombre', null, ['class' => "form-control $errors->has('nombre') ? ' is-invalid' : ''", 'id' => 'nombre', 'maxlength' => 50, 'placeholder' => 'Introduzca el nombre del producto.']) }}
      </div>
      <div class="col mt-3">
          <label class="alinear">Stock<span style="color:red">*</span></label>
          {{ Form::text('stock_actual', null, ['class' => "form-control $errors->has('stock_actual') ? ' is-invalid' : ''", 'id' => 'stock_actual', 'maxlength' => 9999999, 'placeholder' => 'Introduzca la cantidad de stock del producto']) }}
          
      </div>
  </div>
  <div class="row">                          
  <div class="col mt-3">
          <label class="alinear">Descripción<span style="color:red">*</span></label>
          {{ Form::text('descripcion', null, ['class' => "form-control $errors->has('descripcion') ? ' is-invalid' : ''", 'id' => 'descripcion', 'maxlength' => 50, 'placeholder' => 'Introduzca una breve descripción del producto ']) }}
          
      </div>

      <div class="col mt-3">
              <label class="alinear">Precio unitario<span style="color:red">*</span></label>
         {{ Form::text('precio', null, ['class' => "form-control $errors->has('precio') ? ' is-invalid' : ''", 'id' => 'precio', 'maxlength' => 9999999999, 'placeholder' => 'Introduzca el precio unitario del producto']) }}

          </div>

  </div>


<div class="text-center mt-4 pt-4">
    <button type="submit" class="btn btn-primary">Registrar</button>
</div>
</form>
