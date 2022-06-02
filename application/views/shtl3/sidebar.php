 <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3> <a href="<?php echo site_url();?>/shtl3/home">Shuttle 3</a></h3>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Master Data</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="<?php echo site_url('shtl3/mesin') ?>">Mesin</a>
                        </li> 
                        <li>
                            <a href="<?php echo site_url('shtl3/konstruksi')?>">Konstruksi</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('shtl3/benang')?>">Benang</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('shtl3/mtc')?>">Maintenance</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('shtl3/kagrup')?>">Ka Grup</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="<?php echo site_url('shtl3/inshtl3')?>">Input Data Shuttle 3</a>
                </li>

                <li class="active">
                    <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Laporan</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu2">
                        <li>
                            <a href="<?php echo site_url('shtl3/laporan')?>">Kain</a>
                        </li> 
                        <li>
                            <a href="<?php echo site_url('shtl3/laporan/laporan_permesin')?>">Mesin</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('shtl3/laporan/laporan_montir')?>">Maintenance</a>
                        </li>        
                       
                    </ul>
                </li>
            <li style=" bottom: 0; width: 100%; position: absolute;">
                <a href="<?php echo site_url('home');?>"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </li> 
            </ul>

   
        </nav>