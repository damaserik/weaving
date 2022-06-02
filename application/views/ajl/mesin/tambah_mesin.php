     <div class="content-wrapper">
        <div class="page-title">
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>&nbsp;Data Mesin / Tambah Mesin</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-lg-12">
                    <form method="POST" action="<?php echo site_url('ajl/mesin/simpan')?>"> 
                      <fieldset>
                        </br>
                        <div class="col-md-12">
                        
                        <div class="row">
                          <label class="col-md-2">NO MESIN</label>
                          <div class="col-md-4">
                            <input class="form-control" name="no_mesin" type="text" placeholder="NO MESIN" required="" autofocus="" autocomplete="off" style="font-size: 12px;">
                          </div>
                        </div></br>

                        <div class="row">
                          <label class="col-md-2">ZONA</label>
                          <div class="col-md-4">
                            <input class="form-control" name="zona" type="text" placeholder="ZONA" required=""autocomplete="off" style="font-size: 12px;">
                          </div>
                        </div></br>

                        <div class="row">
                          <label class="col-md-2">RS</label>
                          <div class="col-md-4">
                            <input class="form-control" name="rs" type="text" placeholder="RS" required="" autocomplete="off" style="font-size: 12px;">
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