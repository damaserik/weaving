     <div class="content-wrapper">
        <div class="page-title">
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>&nbsp;Data Maintenance / Tambah Maintenance</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-lg-12">
                    <form method="POST" action="<?php echo site_url('ajl/mtc/simpan')?>"> 
                      <fieldset>
                        </br>
                        <div class="col-md-12">
                        <div class="row">
                          <label class="col-md-2">KODE MTC</label>
                          <div class="col-md-4">
                            <input class="form-control" name="kd_mtc" type="text" placeholder="KODE MTC" value="<?php echo $kode ?>" readonly  style="font-size: 12px;">
                        </div>
                        </div></br>
                        <div class="row">
                          <label class="col-md-2">NAMA MTC</label>
                          <div class="col-md-4">
                            <input class="form-control" name="nama_mtc" type="text" placeholder="NAMA MTC" required=""autocomplete="off"  style="font-size: 12px;">
                          </div>
                        </div></br>
                        <div class="row">
                          <div class="col-md-4">
                            <button class="btn btn-primary"  type="submit" style="font-size: 12px;">SUBMIT</button>
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