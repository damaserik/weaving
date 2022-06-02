     <div class="content-wrapper">
        <div class="page-title">
          <div>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li class="active"><a href="#">&nbsp;Data Konstruksi</a></li>
            </ul>
          </div>
          <div>
          <a class="btn-sm btn btn-primary btn-flat" href="<?=site_url('ajl/konstruksi/tambah/')?>"><i class="fa fa-lg fa-plus"></i></a>
         </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover table-bordered" id="sampleTable" style="font-size: 12px;">
                  <thead>
                    <tr>
                      <th>KONSTRUKSI</th>
                      <th>AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $i=0; foreach ($dataKonstruksi as $row){ $i++; ?>
                    
                    <tr>
                      <td><?=$row->jns_konstruksi?></td>
                      <td>
                      <a class="btn btn-warning btn-flat" style="font-size: 8px;" href="<?php echo site_url('ajl/konstruksi/hapus/'.$row->jns_konstruksi) ?>" onclick="return confirm('Yakin Hapus ?')"><i class="fa fa-lg fa-trash"></i></a>  
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