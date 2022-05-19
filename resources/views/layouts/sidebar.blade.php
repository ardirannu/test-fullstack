<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item @if (Request::segment(1) == '') active @endif">
        <a class="nav-link active" href="{{ route('user.index') }}">
          <i class="ti-user mr-3 mb-1"></i>
          <span class="menu-title">User</span>
        </a>
      </li>
      <li class="nav-item @if (Request::segment(1) == 'post') active @endif">
        <a class="nav-link active" href="{{ route('post.index') }}">
          <i class="ti-book mr-3 mb-1"></i>
          <span class="menu-title">Post</span>
        </a>
      </li>
      <li class="nav-item @if (Request::segment(1) == 'comment') active @endif">
        <a class="nav-link active" href="{{ route('comment.index') }}">
          <i class="ti-book mr-3 mb-1"></i>
          <span class="menu-title">Comment</span>
        </a>
      </li>
    </ul>
  </nav>