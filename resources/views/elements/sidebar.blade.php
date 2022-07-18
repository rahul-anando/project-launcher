<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand mt-4">
        <h4><a href="home">Launcher</a></h4>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">LC</a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Features</li>
          <li class="nav-item dropdown">
{{--             @if (auth()->user()->level=="admin")
 --}}            <a href="#" class="nav-link has-dropdown">
              <i class="fas fa-fire"></i>
              <span>Dashboard</span>
            </a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{route('home')}}">General Dashboard</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown">
              <i class="fas fa-fire"></i>
              <span>Other</span>
            </a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{route('index')}}">Transaction</a></li>
              <li><a class="nav-link" href="{{route('member')}}">Membership</a></li>
              <li><a class="nav-link" href="{{route('petugas')}}">Petugas</a></li>
            </ul>
          </li>
        </ul>
{{--         @endif
 --}}{{--         @if (auth()->user()->level=="user")
 --}}        <a href="#" class="nav-link has-dropdown">
            <i class="fas fa-fire"></i>
            <span>Dashboard</span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{route('home')}}">General Dashboard</a></li>
          </ul>
        </li>
{{--         @endif
 --}}       {{--  <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
          <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-rocket"></i> Documentation
          </a>
        </div> --}}
    </aside>
  </div>
