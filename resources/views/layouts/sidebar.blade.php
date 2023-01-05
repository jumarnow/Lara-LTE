<section class="sidebar">
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header bg-blue">Th. Pelajaran :  </li>
        <li class="{{ Request::is('/') ? 'active' : '' }}">
            <a href="{{ url('/') }}">
            <i class="fa fa-home"></i> <span>Dashboard</span>
            <span class="pull-right-container">
            </span>
            </a>
        </li>
        <li class="{{ Request::is('Data Pegawai') ? 'active' : '' }}">
            <a href="{{ url('Data Pegawai') }}">
            <i class="fa fa-refresh"></i> <span>Data Pegawai</span>
            <span class="pull-right-container">
            </span>
            </a>
        </li>
        <li class="treeview {{ Request::is('user','level') ? 'active' : '' }}">
            <a href="#">
            <i class="fa fa-list"></i> <span>Data Master</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ Request::is('user') ? 'active' : '' }}">
                    <a href="{{ url('user') }}">
                    <i class="fa fa-circle-o"></i> <span>Data user</span>
                    </a>
                </li>
                <li class="{{ Request::is('level') ? 'active' : '' }}">
                    <a href="{{ url('level') }}">
                    <i class="fa fa-circle-o"></i> <span>Data Level</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</section>