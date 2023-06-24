<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
            <span data-feather="file-text"></span>
            My Posts
          </a>
        </li>
      </ul>
      @php
          $user = auth()->user();
      @endphp
      @if ($user->role == 'admin') 
      <h6>
        <span class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1
        text-muted  ">Administrator</span>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-tem">
          <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
            <span data-feather="grid"></span>
            Post Categories
          </a>
        </li> 
      </ul>
      @endif
      
    </div>
  </nav>