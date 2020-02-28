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
                                    @can('productos.create')
                                            <a href="{{ route('productos.create') }}" class="btn btn-primary">Registrar producto</a>
                                      @endcan
                                        </div>

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
                                                                <td>{{ $item->stock_actual}} disponibles  <button onclick="suma({{($item->id)}});" value="click">
<i class="fa fa-plus" style="font-size: 20px; color:green;" title="Añadir productos al stock"> 
</i>
</button> </td>
                                                                <td>{{ number_format($item->precio)}} <button onclick="update({{($item->id)}});" value="click">
<i class="fa fa-pencil-square-o" style="font-size: 20px; color: #007bff;" title="Cambiar precio"> 
</i>
</button></td>
                                                                <td>{{ $item->descripcion}}</td>

                                                                
                                                            

                                                                <td class="text-center">

                                                                
                                                                <button onclick="venta({{( $item->id)}});"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="Vender producto"> <i
                                                                            class="fa fa-usd mr-2"
                                                                            style="font-size: 20px"></i></button>

                                                                @can('productos.edit')
                                                                    <a href="{{ route('productos.edit', $item->id) }}"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="Editar producto"> <i
                                                                            class="fa fa-pencil-square-o mr-2"
                                                                            style="font-size: 20px"></i></a>
                                                                            @endcan
                                                                            @can('productos.edit')

                                                                            <button onclick="destroy({{( $item->id)}});"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="Eliminar producto"> <i 
                                                                            class="fa fa-trash mr-2"
                                                                            style="font-size: 20px"></i></button>
                                                                            @endcan
                                   <!--//Con este formulario se manda a la funcion destroy para borrar -->
                                                                {!! Form::open(['route' =>
                                                                           ['productos.destroy',
                                                                    $item->id], 'method' => 'DELETE', 'id' =>
                                                                    'confirm-delete']) !!}

                                                                    {!! Form::close() !!}

                                                                    {!! Form::open(['route' =>['producto.cambiar'], 'method' => 'POST', 'id' =>'confirm-updatep']) !!}
                                                                     
                                                                    <input type="hidden" id="precio" name="precio" value="">

                                                                      <input type="hidden" id="product_id" name="product_id" value="">
                                                                    {!! Form::close() !!}

                                                                    {!! Form::open(['route' =>['producto.suma'],'id' => 'formulario_registro_producto_suma', 'method' => 'POST', 'id' =>'confirm-suma']) !!}
                                                                     
                                                                     <input type="hidden" id="suma" name="suma" value="">

                                                                      <input type="hidden" id="id_product" name="product_id" value="">

                                                   
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

$.ajax ({
  "_token": "{{ csrf_token() }}",

 url: "{{ route('producto.getproducts') }}",
 data: {
     
     "product_id": product_id
 },

 dataType: 'html',
 type: 'get',

 success: function(response){
     
  console.log(response);


     var obj=JSON.parse(response);
     $('#inputss').val(obj[0].proNombre);
     $('#input2').val(obj[0].id);
     $('#input3').val(obj[0].precio);

     $("#Productos").empty();
    

   cliente();
    
    

      }   
   })
}




function cliente(){

$.ajax ({


 url: "{{ route('cliente.getclients') }}",

 dataType: 'html',
 type: 'get',

 success: function(response2){
     
  console.log(response2);


let datos =  JSON.parse(response2)

    $("#cliente").empty();
    $("#cliente").append(
      "<option value=''>Selecciona un cliente</option>");

      $.each(datos, function (index, value){
        $("#cliente").append(
          `<option value="${index}">${value}</option>`
        );
      });

  

     $("#AjaxM").modal("show");


    

      }   
   })
}


function products(){


        var product = `


    
<form action="" class="form-horizontal">
    <div class="form-group">

        <div class="mt-3 col-sm-12">
        <strong style="color:black">Cliente</strong><span style="color:red">*</span>
           <select name="cliente" id="cliente" class="form-control">

      
           
           </select>
        </div>
        <div class="mt-3 col-sm-12">
        <strong style="color:black">Cantidad</strong><span style="color:red">*</span>
            <input type="text" class="form-control"  style="text-align:left;" placeholder="Cantidad">
        </div>
    </div>
</form>
   
`;
  
    $("#Productos").append(product);
    }





    function update(product_id){

Swal.fire({
title: "Cambiar precio del producto",
html:  ` <strong style="color: black;"><label class="alinear mt-2">Precio<span style="color:red">*</span></label></strong>


<input type="text" name="precio" class="form-control" id="p_cambiar" placeholder="Introduzca la cantidad">


`,
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'Aceptar',
cancelButtonText: 'Cancelar'

}).then((result) => {
if (result.value) {
  //Tomo el valor del input

  var inputVal = document.getElementById("p_cambiar").value;

 

//Mando el valor del input para que se reemplace en el form
$('#precio').val(inputVal);

  $('#product_id').val(product_id);

 $('#confirm-updatep').submit();

  
}
})

}

function suma(product_id){

Swal.fire({
title: "Añadir productos al stock",
html:  ` <strong style="color: black;"><label class="alinear mt-2">Cantidad<span style="color:red">*</span></label></strong>


<input type="text" name="suma" class="form-control" id="p_cantidad" placeholder="Introduzca la cantidad">


`,
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'Aceptar',
cancelButtonText: 'Cancelar'

}).then((result) => {
if (result.value) {
  //Tomo el valor del input
var inputVal = document.getElementById("p_cantidad").value;

//Mando el valor del input para que se reemplace en el form

  $('#suma').val(inputVal);
  $('#id_product').val(product_id);



 $('#confirm-suma').submit();


}
})

}



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
<h4>Productos vendidos</h4>
<p>Por favor seleccione los clientes que realizaron la compra y la cantidad que compró</p>
<p>Los campos que contengan (<span style="color:red">*</span>) son
                                                obligatorios</p>
</div>




<form action="{{ route('clientes-productos.store') }}" method="POST" class="form-horizontal">
{{csrf_field()}}

    <div class="form-group">
        <div class="mt-3 col-sm-12">
        <strong style="color:black">Producto</strong><span style="color:red">*</span>
        <input type="hidden" id="input2" name="product_id" class="form-control"  style="text-align:left;" >
        <input type="hidden" id="input3" name="precio" class="form-control"  style="text-align:left;" >


            <input type="text" id="inputss"  class="form-control"  style="text-align:left;" disabled>
        </div>
        <div class="mt-3 col-sm-12">
        <strong style="color:black">Cliente</strong><span style="color:red">*</span>
           <select name="client_id" id="cliente" class="form-control">

      
           
           </select>
        </div>
        <div class="mt-3 col-sm-12">
        <strong style="color:black">Cantidad</strong><span style="color:red">*</span>
            <input type="text" class="form-control" name="cantidad" style="text-align:left;" placeholder="Cantidad">
        </div>
    </div>

    <button type="submit" class="btn btn-success">Guardar</button>

<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>

</form>





<div id="Productos">

</div>




<div class="text-center mt-3 mb-3">
<!-- 
<button onclick="products();" value="click">
<i class="fa fa-plus" style="font-size: 35px;"> 
</i>
</button> -->

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
