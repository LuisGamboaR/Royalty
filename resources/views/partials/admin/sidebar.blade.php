<div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <img src="{{ asset('assets/admin/images/icon/logo-white.png') }}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="{{ asset('assets/admin/images/icon/avatar-big-01.jpg') }}" alt="John Doe" />
                    </div>
                 <h4 class="name"> {{ Auth::user()->name}} {{ Auth::user()->lastname}} </h4>
                    <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="text-center"></i> Cerrar Sesión
                                        
                                    </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                     
                    
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                 
                        <li>
                            <a href="{{ route('home') }}">
                            <i class="fas fa-home"></i></i>Inicio</a>
                        </li>

                        <li>
                            <a href="{{ route('clientes-productos.index') }}">
                            <i class="fas fa-usd"></i></i>Ventas</a>
                        </li>

                        @can('cierre.index')
                        <li>
                            <a href="{{ route('cierre.index') }}">
                            <i class="fas fa-usd"></i></i>Cierres</a>
                        </li>
                        @endcan
                        @can('gastos.index')
                        <li class="">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-credit-card"></i>Gastos
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                            @can('gastos.create')

                                <li>
                                    <a href="{{ route('gastos.create')}}">
                                        <i class="fas fa-credit-card"></i>Registrar gasto</a>
                                </li>
                                @endcan
                                @can('gastos.index')

                                <li>
                                    <a href="{{ route('gastos.index')}}">
                                        <i class="fas fa-credit-card"></i>Listado de gastos</a>
                                </li>
                                @endcan
                            </ul>
                        </li>
                        @endcan
                        @can('productos.index')
                        <li class="">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-th"></i>Productos
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                            @can('productos.create')

                                <li>
                                    <a href="{{ route('productos.create')}}">
                                        <i class="fas fa-th"></i>Registrar producto</a>
                                </li>
                                @endcan
                                @can('productos.index')

                                <li>
                                    <a href="{{ route('productos.index')}}">
                                        <i class="fas fa-th"></i>Listado de productos</a>
                                </li>
                            @endcan
                            </ul>
                        </li>
                        @endcan
                        @can('clientes.index')
                        <li class="">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-suitcase"></i>Clientes
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                            @can('clientes.create')
                                <li>
                                    <a href="{{ route('clientes.create')}}">
                                        <i class="fas fa-suitcase"></i>Registrar cliente</a>
                                </li>
                            @endcan
                            @can('clientes.index')
                                <li>
                                    <a href="{{ route('clientes.index')}}">
                                        <i class="fas fa-suitcase"></i>Listado de clientes</a>
                                </li>
                                @endcan
                            </ul>
                        </li>
                        @endcan
                    @can('usuarios.index')
                        <li class="">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-users "></i>Usuarios
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                            @can('usuarios.create')
                                <li>
                                    <a href="{{ route('usuarios.create') }}">
                                        <i class="fas fa-users "></i>Registrar usuario</a>
                                </li>
                             @endcan
                                <li>
                                    <a href="{{ route('usuarios.index') }}">
                                        <i class="fas fa-users "></i>Listado de usuarios</a>
                                </li>
                            
                            </ul>
                        </li>
                        @endcan
                      
                        
                        @can('backup.index')
                        <li class="">
                            <a class="js-arrow" href="#">
                                <i class="fa fa-cog "></i>Mantenimiento
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                              
                                <li>
                                    <a href="{{ route('backup.index') }}">
                                        <i class="fa fa-cog "></i>Backup</a>
                                </li>

                                <li>
                            <a href="{{ route('bitacoras.index') }}">
                            <i class="fas fa-cog"></i></i>Bitacora</a>
                                 </li>
                            
                            </ul>
                        </li>
                        @endcan


                  
                        
                 
                    
                        
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
