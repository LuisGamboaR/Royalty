@extends('partials.admin.layout')

@section('content')
   <!-- BREADCRUMB-->
   <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active" id="ar">
                                            @can('productos.index')
                                            <a   id="button" href="{{ route('productos.index')}}" class="btn btn-primary mt-2">
                                        <i class=""></i>Rellenar stock</a>
                                        @endcan
                                            </li>
                                  
                                            <li class="list-inline-item active" id="ar">
                                            @can('cierre.create')
                                            <a  id="button" href="{{ route('cierre.create')}}" class="btn btn-primary mt-2">
                                        <i class=""></i>Lista de cierres</a>
                                        @endcan
                                            </li>

                                        </ul>
                                    </div>
                              
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            
        {!! Form::open(['route' =>['cierre.store'], 'method' => 'POST', 'id' =>'confirm-cierre']) !!}
                                                                     
                                                                     <input type="hidden" id="b_punto" name="b_punto" value="">
                                                                     <input type="hidden" id="b_efectivo" name="b_efectivo" value="">
                                                                     <input type="hidden" id="d_efectivo" name="d_efectivo" value="">
                                                           
                                                           
                                                                                                              
                                                                    {!! Form::close() !!}
                                                           
         

            <!-- STATISTIC-->
            <section class="statistic">

            <div class="section__content section__content--p30">
                    <div class="container-fluid" id="dinero">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="statistic__item">
                                    <h2 class="number">
                                    <?php
                                  
                                    print_r(number_format($dinero[0]->dinero));?> BsS.
                                        
                                    
                                    
                                    </h2>
                                    <style>
                                    p {
                                        font-size: 15px;
                                    }

                                    #button
{
    font-size: 15px;
    color:white;
}
                                                                 

                                    
                                    </style>

                                    <span class="desc">Venta diaria</span>
                                    <div class="icon ">
                                        <i class="zmdi zmdi-money" style="color: green;"></i>
                                    </div> <br><br>
                                    <button onclick="cierre();" id="botonventa" href="" class="btn btn-primary mt-2">
                                        <i class=""></i>Cierre del día</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @can('backup.index')
                <div class="section__content section__content--p30">
                    <div class="container-fluid" id="dinero">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="statistic__item">
                                    <h2 class="number">
                                    <?php
                                  
                                    print_r(number_format($diario[0]->d_diario));?> BsS.
                                        
                                    
                                    
                                    </h2>
                                    <style>
                                    p {
                                        font-size: 15px;
                                    }

                                  
                                                                 

                                    
                                    </style>

                                    <span class="desc">Dinero total</span>
                                    <div class="icon ">
                                        <i class="zmdi zmdi-money" style="color: green;"></i>
                                    </div> <br><br>
                                    <a  id="button" href="{{ route('gastos.create')}}" class="btn btn-primary mt-2">
                                        <i class=""></i>Registrar gasto</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endcan
            </section>
            <section class="statistic">

            <div class="section__content section__content--p30 ">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number">{{ $users }}</h2>
                                    <span class="desc">Usuarios</span>
                                    <div class="icon" >
                                        <i class="zmdi zmdi-account-o" style="color: #007bff;"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number">{{ $products }}</h2>
                                    <span class="desc">Productos</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-shopping-cart" style="color: #007bff;"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number">{{ $clients }}</h2>
                                    <span class="desc">Clientes </span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-case" style="color: #007bff;"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 flex-box">
                                <div class="statistic__item">
                                    <h2 class="number">
                                    {{ $ventas }}
                                    </h2>
                                    <span class="desc">Ventas</span>
                                    <div class="icon ">
                                        <i class="zmdi zmdi-money" style="color: #007bff;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>

            <!-- END STATISTIC-->

           
            

    
<style>

.statistic__item {
    border: 1px solid #e5e5e5;
    background: #fff;
    padding: 20px 30px;
    position: relative;
    min-height: 180px;
    overflow: hidden;
    margin-bottom: 20px;
    margin-top: -5px;
}
</style>
@endsection

@section('script')

<script>

function cierre(product_id){

Swal.fire({
title: "Cierre diario",
html:  `  <div class="form-group">
        <div class="mt-3 col-sm-12">
        <strong style="color:black" >Bolivares por punto</strong><span style="color:red">*</span>
        <input type="text" id="input" name="b_punto" class="form-control" placeholder="Por favor introduzca la cantidad de dinero " style="text-align:left;" >

        </div>
        <div class="mt-3 col-sm-12">
        <strong style="color:black">Bolivares en efectivo</strong><span style="color:red">*</span>
        <input type="text" id="input2" name="b_efectivo" class="form-control" placeholder="Por favor introduzca la cantidad de dinero " style="text-align:left;" >
       
        </div>
        <div class="mt-3 col-sm-12">
        <strong style="color:black">Dolares en efectivo</strong><span style="color:red">*</span>
            <input type="text" class="form-control" id="input3" name="d_efectivo" placeholder="Por favor introduzca la cantidad de dinero "style="text-align:left;">
        </div>
    </div>


`,
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'Aceptar',
cancelButtonText: 'Cancelar'

}).then((result) => {
if (result.value) {
  //Tomo el valor del input
var inputVal1 = document.getElementById("input").value;
var inputVal2 = document.getElementById("input2").value;
var inputVal3 = document.getElementById("input3").value;


//Mando el valor del input para que se reemplace en el form

  $('#b_punto').val(inputVal1);
  $('#b_efectivo').val(inputVal2);
  $('#d_efectivo').val(inputVal3);

 $('#confirm-cierre').submit();


}
})


    
    

}

</script>

@endsection

