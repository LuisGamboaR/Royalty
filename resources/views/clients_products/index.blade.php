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
                                                        <thead class=>
                                                            <tr>
                                                            <th>#</th>
                                                                <th>Cliente</th>
                                                                <th>Producto</th>
                                                                <th>Cantidad</th>
                                                                <th>Precio</th>
                                                                <th>Total</th>
                                                          

                                                            </tr>
                                                        </thead>
                                                        <tbody class="text-center">
                                                        
                                                        @foreach($clipro as $item)
                                                            <tr>
                                                                <td><b>{{ $i++ }}</b></td>
                                                        

                                                                <td>{{ $item->cliNombre}}</td>
                                                                <td>{{ $item->proNombre}} </td>
                                                                <td>{{ $item->cantidad}} comprados</td>
                                                                <td>Se vendió a {{ number_format($item->precio)}} BsS. c/u</td>
                                                                <td>{{ number_format($item->total)}} BsS.</td>
                                                                


                                                 
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
