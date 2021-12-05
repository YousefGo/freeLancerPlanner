<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
     
      <div class="info">
        <a href="#" class="d-block">User Name</a>
      </div>
    </div>

   

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
          <a href="{{URL('/')}}" class="nav-link ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Clients
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('client.index')}}" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p> Clients OPS </p>
              </a>
            </li>
          
          </ul>
        </li>
            <li class="nav-item">
          <a href="#" class="nav-link ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Projects
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('project.index')}}" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Our Projects </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('project.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add New Clients</p>
              </a>
            </li>
             <li class="nav-item">
              <a href="task.index" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Tasks </p>
              </a>
            </li>
              <li class="nav-item">
              <a href="{{route('task.create')}}" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Add New Task </p>
              </a>
            </li>
            
          </ul>
        </li>

       
    </nav>
    <!-- /.sidebar-menu -->
  </div>