<?php
if($this->input->post('submitUpdate')){
$ne = set_value('ne');
$asl = set_value('asal_benang');
$lot = set_value('lot');
}else{
  $kode = $findBenang->kd_benang;
  $ne = $findBenang->ne;
  $asl = $findBenang->asal_benang;
  $lot = $findBenang->lot;
}
?>
     <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Form Ubah Benang</h1>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Data master / Benang / ubah benang</li>
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
                    <?php echo form_open('benang/ubah/'. $kode ,['class'=>'col s12'])?>
                      <fieldset>
                        <legend>Data Benang</legend>
                        <div class="form-group">
                          <label class="col-lg-3 control-label" for="inputEmail">Kode Benang</label>
                          <div class="col-lg-9">
                            <input type="text" name="kd_benang"  value="<?php echo $kode?>" readonly>
                          </div>
                        </div>
                        <hr>
                        <br>
                        <div class="form-group">
                          <label class="col-lg-3 control-label">NE</label>
                          <div class="col-lg-9">
                            <input class="form-control" name="ne" type="text" value="<?php echo $ne?>">
                          </div>
                        </div>

                        <hr>
                        <br>
                        <div class="form-group">
                          <label class="col-lg-3 control-label">Asal Benang</label>
                          <div class="col-lg-9">
                            <input class="form-control" name="asal_benang" type="text" value="<?php echo $asl?>">
                          </div>
                        </div>
                        <hr>
                        <br>
                        <div class="form-group">
                          <label class="col-lg-3 control-label">Lot</label>
                          <div class="col-lg-9">
                            <input class="form-control" name="lot" type="text" value="<?php echo $lot?>">
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
      </div>