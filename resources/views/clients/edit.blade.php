@extends ("partials.admin.layout")
@section("content")




<!-- MAIN CONTENT-->
<div class="main-content">
				<div class="section__content section__content--p30">
					
						<div class="row">
							<div class="col-sm-12">
								<div class="card">
									<div class="card-header">
										<center><h4>Editar cliente</h4></center>
									</div>
									<div class="card-body">
                                    <div class="card-block">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card-body">
                                                {!! Form::model($item , ['route' => ['clientes.update', $item->id], 'method' => 'PUT']) !!}
                                                @method('PUT')
                                                @include('clients.partials.form')

                                                {!! Form::close() !!}
				

											
                                             

                                            </div>
                                        </div>
                                    </div> <!-- /.row -->
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
