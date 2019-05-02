<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= base_url('assets'); ?>/dist/img/avatar5.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p style="font-size: 12px"><?= ($_SESSION['nama_lengkap']) ? strtoupper($_SESSION['nama_lengkap']) : ''; ?></p>
                <a><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <?php if ($_SESSION['role'] == '1'): ?>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">MENU UTAMA</li>
                <li class="<?php echo menuControler('dashboard'); ?>">
                    <a href="<?= base_url('dashboard'); ?>">
                        <i class="fa fa-bar-chart"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="<?php echo menuControler('katpaket'); ?>">
                    <a href="<?= base_url('katpaket'); ?>">
                        <i class="fa fa-shopping-basket"></i> <span>Kategori Paket</span>
                    </a>
                </li>
                <li class="<?php echo menuControler('bahan'); ?>">
                    <a href="<?= base_url('bahan'); ?>">
                        <i class="fa fa-cubes"></i> <span>Bahan Baku</span>
                    </a>
                </li>
                <li class="<?php echo menuControler('makanan'); ?>">
                    <a href="<?= base_url('makanan'); ?>">
                        <i class="fa fa-cutlery"></i> <span>List Makanan</span>
                    </a>
                </li>
                <li class="header">TRANSAKSI</li>
                <?php
                $data3 = $this->db->query("SELECT status from t_pesanan where status like 'Menunggu Konfirmasi'");
                if ($data3->num_rows() > 0) {
                    $n='label pull-right bg-red';
                    $p='New';
                } else {
                    $n='';
                    $p='';
                }
                ?>
                <li class="<?php echo menuControler('pesanan'); ?>">
                    <a href="<?= base_url('pesanan'); ?>">
                        <i class="fa fa-tags"></i> <span>List Pesanan</span>
                        <span class="pull-right-container">
                            <small class="<?= $n; ?>"><?= $p; ?></small>
                        </span>
                    </a>
                </li>
                <li class="header">LAPORAN</li>
                
                <li class="<?php echo menuControler('laporan'); ?>">
                    <a href="<?= base_url('laporan'); ?>">
                        <i class="fa fa-tags"></i> <span>List Laporan</span>
                    </a>
                </li>
            </ul>
        <?php else: ?>
            <ul class="sidebar-menu">
                <li class="header">TRANSAKSI</li>
                <?php
                $data3 = $this->db->query("SELECT status from t_pesanan where status like 'Menunggu Konfirmasi'");
                if ($data3->num_rows() > 0) {
                    $n='label pull-right bg-red';
                    $p='New';
                } else {
                    $n='';
                    $p='';
                }
                ?>
                <li class="<?php echo menuControler('pesanan'); ?>">
                    <a href="<?= base_url('pesanan'); ?>">
                        <i class="fa fa-tags"></i> <span>List Pesanan</span>
                        <span class="pull-right-container">
                            <small class="<?= $n; ?>"><?= $p; ?></small>
                        </span>
                    </a>
                </li>
            </ul>
        <?php endif; ?>
    </section>
    <!-- /.sidebar -->
</aside>