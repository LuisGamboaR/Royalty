@extends ("partials.admin.layout")

@section("content")


<!-- MAIN CONTENT-->
<div class="main-content">
				<div class="section__content section__content--p30">
					
						<div class="row">
							<div class="col-sm-12">
								<div class="card">
									<div class="card-header">
										<center><h4>Listado de gastos</h4></center>
									</div>
									<div class="card-body">
                                    <div class="card-block">
                                    <div class="float-right mb-2" >
                                            <a href="{{ route('gastos.create') }}" class="btn btn-primary">Registrar gasto</a>
                                        </div>
                                <div class="dt-responsive table-responsive">

                                                    <table id="simpletable"
                                                        class="table table-striped table-bordered nowrap text-center">
                                                        
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Razón</th>
                                                <th>Cantidad</th>
                                                <th>Saldo antes de la operación</th>
                                                <th>Descripción</th>
                                                <th>Fecha de registro</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                             @foreach($gastos as $item)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $item->razon }}</td>
                                                    <td>{{  number_format($item->cantidad) }} BsS.</td>
                                                    <td>{{  number_format($item->d_anterior) }} BsS.</td>
                                                    <td>{{ $item->descripcion }}</td>
                                                    <td>{{ date('d-M-Y \a\ \l\a\s H:i:s:A' , strtotime($item->created_at)) }}</td>


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
			</div>
			<!-- END PAGE CONTAINER-->
         </div>
    </div>  
</div>    
</div>  
@endsection





@section('script')

@endsection




