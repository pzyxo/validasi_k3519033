<!--Main Navigation-->
<header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
          <a href="/" class="list-group-item list-group-item-action py-2 ripple <?= ($page == ''? 'active' : '')?>" aria-current="true">
            <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
          </a>
          <a href="users" class="list-group-item list-group-item-action py-2 ripple <?= ($page == 'users'? 'active' : '')?>"><i
              class="fas fa-users fa-fw me-3"></i><span>Users</span></a>
        </div>
      </div>
    </nav>
    <!-- Sidebar -->

    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
          aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="#">
          <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="25" alt="" loading="lazy" />
        </a>
        <!-- Search form -->
        <form class="d-none d-md-flex input-group w-auto my-auto">
          <input autocomplete="off" type="search" class="form-control rounded"
            placeholder='Search (ctrl + "/" to focus)' style="min-width: 225px" />
          <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
        </form>

      </div>
      <!-- Container wrapper -->
    </nav>