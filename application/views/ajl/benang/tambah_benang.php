     <div class="content-wrapper">
        <div class="page-title">
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>&nbsp;Data Benang / Tambah Benang</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-lg-12">
                    <form method="POST" action="<?php echo site_url('ajl/benang/simpan')?>"> 
                      <fieldset>
                        </br>
                        <div class="col-md-12">
                        <div class="row">
                          <label class="col-md-2">NO</label>
                          <div class="col-md-4">
                            <input type="text"class="form-control" name="kd_benang" value="<?php echo $kode ?>" readonly style="font-size: 12px;">
                        </div>
                        </div></br>
                        <div class="row">
                          <label class="col-md-2">NE BENANG</label>
                          <div class="col-md-4">
                            <input class="form-control" name="ne" type="text" placeholder="NE BENANG" required=""autocomplete="off" style="font-size: 12px;">
                          </div>
                        </div></br>
                        <div class="row">
                          <label class="col-md-2">ASAL BENANG</label>
                          <div class="col-md-4">
                            <input class="form-control" name="asal_benang" type="text" placeholder="ASAL BENANG" required="" autocomplete="off" style="font-size: 12px;">
                          </div>
                        </div></br>
                        <div class="row">
                          <label class="col-md-2">LOT</label>
                          <div class="col-md-4">
                            <input class="form-control" name="lot" type="text" placeholder="LOT" required="" autocomplete="off" style="font-size: 12px;">
                          </div>
                        </div></br>
                        <div class="row">
                          <div class="col-md-4">
                            <button class="btn btn-primary" type="submit" style="font-size: 12px;">SUBMIT</button>
                          </div>
                        </div></br>
                        </div>
                      </fieldset>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>