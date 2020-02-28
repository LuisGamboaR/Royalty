@extends ("partials.admin.layout")

@section("content")


<!-- MAIN CONTENT-->
<div class="main-content">
				<div class="section__content section__content--p30">
					
						<div class="row">
							<div class="col-sm-12">
								<div class="card">
									<div class="card-header">
										<center><h4>Listado de cierres</h4></center>
									</div>
									<div class="card-body">
                                    <div class="card-block">
                                    <div class="float-right mb-2" >
                                    <button onclick="filtro();" class="btn btn-primary">Buscar ventas por dias</button>
                                        </div>
                                <div class="dt-responsive table-responsive">

                                                    <table id="simpletable"
                                                        class="table table-striped table-bordered nowrap text-center">
                                                        
                                        <thead>
                                        <tr>
                                                            <th>#</th>
                                                                <th>Bolivares punto</th>
                                                                <th>Bolivares efectivo</th>
                                                                <th>Dolares efectivo</th>
                                                                <th>Diario total</th>
                                                                <th>Fecha</th>
                                                          

                                                            </tr>
                                            </thead>
                                            <tbody>
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
<script>

function filtro(){
    //Inicio datepicker
    $('.input-daterange').datepicker({
  todayBtn:'linked',
  format:'yyyy-mm-dd',
 });

 //Muestro modal
    $("#AjaxM").modal("show");

}

 var _token = $('input[name="_token"]').val();

 function load_data(from_date = '')
 {
 
    //Funcion ajax al controlador y que traiga los datos de la petición

$.ajax({
url:"{{ route('cierre.fetch_data')}}",
method:"POST",
data:{from_date:from_date, _token:_token},
dataType:"json",
success:function(data){

   
var output = '';

//Cuento los resultados
$('#resultados').text(data.length);


if (data.length === 0) {
    output += '<td>' + 'No' + '</td>';
    output += '<td>' + 'se'  + '</td>';
    output += '<td>' + 'encontró' + '</td>';
    output += '<td>' + 'ninguna' + '</td>';
    output += '<td>' + 'fecha' + '</td>';
   }

//Imprimo los resultados
for(var count = 0; count < data.length; count++){
    output += '<tr>';
    output += '<td>' + data[count].proNombre + '</td>';
    output += '<td>' + data[count].cantidad + '</td>';
     output += '<td>' + data[count].precio + '</td>';
     output += '<td>' + data[count].total + '</td>';
     output += '<td>' + data[count].created_at + '</td></tr>';
}
$('#resultado').empty();
$('#resultado').html(output);

}

})

}

$('#filter').click(function(){
  var from_date = $('#from_date').val();
  if(from_date != '')
  {

   load_data(from_date);

  }
  else
  {
   alert('Ingresa la fecha');
  }
 });
 
 $('#refresh').click(function(){
  $('#from_date').val('');
 });

 




 
</script>

@endsection

<div class="modal fade" id="AjaxM" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <div class="text-center">  <h5 class="modal-title text-center" id="exampleModalLongTitle" >Venta</h5></div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
      <div class="text-center">
<h4>Ventas realizadas</h4>
<div class="panel-heading">
     <div class="row">
      <div class="col-md-12">Resultados:  <b><span id="resultados"></span></b></div>
      <div class="col-md-12 mt-2">
       <div class="input-group input-daterange">
           <input type="text" name="from_date" id="from_date" readonly class="form-control" />
       </div>
       <button type="button"name="filter" id="filter" class="btn btn-info btn-sm button mt-2">Buscar</button> <button   type="button" name="refresh" id="refresh" class="btn btn-warning btn-sm button  mt-2 ">Reiniciar</button>

      </div>

    
      
      
     </div>
    </div>
</div>



<div class="dt-responsive table-responsive">

                                                    <table 
                                                        class="table table-striped table-bordered nowrap text-center" id="date">
                                                        <thead class=>
                                                            <tr>
                                                               <th>Producto</th>
                                                                  <th>Cantidad</th>
                                                                <th>Precio</th>
                                                                <th>Total</th>
                                                                <th>Fecha</th>
    

                                                            </tr>
                                                        </thead>
                                                        <tbody id="resultado" class="text-center">
                    
                                                                


                                                                
                                                            </tr>
                                                       
                                                        </tbody>
                                                    </table>
                                                </div>







      </div>
      <div class="modal-footer">
   

      </div>
    </div>
  </div>
</div>





<style>

.modal-header {
  background-color: #4272d7;
}


</style>



