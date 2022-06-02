     <div class="content-wrapper">
        <div class="page-title">
          <div>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li class="active"><a href="#">&nbsp;Data Maintenance</a></li>
            </ul>
          </div>
          <div>
          <a class="btn-sm btn btn-primary btn-flat" href="<?=site_url('shtl3/mtc/tambah/')?>"><i class="fa fa-lg fa-plus"></i></a>
         </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover table-bordered" id="sampleTable"  style="font-size: 12px;">
                  <thead>
                    <tr>
                      <th>KODE MTC</th>
                      <th>NAMA</th>
                      <th>AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $i=0; foreach ($dataMtc as $row){ $i++; ?>
                    
                    <tr>
                      <td><?=$row->kd_mtc?></td>
                      <td><?=$row->nama_mtc?></td>
                      <td>
<!--                       <a class="btn btn-info btn-flat" style="font-size: 8px;" href="<?php echo site_url('shtl3/mtc/ubah/'.$row->kd_mtc) ?>"><i class="fa fa-lg fa-refresh"></i></a> -->
                      <a class="btn btn-warning btn-flat" style="font-size: 8px;" href="<?php echo site_url('shtl3/mtc/hapus/'.$row->kd_mtc) ?>" onclick="return confirm('Yakin Hapus ?')"><i class="fa fa-lg fa-trash"></i></a>  
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