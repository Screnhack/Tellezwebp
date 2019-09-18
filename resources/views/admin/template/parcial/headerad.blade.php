<nav class="navbar navbar-default " role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/"><img src="{{asset('plugins/images/LogTellez.png') }}"></a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-messages">
                <li>
                    <a href="#">
                        <div>
                            <strong>John Smith</strong>
                            <span class="pull-right text-muted">
                                <em>Yesterday</em>
                            </span>
                        </div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <strong>John Smith</strong>
                            <span class="pull-right text-muted">
                                <em>Yesterday</em>
                            </span>
                        </div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <strong>John Smith</strong>
                            <span class="pull-right text-muted">
                                <em>Yesterday</em>
                            </span>
                        </div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="text-center" href="#">
                        <strong>Read All Messages</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-messages -->
        </li>
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> {{ Auth::user()->name }} <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="{{route('admin.auth.logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <!--<li class="sidebar-search">
                     <div class="input-group custom-search-form">
                         <input type="text" class="form-control" placeholder="Buscar...">
                         <span class="input-group-btn">
                         <button class="btn btn-default" type="button">
                             <i class="fa fa-search"></i>
                         </button>
                     </span>
                     </div>
                 </li>-->
                <li>
                    <a href="/admin/inicio"><i class="fa fa-archive fa-fw"></i> Inicio</a>
                </li>
                @if(Auth::user()->tipo == 'admin')
                <li>
                    <a href="#"><i class="fa fa-user fa-fw"></i> Usuarios<span class="fa arrow"></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{route('admin.users.index')}}"> Listar Usuarios</a>
                        </li>
                        <li>
                            <a href="{{route('admin.users.create')}}"> Nuevo Usuario</a>
                        </li>
                    </ul>
                </li>
                @endif
                <li>
                    <a href="#"><i class="fa fa-pencil fa-fw"></i> Grp. Articulos<span class="fa arrow"></a>
                    <ul class="nav nav-second-level">

                        <li>
                            <a href="{{route('admin.categorias.index')}}"> Listar Grupos</a>
                        </li>
                        <li>
                            <a href="{{route('admin.categorias.create')}}"> Nuevo Grupo</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-inbox fa-fw"></i> Marcas<span class="fa arrow"></a>
                    <ul class="nav nav-second-level">

                        <li>
                            <a href="{{route('admin.marcas.index')}}"> Listar Marcas</a>
                        </li>
                        <li>
                            <a href="{{route('admin.marcas.create')}}"> Nueva Marca</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-flag fa-fw"></i> Lineas<span class="fa arrow"></a>
                    <ul class="nav nav-second-level">

                        <li>
                            <a href="{{route('admin.lineas.index')}}"> Listar Lineas</a>
                        </li>
                        <li>
                            <a href="{{route('admin.lineas.create')}}"> Nueva Linea</a>
                        </li>
                    </ul>
                </li>
                <!--
                 <li>
                    <a href="#"><i class="fa fa-bookmark fa-fw"></i> Caracteristicas<span class="fa arrow"></a>
                    <ul class="nav nav-second-level">
                        
                        <li>
                            <a href="{{route('admin.caracteristicas.index')}}"> Listar Caracteristicas</a>
                        </li>
                        <li>
                            <a href="{{route('admin.caracteristicas.create')}}"> Nueva Caracteristica</a>
                        </li>
                    </ul>
                </li>
                -->
                <li>
                    <a href="#"><i class="fa fa-tags fa-fw"></i> Productos<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{route('admin.articulos.index')}}"> Lista de Productos</a></li>
                        <li>
                            <a href="{{route('admin.articulos.create')}}"> Nuevo Producto</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-camera fa-fw"></i> Imagenes<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{route('admin.imagenes.index')}}"> Lista de Imagenes</a></li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="{{route('admin.imagenes.index')}}"><i class="fa fa-gift fa-fw"></i>Promociones<span class="fa arrow"></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{route('admin.promociones.index')}}"> Lista de Promociones</a></li>
                        <li>
                            <a href="{{route('admin.promociones.create')}}"> Nueva Promoción</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:mostrarManual();"><i class="fa fa-file fa-fw"></i> Manual de Usuario</a>
                </li>
                <!--<li>
                     <a href="#"><i class="fa fa-dashboard fa-fw"></i> Principal<span class="fa arrow"></a>
                     <ul class="nav nav-second-level">
                         <li><a href="/admin/principal"> Inicio</a></li>
                         <li>
                             <a href="#"> Configuracion</a>
                         </li>
                     </ul>
                 </li>
                 <li>
                     <a href="#"><i class="fa fa-th-list fa-fw"></i> Nosotros</a>
                 </li>
                 <li>
                     <a href="#"><i class="fa fa-group fa-fw"></i> Clientes</a>
                 </li>
                 <li>
                     <a href="#"><i class="fa fa-commenting fa-fw"></i> Contactos</a>
                 </li>-->
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>