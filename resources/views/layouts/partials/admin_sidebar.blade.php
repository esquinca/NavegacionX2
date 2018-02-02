<?php
function current_page($url = '/'){
  return request()->path() == $url;
}
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        @if (Auth::user()->avatar == null)
          <img src="dist/img/user.jpg" class="img-circle" alt="User Image">
        @else
          <img src="{{Auth::user()->avatar}}" class="img-circle" alt="User Image">
        @endif
      </div>
      <div class="pull-left info">
        <p>
          @if (Auth::user()->social_name == null)
            {{ Auth::user()->name}}
          @else
            {{ Auth::user()->social_name}}
          @endif
        </p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online - {{ auth()->user()->roles->first()->name }}</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">HEADER</li>
            <li><a href="home"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
        @foreach (auth()->user()->menus as $menu)
              <li><a href="{{ $menu->url }}"><i class="{{ $menu->icons }}"></i> <span>{{ $menu->display_name }}</span></a></li>
        @endforeach
          <li><a href="profile"><i class="fa fa fa-user"></i> <span>Perfil</span></a></li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
