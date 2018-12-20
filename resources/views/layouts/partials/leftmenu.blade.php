
<section class="sidebar">
  @auth
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">Menu</li>
    <li class="treeview {{ active_check(['user','login']) }}">
      <a href="#"><i class="fa fa-list"></i> <span>Categorias</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="{{ active_check(['categorias']) }}"><a href="{{ url('categorias') }}"><i class="fa fa-sort-alpha-desc"></i> Listado</a></li>
        <li class="{{ active_check(['categorias/create']) }}"><a href="{{ url('categorias/create') }}"><i class="fa fa-plus-square"></i> Agregar</a></li>
      </ul>
    </li>

    <li><a href="/productos"><i class="fa fa-undo"></i> <span>Productos</span></a></li>
    <li><a href="#"><i class="fa fa-usd"></i> <span>Ventas</span></a></li>
    @can('view_users')
    <li class="treeview {{ active_check(['user','login']) }}">
      <a href="#"><i class="fa fa-user"></i> <span>Usuarios</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        @can('view_users')
        <li class="{{ active_check(['user']) }}"><a href="{{ url('user') }}"><i class="fa fa-sort-alpha-desc"></i> Listado</a></li>
        @endcan
        @can('add_users')
        <li class="{{ active_check(['user/create']) }}"><a href="{{ url('user/create') }}"><i class="fa fa-plus-square"></i> Ingresar</a></li>
        @endcan
        @can('assign_permissions')
        <li class="{{ active_check(['permission']) }}"><a href="{{ url('permission') }}"><i class="fa fa-lock"></i> Permisos</a></li>
        @endcan
        @can('view_logins')
        <li class="{{ active_check(['logins']) }}"><a href="{{ url('logins') }}"><i class="fa fa-sign-in"></i> Logins</a></li>
        @endcan
      </ul>
    </li>
    @endcan
  </ul>
  @endauth
</section>
