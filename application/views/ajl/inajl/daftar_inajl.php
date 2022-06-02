     <div class="content-wrapper">
        <div class="page-title">
          <div>
            <ul class="breadcrumb side">
            <li><i class="fa fa-home fa-lg"></i></li>
              <li class="active"><a href="inajl">&nbsp; Data Table Eff Ajl
            </ul>
          </div>
          <div style="text-align: left;"><a class="btn-sm btn btn-primary btn-flat btn-float" href="<?=site_url('ajl/inajl/tambah/')?>"><i class="fa fa-lg fa-plus"></i></a></div>
          
        </div></hr>

<!--   <div class="row">
    <div class="col-md-10 col-sm-9">
      <h4>Data Table Eff Ajl</h4>
    </div>
    <div class="col-md-2 col-sm-3">
      <a class="btn btn-primary btn-flat btn-float" href="<?=site_url('ajl/inajl/tambah/')?>"><i class="fa fa-lg fa-plus"></i></a>
    </div>
  </div> -->
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover table-bordered" id="sampleTable" style="font-size: 11px;">
                  <thead>
                    <tr>
                      <!-- <th>NO</th> -->
                      <th>TGL INPUT</th>
                      <th>MESIN</th>
                      <th>KONSTRUKSI</th>
                      <th>NE</th>
                      <th>ASAL BNG</th>
                      <!-- <th>NO BEAM</th> -->
                      <!-- <th>KWAL KNJ</th> -->
                      <!-- <th>TGL PASANG</th> -->
                      <th>TGL KANJI</th>                     
                      <!-- <th>VISCO 1</th> -->
                      <!-- <th>VISCO 2</th> -->
                      <!-- <th>SPU</th> -->
                      <!-- <th>KNJ SET</th> -->
                      <th>MTC</th>
                      <!-- <th>KG</th> -->
                      <th>EFF</th>
                      <th>PT LS</th>
                      <th>WF 1</th>
                      <th>WF 2</th>
                      <th>PT PK</th>
                      <th>WEFF</th>
                      <th>RPM</th>
                      <th>MSN</th>
                      <th>GUL MTR</th>
                      <!-- <th>GUL YRD</th> -->
                      <th>MC</th>
                      <th width="10%">AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($input_ajl as $row){ ?>
                    
                    <tr>
                      <!-- <td><?=$row->kd_ajl?></td> -->
                      <td><?php echo date('d/m/Y', strtotime($row->tgl_input));?></td>
                      <td><?=$row->no_mesin?></td>
                      <td><?=$row->jns_konstruksi?></td>
                      <td><?=$row->ne?></td>
                      <td><?=$row->asal_benang?></td>
                      <!-- <td><?=$row->no_beam?></td> -->
                      <!-- <td><?=$row->kwal_kanji?></td> -->
                      <!-- <td><?=$row->tgl_pasang?></td> -->
                      <td><?=$row->tgl_kanji?></td>
                      <!-- <td><?=$row->visco_1?></td> -->
                      <!-- <td><?=$row->visco_2?></td> -->
                      <!-- <td><?=$row->spu?></td> -->
                      <!-- <td><?=$row->set_kanji?></td> -->
                      <td><?=$row->nama_mtc?></td>
                      <!-- <td><?=$row->nama_kagrup?></td> -->
                      <td><?=$row->eff?></td>
                      <td><?=$row->putus_lusi?></td>
                      <td><?=$row->wf_1?></td>
                      <td><?=$row->wf_2?></td>
                      <td><?=$row->putus_pakan?></td>
                      <td><?=$row->weff?></td>
                      <td><?=$row->rpm?></td>
                      <td><?=$row->msn?></td>
                      <td><?=$row->gulung_mtr?></td>
                      <!-- <td><?=$row->gulung_yrd?></td> -->
                      <td><?=$row->mc?></td>
                      <td>
<!--                         <a class="btn btn-info btn-flat" style="font-size: 8px;" href="<?php echo site_url('ajl/inajl/ubah/'.$row->kd_ajl) ?>"><i class="fa fa-lg fa-refresh"></i></a> -->
                        <a class="btn btn-warning btn-flat" style="font-size: 8px;" href="<?php echo site_url('ajl/inajl/hapus/'.$row->kd_ajl) ?>" onclick="return confirm('Yakin Hapus ?')"><i class="fa fa-lg fa-trash"></i></a>  
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