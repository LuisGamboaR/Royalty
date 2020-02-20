@extends ("partials.admin.layout")

@section("content")


<!-- MAIN CONTENT-->
<div class="main-content">
				<div class="section__content section__content--p30">
					
						<div class="row">
							<div class="col-sm-12">
								<div class="card">
									<div class="card-header">
										<center><h4>Listado de clientes</h4></center>
									</div>
									<div class="card-body">
                                    <div class="card-block">
                                    <div class="float-right mb-2" >
                                            <a href="{{ route('clientes.create') }}" class="btn btn-primary">Registrar cliente</a>
                                        </div>
                                    <div class="table-responsive table--no-card m-b-30">
                                    <table  class="table table-striped table-bordered nowrap">
                                        <thead>
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <th>Rif</th>
                                                <th>Dirección</th>
                                                <th>Correo</th>
                                                <th>Opciones</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                             @foreach($clients as $item)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $item->nombre }}</td>
                                                    <td>{{ $item->rif }}</td>
                                                    <td>{{ $item->direccion }}</td>
                                                    <td>{{ $item->correo }}</td>

                                                    <td class="text-center">

<a href="{{ route('clientes.edit', $item->id) }}"
    data-toggle="tooltip" data-placement="top"
    title="Editar cliente"> <i
        class="fa fa-pencil-square-o mr-2"
        style="font-size: 20px"></i></a>

     
        <button onclick="destroy({{( $item->id)}});"
    data-toggle="tooltip" data-placement="top"
    title="Eliminar cliente"> <i 
        class="fa fa-trash mr-2"
        style="font-size: 20px"></i></button>

                                   <!--//Con este formulario se manda a la funcion destroy para borrar -->
                                  {!! Form::open(['route' =>
                                                                    ['clientes.destroy',
                                                                    $item->id], 'method' => 'DELETE', 'id' =>
                                                                    'confirm-delete']) !!}

                                                                    {!! Form::close() !!}

</td>



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



<style>

.fa-trash  {
  color: red;
}

</style>


@section('script')



<script type="text/javascript">
function destroy(client_id) {
        Swal.fire({
            title: "¡Cuidado!",
    text: "¿Estás seguro que deseas eliminar este cliente",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Aceptar',
  cancelButtonText: 'Cancelar'
}).then((result) => {
  if (result.value) {
    
    $('#confirm-delete').submit();

    
  }
})
}

</script>
@endsection

