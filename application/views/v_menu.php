<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= base_url() ?>assets/dist/img/profil.png" class="img-circle" alt="User Image">
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li><a href="<?= base_url() ?>anggota"><i class="fa fa-user"></i> Data Anggota</a></li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-desktop"></i>
                    <span>Data Buku</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= base_url() ?>pengarang"><i class="fa fa-circle-o"></i> Pengarang</a></li>
                    <li><a href="<?= base_url() ?>penerbit"><i class="fa fa-circle-o"></i> Penerbit</a></li>
                    <li><a href="<?= base_url() ?>buku"><i class="fa fa-circle-o"></i> Buku</a></li>
                </ul>
            </li>

            <hr>

            <li><a href="<?= base_url() ?>login/logout"><i class="fa fa-sign-out"></i> Logout</a></li>

    </section>
    <!-- /.sidebar -->
</aside>