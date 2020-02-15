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
                                <div class="dt-responsive table-responsive">

                                                    <table id="simpletable"
                                                        class="table table-striped table-bordered nowrap text-center">
                                                        <thead class=>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Nombre</th>
                                                                <th>Cantidad disponible</th>
                                                                <th>Precio unitario</th>
                                                                <th>Descripcion</th>
                                                                <th>Opciones</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody class="text-center">
                                                            @foreach($products as $item)
                                                            <tr>
                                                                <td><b>{{ $i++ }}</b></td>
                                                        

                                                                <td>{{ $item->nombre}}</td>
                                                                <td>{{ $item->stock_actual}} disponibles</td>
                                                                <td>{{ $item->precio}}</td>
                                                                <td>{{ $item->descripcion}}</td>
                                                                


                                                                <td class="text-center">

                                                                
                                                                <button onclick="venta({{( $item->id)}});"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="Vender producto"> <i
                                                                            class="fa fa-usd mr-2"
                                                                            style="font-size: 20px"></i></button>

                                                      
                                                                    <a href="{{ route('productos.edit', $item->id) }}"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="Editar producto"> <i
                                                                            class="fa fa-pencil-square-o mr-2"
                                                                            style="font-size: 20px"></i></a>

                                                                        
                                                                            <button onclick="destroy({{( $item->id)}});"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="Eliminar producto"> <i 
                                                                            class="fa fa-trash mr-2"
                                                                            style="font-size: 20px"></i></button>

                                   <!--//Con este formulario se manda a la funcion destroy para borrar -->
                                                                {!! Form::open(['route' =>
                                                                           ['productos.destroy',
                                                                    $item->id], 'method' => 'DELETE', 'id' =>
                                                                    'confirm-delete']) !!}

                                                                    {!! Form::close() !!}

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



<style>

.fa-trash  {
  color: red;
}

.fa-usd {
  color: green;
}

</style>


@section('script')



<script type="text/javascript">
function destroy(product_id) {
        Swal.fire({
            title: "¡Cuidado!",
    text: "¿Estás seguro que deseas eliminar este producto",
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






function venta(product_id){

  

Swal.fire({
title: "Venta de producto",
html:  ` 

`,
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'Aceptar',
cancelButtonText: 'Cancelar'

}).then((result) => {
if (result.value) {
  //Tomo el valor del input

//Mando el valor del input para que se reemplace en el form



}
})


    
    

}




function products(){
    var product = `
    <div class="row">



 
      <div class="col mt-3">
    <label class="alinear">Medida<span style="color:red">*</span></label>
    <select class="form-control" id="medida" name="medida">

        <option value="UNITARIO">UNITARIO</option>
        <option value="METROS">METROS</option>
        <option value="CENTIMETROS">CENTIMETROS</option>
        <option value="PULGADAS">PULGADAS</option>

    </select>
</div>
  <div class="col mt-3">
      <label class="alinear">Cantidad<span style="color:red">*</span></label>
      <input type="text" id="cantidadMateria" name="cantidadMateria" placeholder="Introduzca la cantidad utilizada">
      
  </div>
</div>



`;

$("#Productos").append(product);
}

</script>





</script>
@endsection

