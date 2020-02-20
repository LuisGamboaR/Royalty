@extends ("partials.admin.layout")

@section("content")


<!-- MAIN CONTENT-->
<div class="main-content">
				<div class="section__content section__content--p30">
					
						<div class="row">
							<div class="col-sm-12">
								<div class="card">
									<div class="card-header">
										<center><h4>Listado de ventas</h4></center>
									</div>
									<div class="card-body">
                                    <div class="card-block">
                                <div class="dt-responsive table-responsive">

                                                    <table id="simpletable"
                                                        class="table table-striped table-bordered nowrap text-center">
                                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Acción</th>
                                                <th>Fecha y hora</th>
                                               
                                            </tr>
                                            </thead>
                                            <tbody>
                                             @foreach($bitacora as $item)
                                                <tr>
                                                
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $item->user }}</td>
                                                    <td>{{ $item->lastname }}</td>
                                                    <td>{{ $item->action }}</td>                                
                                                    <td>{{ date('d-M-Y \a\ \l\a\s H:i:s:A' , strtotime($item->created_at)) }}</td>



                                                
                                                    
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
