@extends ("partials.admin.layout")

@section("content")


<!-- MAIN CONTENT-->
<div class="main-content">
				<div class="section__content section__content--p30">
					
						<div class="row">
							<div class="col-sm-12">
								<div class="card">
                                
									<div class="card-header">
										<center><h4>Listado de productos</h4></center>
									</div>
                                  
									<div class="card-body">
                                    <div class="card-block">
                                    <div class="float-right mb-2" >
                                            <a href="{{ route('backup.create') }}" class="btn btn-primary">Hacer respaldo</a>
                                        </div>
                                <div class="dt-responsive table-responsive">
                                <table id="simpletable" class="table text-center table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Archivo</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($backups as $backup)
                        <tr>
                            <td>{{ substr($backup,15) }}</td>
                            <td class="text-right">

                                <a class="btn btn-sm btn-info" href="{{ route('backup.download', substr($backup,15)) }}">
                                    Descargar
                                </a>


                                <a class="btn btn-sm btn-primary" href="{{ route('backup.restore', substr($backup,15)) }}">
                                    Restaurar
                                </a>



                                <a class="btn btn-sm btn-danger" data-button-type="delete" href="{{ route('backup.delete' , substr($backup,15)) }}">
                                    Borrar
                                </a>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">No hay respaldos realizados</td>
                        </tr>
                    @endforelse
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
			</div>
			<!-- END PAGE CONTAINER-->
         </div>
    </div>  
</div>    
</div>  
@endsection

@section('script')


@endsection
