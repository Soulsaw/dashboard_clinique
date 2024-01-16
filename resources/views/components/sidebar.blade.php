<aside class="main-sidebar sidebar-dark-secondary elevation-0">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link bg-white">
        <img src="dist/img/logo_epo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-0" style="opacity: 1">
        <span class="brand-text font-weight-bold text-primary">Clinique</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('medecins') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-md"></i>
                        <p>
                            Medecins
                            <!--<span class="right badge badge-danger">New</span>-->
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('patients') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-nurse"></i>
                        <p>
                            Patients
                            <!--<span class="right badge badge-danger">New</span>-->
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('specialites') }}" class="nav-link">
                        <i class="nav-icon fas fa-graduation-cap"></i>
                        <p>
                            Specialites
                            <!--<span class="right badge badge-danger">New</span>-->
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('rendezvous') }}" class="nav-link">
                        <i class="nav-icon fas fa-calendar-plus"></i>
                        <p>
                            Rendez-vous
                            <!--<span class="right badge badge-danger">New</span>-->
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>