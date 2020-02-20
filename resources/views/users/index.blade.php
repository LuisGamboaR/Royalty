@extends ("partials.admin.layout")

@section("content")


<!-- MAIN CONTENT-->
<div class="main-content">
				<div class="section__content section__content--p30">
					
						<div class="row">
							<div class="col-sm-12">
								<div class="card">
									<div class="card-header">
										<center><h4>Listado de usuarios</h4></center>
									</div>
									<div class="card-body">
                                    <div class="card-block">
                                    <div class="float-right mb-2" >
                                            <a href="{{ route('usuarios.create') }}" class="btn btn-primary">Registrar usuario</a>
                                        </div>
                                    <div class="table-responsive table--no-card m-b-30">
                                    <table  class="table table-striped table-bordered nowrap">
                                        <thead>
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Correo</th>
                                                <th>Cédula</th>
                                                <th>Opciones</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                             @foreach($users as $item)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->lastname }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->identification }}</td>

                                                    <td class="text-center">

<a href="{{ route('usuarios.edit', $item->id) }}"
    data-toggle="tooltip" data-placement="top"
    title="Editar usuario"> <i
        class="fa fa-pencil-square-o mr-2"
        style="font-size: 20px"></i></a>


</td>
                                                  
                                                </tr>
                                               @endforeach
                                            </tbody>
                                    </table>
                                    </div>
                                </div>
									</div>
								</div>
							</div>							
						</div>										
					
				</div>
			</div>
			<!-- END PAGE CONTAINER-->
         </div>
    </div>  
</div>    
</div>  
@endsection
