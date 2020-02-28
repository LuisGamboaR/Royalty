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
          
              {{ Form::text('name', null, ['class' => "form-control $errors->has('name') ? ' is-invalid' : ''", 'id' => 'name', 'maxlength' => 30, 'placeholder' => 'Introduzca el name del cliente.']) }}
      </div>
      <div class="col mt-3">
          <label class="alinear">Descripción<span style="color:red">*</span></label>
          {{ Form::text('description', null, ['class' => "form-control $errors->has('description') ? ' is-invalid' : ''", 'id' => 'description', 'maxlength' => 50, 'placeholder' => 'Introduzca una breve dirección ']) }}
          
      </div>

  </div>

                          

  <div class="col mt-3 form-group">
          <label class="alinear">Lista de permisos<span style="color:red">*</span></label> <br>   
          <ul class="list-unstyled">
          @foreach($permissions as $permission)
          <li>
          <label>
          {{ Form::checkbox('permissions[]', $permission->id, null) }}
          {{ $permission->name }}
          <em>({{ $permission->description ?: 'Sin descripción' }})</em>
          </label>
          </li>
          @endforeach
          </ul>    
  </div>
     


<div class="text-center mt-4 pt-4">
    <button type="submit" class="btn btn-primary">Registrar</button>
</div>
</form>

