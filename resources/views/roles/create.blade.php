@extends ("partials.admin.layout")
@section("content")




<!-- MAIN CONTENT-->
<div class="main-content">
				<div class="section__content section__content--p30">
					
						<div class="row">
							<div class="col-sm-12">
								<div class="card">
									<div class="card-header">
										<center><h4 class="box-title">Registrar role</h4>
										<p>Los campos que contengan (<span style="color:red">*</span>) son
                                                obligatorios</p>
										</center>
									</div>
									<div class="card-body">
                                    <div class="card-block">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card-body">
                                                {!! Form::open(['route' => 'roles.store', 'id' => 'formulario_registro_roles']) !!}

                                                @include('roles.partials.form')

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
