<?php if ($this->session->userdata('level')=="Administrator") { ?>
    <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">
          <div class="h-100">
          <div class="user-wid text-center py-4">
              <div class="user-img">
                  <img src="<?php echo base_url('assets/images/users/'.$myuser->foto) ?>" alt="" class="avatar-lg mx-auto rounded-circle" widht="120">
              </div>
              <div class="mt-3">
                  <a href="#" class="text-dark font-weight-medium font-size-16"><?=$this->session->userdata('nm_user') ?></a>
                  <p class="text-body mt-1 mb-0 font-size-13"><?=$this->session->userdata('level') ?></p>
              </div>
          </div>
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="<?php echo site_url();?>adm/dashboard" class=" waves-effect">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>


                <li>
                    <a href="<?php echo site_url();?>adm/laporan" class=" waves-effect">
                        <i class="fas fa-car "></i>
                        <span>Kendaraan</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo site_url();?>adm/alternatif" class=" waves-effect">
                        <i class="fas fa-address-book"></i>
                        <span>Alternatif</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo site_url();?>adm/kriteria" class=" waves-effect">
                        <i class="fas fa-bookmark"></i>
                        <span>Kriteria</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo site_url();?>adm/laporan" class=" waves-effect">
                        <i class="fas fa-book"></i>
                        <span>Laporan</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo site_url();?>adm/user" class=" waves-effect">
                        <i class="fa fa-cogs"></i>
                        <span>Users</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo site_url();?>adm/ubah_password" class=" waves-effect">
                        <i class="fa fa-cog"></i>
                        <span>Ubah Password</span>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url('login/logout')?>" onclick="return confirm('Apakah anda ingin logout?')" class=" waves-effect">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->

<?php } else { ?>
    <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">
          <div class="h-100">
          <div class="user-wid text-center py-4">
              <div class="user-img">
                  <img src="<?php echo base_url('assets/images/users/'.$myuser->foto) ?>" alt="" class="avatar-lg mx-auto rounded-circle" widht="120">
              </div>
              <div class="mt-3">
                  <a href="#" class="text-dark font-weight-medium font-size-16"><?=$this->session->userdata('nm_user') ?></a>
                  <p class="text-body mt-1 mb-0 font-size-13"><?=$this->session->userdata('level') ?></p>
              </div>
          </div>
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="<?php echo site_url();?>subag/dashboard" class=" waves-effect">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo site_url();?>subag/alternatif" class=" waves-effect">
                        <i class="fas fa-bookmark"></i>
                        <span>Alternatif</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo site_url();?>subag/laporan" class=" waves-effect">
                        <i class="fas fa-book"></i>
                        <span>Laporan</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo site_url();?>subag/ubah_password" class=" waves-effect">
                        <i class="fa fa-cog"></i>
                        <span>Ubah Password</span>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url('login/logout')?>" onclick="return confirm('Apakah anda ingin logout?')" class=" waves-effect">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->

<?php } ?>