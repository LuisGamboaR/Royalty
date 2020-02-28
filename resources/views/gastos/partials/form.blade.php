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
              <label class="alinear">Razón<span style="color:red">*</span></label>
              <select class="form-control" id="" name="razon">
                    <option value="PROVEEDORES" >Proveedores</option>
                    <option value="DOLARES" >Dolares</option>

              </select>
          </div>
          <div class="col mt-3">
          <label class="alinear">Descripción<span style="color:red">*</span></label>
          {{ Form::text('descripcion', null, ['class' => "form-control $errors->has('descripcion') ? ' is-invalid' : ''", 'id' => 'descripcion', 'maxlength' => 50, 'placeholder' => 'Introduzca una breve descripcion de la razón del gasto']) }}
          
      </div>
    
  </div>

  <div class="row">

      <div class="col mt-3 col-sm-6">
          <label class="alinear">Cantidad<span style="color:red">*</span></label>
          {{ Form::text('cantidad', null, ['class' => "form-control $errors->has('cantidad') ? ' is-invalid' : ''", 'id' => 'cantidad', 'maxlength' => 999999999, 'placeholder' => 'Introduzca la cantidad de dinero']) }}
          
      </div>

      </div>
<div class="text-center mt-4 pt-4">
    <button type="submit" class="btn btn-primary">Registrar</button>
</div>
</form>