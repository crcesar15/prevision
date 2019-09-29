<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('storage/profile/'.$user['picture'])}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{$user['first_name'] . " " . $user['last_name']}}</p>
            <a href="#"><i class="fa fa-circle text-{{($user['status'] == 'active') ? 'success' : 'danger' }}"></i> {{($user['status'] == 'active') ? 'Activo' : 'Inactivo' }}</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
                <a href="pages/widgets.html">
                    <i class="fa fa-th"></i> Noticias <span></span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green">New</small>
                    </span>
                </a>
            </li>
            <li class="active treeview menu-open">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>General</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="index.html"><i class="fa fa-line-chart"></i> Estadisticas</a></li>
                    <li class="active"><a href="index2.html"><i class="fa fa-folder-open"></i> Reportes</a>
                    </li>
                </ul>
            </li>
            <li class="active treeview menu-open">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Gestion de Usuarios</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/charts/chartjs.html"><i class="fa fa-search"></i> Busqueda</a></li>
                    <li><a href="pages/charts/morris.html"><i class="fa fa-edit"></i> Registrar</a></li>
                    <li><a href="pages/charts/flot.html"><i class="fa fa-bell"></i> Notificacion General</a></li>
                    <li><a href="pages/charts/inline.html"><i class="fa fa-exclamation-circle"></i> Asuntos Importantes</a></li>
                </ul>
            </li>
            <li><a href="https://adminlte.io/docs"><i class="fa fa-user"></i> <span>Perfil</span></a>
            </li>
            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-exclamation-circle text-red"></i> <span>Asuntos Importantes</span></a></li>
            <li><a href="#"><i class="fa fa-bell text-yellow"></i> <span>Notificaciones</span></a></li>
            <li><a href="#"><i class="fa fa-envelope text-aqua"></i> <span>Mensajes</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
