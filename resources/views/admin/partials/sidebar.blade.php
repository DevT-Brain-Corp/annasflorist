<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="{{ url('/') }}">{{ env('APP_NAME') }}</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="index.html"></a>
  </div>
  <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="{{ Request::route()->getName() == 'admin.dashboard' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fa fa-columns"></i> <span>Dashboard</span></a></li>
      <li class="{{ Request::route()->getName() == 'user.index' ? ' active' : '' }}"><a class="nav-link" href="{{ route('user.index') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
      <li class="{{ Request::route()->getName() == 'category.index' ? ' active' : '' }}"><a class="nav-link" href="{{ route('category.index') }}"><i class="fa fa-tags"></i> <span>Categories</span></a></li>
      <li class="{{ Request::route()->getName() == 'product.index' ? ' active' : '' }}"><a class="nav-link" href="{{ route('product.index') }}"><i class="fa fa-box"></i> <span>Products</span></a></li>
      <li class="{{ Request::route()->getName() == 'order.index' ? ' active' : '' }}"><a class="nav-link" href="{{ route('order.index') }}"><i class="fa fa-shopping-cart"></i> <span>Orders</span></a></li>
      <li class="{{ Request::route()->getName() == 'pot.index' ? ' active' : '' }}"><a class="nav-link" href="{{ route('pot.index') }}"><i class="fa fa-leaf"></i> <span>Pots</span></a></li>
  </ul>
</aside>
