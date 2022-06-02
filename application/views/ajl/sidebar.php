 <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3> <a href="<?php echo site_url();?>/ajl/home">Aplikasi AJL</a></h3>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Master Data</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="<?php echo site_url('ajl/mesin') ?>">Mesin</a>
                        </li> 
                        <li>
                            <a href="<?php echo site_url('ajl/konstruksi')?>">Konstruksi</a>
                        </li>
						<li>
                            <a href="<?php echo site_url('ajl/benang')?>">Benang</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('ajl/mtc')?>">Maintenance</a>
                        </li>
						<li>
                            <a href="<?php echo site_url('ajl/kagrup')?>">Ka Grup</a>
                        </li>
						
                    </ul>
                </li>
                <li>
                    <a href="<?php echo site_url('ajl/inajl')?>">Input Data Ajl</a>
                </li>

                <li class="active">
                    <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Laporan</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu2">
                        <li>
                            <a href="<?php echo site_url('ajl/laporan')?>">Konstruksi</a>
                        </li> 
                        <li>
                            <a href="<?php echo site_url('ajl/laporan/laporan_permesin')?>">Mesin</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('ajl/laporan/laporan_montir')?>">Maintenance</a>
                        </li>        
                        <li>
                            <a href="<?php echo site_url('ajl/laporan/laporan_weff')?>">Weff</a>
                        </li>                       
                    </ul>
                </li>
            <li style=" bottom: 0; width: 100%; position: absolute;">
                <a href="<?php echo site_url('home');?>"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </li> 
            </ul>

   
        </nav>