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


        <div class="col mt-1">
            {{ Form::label('correo', 'Correo electrónico') }}<span class="text-danger"> *</span>
            {{ Form::text('email', null, ['class' => "form-control $errors->has('email') ? ' is-invalid' : ''", 'id' => 'correo', 'maxlength' => 30, 'placeholder' => 'Introduzca el correo electrónico']) }}
        </div>

    </div>
    <div class="row">
        <div class="col mt-3">
        {{ Form::label('password', 'Contraseña') }}<span class="text-danger"> *</span>
            {{ Form::password('password', ['class' => "form-control $errors->has('password') ? ' is-invalid' : ''", 'id' => 'password', 'maxlength' => 16, 'placeholder' => 'Introduzca la contraseña']) }}
        
           
        </div>
        <div class="col mt-3">
        {{ Form::label('password_confirmation', 'Confirmar contraseña') }}<span class="text-danger"> *</span>
            {{ Form::password('password_confirmation', ['class' => "form-control $errors->has('password_confirmation') ? ' is-invalid' : ''", 'id' => 'password_confirmation', 'maxlength' => 16, 'placeholder' => 'Confirme la contraseña']) }}
        
        </div>
    </div>

    <div class="row">
        <div class="col mt-3">
        {{ Form::label('nombre', 'Nombre') }}<span class="text-danger"> *</span>
            {{ Form::text('name', null, ['class' => "form-control $errors->has('name') ? ' is-invalid' : ''", 'id' => 'name', 'maxlength' => 25, 'placeholder' => 'Introduzca el nombre']) }}
        </div>
        <div class="col mt-3">
        {{ Form::label('apellido', 'Apellido') }}<span class="text-danger"> *</span>
            {{ Form::text('lastname', null, ['class' => "form-control $errors->has('lastname') ? ' is-invalid' : ''", 'id' => 'lastname', 'maxlength' => 30, 'placeholder' => 'Introduzca el apellido']) }}    </div>
    </div>

    <div class="row">
        <div class="col mt-3">
        {{ Form::label('cedula', 'Cédula') }}<span class="text-danger"> *</span>
            {{ Form::text('identification', null, ['class' => "form-control $errors->has('identification') ? ' is-invalid' : ''", 'id' => 'identification', 'maxlength' => 8, 'placeholder' => 'Introduzca la cédula']) }}
        </div>
        <div class="col mt-3">
        {{ Form::label('rol', 'Rol') }}<span class="text-danger"> *</span>

        <select name="rol" class="form-control">
        <option value="">Selecciona un rol</option>
        <option value="ADMIN">ADMIN</option>
        <option value="AUDITOR">AUDITOR</option>
        <option value="VENDEDOR">VENDEDOR</option>
        </select>

        </div>
    
    </div>
    

<div class="text-center mt-4 pt-4">
    <button type="submit" class="btn btn-primary">Registrar</button>
</div>
</form>
