     <div class="content-wrapper">
        <div class="page-title">
          <div>
            <ul class="breadcrumb side">
            <li><i class="fa fa-home fa-lg"></i></li>
              <li class="active"><a href="#">&nbsp;Data Mesin</a></li>
            </ul>
          </div>
          <div>
          <a class="btn-sm btn btn-primary btn-flat" href="<?=site_url('shtl3/mesin/tambah/')?>"><i class="fa fa-lg fa-plus"></i></a>
         </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover table-bordered" id="sampleTable" style="font-size: 12px;">
                  <thead>
                    <tr>
                      <th>NO MESIN</th>
                      <th>DAERAH</th>
                      <th>LINE</th>
                      <th>AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $i=0; foreach ($dataMesin as $row){ $i++; ?>
                    
                    <tr>
                      <td><?=$row->no_mesin?></td>
                      <td><?=$row->daerah?></td>
                      <td><?=$row->line?></td>
                      <td>
                      <a class="btn btn-warning btn-flat" style="font-size: 8px;" href="<?php echo site_url('shtl3/mesin/hapus/'.$row->no_mesin) ?>" onclick="return confirm('Yakin Hapus ?')"><i class="fa fa-lg fa-trash"></i></a>  
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