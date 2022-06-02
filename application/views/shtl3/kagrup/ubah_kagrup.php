<!-- <?php
if($this->input->post('submitupdate')){
$nama = set_value('nama_mtc');
}else{
  $kode = $findMtc->kd_mtc;
  $nama = $findMtc->nama_mtc;
}
?>
     <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Form Ubah Maintenance</h1>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Data master / Maintenance / ubah mtc</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="row">
                <div class="col-lg-12">
                  <div class="well bs-component">
                    <?php echo validation_errors();?>
                    <?php echo form_open('mtc/ubah/'. $kode ,['class'=>'col s12'])?>
                      <fieldset>
                        <legend>Data Maintenance</legend>
                        <div class="form-group">
                          <label class="col-lg-3 control-label" for="inputEmail">Kode Mtc</label>
                          <div class="col-lg-9">
                            <input type="text" name="kd_mtc"  value="<?php echo $kode?>" readonly>
                          </div>
                        </div>
                        <hr>
                        <br>
                        <div class="form-group">
                          <label class="col-lg-3 control-label">Nama Mtc</label>
                          <div class="col-lg-9">
                            <input class="form-control" name="nama_mtc" type="text" value="<?php echo $nama?>">
                          </div>
                        </div>
                        <hr>
                        <br>
                        <div class="form-group">
                          <div class="col-lg-9 col-lg-offset-3">
                            <button class="btn btn-default" type="cancel">Cancel</button>
                            <button class="btn btn-primary" type="submit">Submit</button>
                          </div>
                        </div>
                      </fieldset>
                    <?php form_close() ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->