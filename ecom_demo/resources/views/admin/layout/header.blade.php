<!--Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('admin') }}"><img src="{{asset('images/home/logo.png')}}" alt="" /><span> Buk</span>Admin</a>
      <ul class="user-menu">
        <li class="dropdown pull-right">
          <!-- User -->
          @if(isset($loginUser))
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> {{ $loginUser -> name }} <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <!-- Profile -->
            <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Tiểu sử</a></li>
            <!-- Setting -->
            <li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Cài đặt</a></li>
            <!-- Logout -->
            <li><a href="{{ url('admin/logout') }}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Đăng xuát</a></li>
          </ul>
          @else
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> {{$loginUser}} <span class="caret"></span></a>
          @endif
        </li>
      </ul>
    </div>

  </div><!-- /.container-fluid -->
</nav>
