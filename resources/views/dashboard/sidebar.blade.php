<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/dolist">
            <span data-feather="list"></span>
            To Do List
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('task.create') }}">
            <span data-feather="plus"></span>
            New Task
          </a>
        </li>
        
      </ul>

    
    </div>
  </nav>