     <div class="content-wrapper">
        <div class="page-title">
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>&nbsp;Data Konstruksi / Tambah Konstruksi</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-lg-12">
                    <form method="POST" action="<?php echo site_url('ajl/konstruksi/simpan')?>"> 
                      <fieldset>
                        </br>
                        <div class="col-md-12">
                        
                        <div class="row">
                          <label class="col-md-2">KONSTRUKSI</label>
                          <div class="col-md-4">
                            <input class="form-control" name="jns_konstruksi" type="text" placeholder="KONSTRUKSI" required="" autofocus="" autocomplete="off" style="font-size: 12px;">
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