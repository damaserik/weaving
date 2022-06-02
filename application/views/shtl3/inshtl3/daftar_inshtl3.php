     <div class="content-wrapper">
        <div class="page-title">
          <div>
            <ul class="breadcrumb side">
            <li><i class="fa fa-home fa-lg"></i></li>
              <li class="active"><a href="inajl">&nbsp; Data Table Eff Ajl
            </ul>
          </div>
          <div style="text-align: left;"><a class="btn-sm btn btn-primary btn-flat btn-float" href="<?=site_url('shtl3/inshtl3/tambah/')?>"><i class="fa fa-lg fa-plus"></i></a></div>
          
        </div></hr>

       <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover table-bordered" id="sampleTable" style="font-size: 11px;">
                  <thead>
                    <tr>
                      <th>TGL INPUT</th>
                      <th>MESIN</th>
                      <th>KONSTRUKSI</th>
                      <th>NE</th>
                      <th>ASAL BNG</th>
                      <th>MTC</th>
                      <th>EFF</th>
                      <th>PRODUKSI</th>
                      <th>PICK</th>
                      <th width="10%">AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($dada as $row){ ?>
                    
                    <tr>
                      <td><?php echo date('d/m/Y', strtotime($row->tgl_input));?></td>
                      <td><?=$row->no_mesin?></td>
                      <td><?=$row->jns_konstruksi?></td>
                      <td><?=$row->ne?></td>
                      <td><?=$row->asal_benang?></td>
                      <td><?=$row->nama_mtc?></td>
                      <td><?=$row->eff?></td>
                      <td><?=$row->produksi?></td>
                      <td><?=$row->pick?></td>
                      <td>
<!--                         <a class="btn btn-info btn-flat" style="font-size: 8px;" href="<?php echo site_url('shtl3/inshtl3/ubah/'.$row->kd_ajl) ?>"><i class="fa fa-lg fa-refresh"></i></a> -->

                        <a class="btn btn-warning btn-flat" style="font-size: 8px;" href="<?php echo site_url('shtl3/inshtl3/hapus/'.$row->kd_sht3) ?>" onclick="return confirm('Yakin Hapus ?')"><i class="fa fa-lg fa-trash"></i></a>  
                    </td>
                    </tr>

                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>