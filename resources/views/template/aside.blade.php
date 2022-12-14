 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
         <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
         <span class="brand-text font-weight-light">AdminLTE 3</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block">{{ auth()->user()->name }}</a>
             </div>
         </div>

         <!-- SidebarSearch Form -->
         {{-- <div class="form-inline">
             <div class="input-group" data-widget="sidebar-search">
                 <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                     aria-label="Search">
                 <div class="input-group-append">
                     <button class="btn btn-sidebar">
                         <i class="fas fa-search fa-fw"></i>
                     </button>
                 </div>
             </div>
         </div> --}}

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 @if (auth()->user()->level == "karyawan")
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-clock"></i>
                         <p>
                             Absensi
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('absensi-masuk') }}" class="nav-link ">
                                 <i class="far fa-clock nav-icon"></i>
                                 <p>Absen Masuk</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('absensi-pulang') }}" class="nav-link">
                                 <i class="far fa-clock nav-icon"></i>
                                 <p>Absen Pulang</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 @endif
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-file-alt"></i>
                         <p>
                             Laporan Absensi
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                        @if (auth()->user()->level == "karyawan") 
                        <li class="nav-item">
                             <a href="#" class="nav-link ">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Laporan Per Karyawan</p>
                             </a>
                         </li>
                         @endif
                         @if (auth()->user()->level == "admin")
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Laporan Keseluruhan</p>
                             </a>
                         </li>
                         @endif
                     </ul>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('logout') }}" class=" btn btn-danger nav-link">
                         <i class="nav-icon fas fa-file-alt"></i>
                         <p>Logout</p>
                     </a>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
