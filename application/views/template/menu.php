        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    <div>
                        <img src="<?php echo base_url()?>assets/img/admin-avatar.png" width="45px" />
                    </div>
                    <div class="admin-info">
                        <div class="font-strong"><?php echo $this->session->userdata('first_name'); ?></div><small>Administrador</small></div>
                </div>
                <ul class="side-menu metismenu">
                    <li>
                        <a class="active" href="<?php echo base_url() ?>home"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="heading">FEATURES</li>
                    <li>
                        <a href="<?php echo base_url() ?>sales"><i class="sidebar-item-icon fa fa-shopping-cart"></i>
                            <span class="nav-label">VENTAS</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>customers"><i class="sidebar-item-icon fa fa-users"></i>
                            <span class="nav-label">CLIENTES</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>users"><i class="sidebar-item-icon fa fa-user"></i>
                            <span class="nav-label">USUARIOS</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">