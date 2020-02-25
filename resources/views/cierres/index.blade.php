@extends ("partials.admin.layout")

@section("content")


<!-- MAIN CONTENT-->
<div class="main-content">
				<div class="section__content section__content--p30">
					
						<div class="row">
							<div class="col-sm-12">
								<div class="card">
									<div class="card-header">
										<center><h4>Cierres diarios</h4></center>
									</div>
									<div class="card-body">
                                    <div class="card-block">
                                <div class="dt-responsive table-responsive">

                                                    <table id="simpletable"
                                                        class="table table-striped table-bordered nowrap text-center">
                                                        <thead class=>
                                                            <tr>
                                                            <th>#</th>
                                                                <th>Bolivares punto</th>
                                                                <th>Bolivares efectivo</th>
                                                                <th>Dolares efectivo</th>
                                                                <th>Diario total</th>
                                                                <th>Fecha</th>
                                                          

                                                            </tr>
                                                        </thead>
                                                        <tbody class="text-center">
                                                        
                                                        @foreach($cierre as $item)
                                                            <tr>
                                                                <td><b>{{ $i++ }}</b></td>
                                                        

                                                                <td>{{ number_format($item->b_punto)}} BsS.</td>
                                                                <td>{{ number_format($item->b_efectivo)}} BsS.</td>
                                                                <td>{{ number_format($item->d_efectivo)}} $</td>
                                                                <td>{{ number_format($item->diario)}} BsS.</td>
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
