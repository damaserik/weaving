     <div class="content-wrapper">
        <div class="page-title">
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>&nbsp;Data / Input Eff Shuttle3</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="<?php echo site_url('shtl3/inshtl3/simpan')?>"> 
                      <fieldset>
                      </br>
                        <!-- <legend>Form Input Eff Ajl</legend> -->
                        <div class="col-md-12" style="font-size: 12px;">

                        <div class="row">
                          <div class="col-md-6">
                          <!-- isi input disini -->
                          <div class="row">
                          <label class="col-md-4">TGL INPUT</label>
                            <input class="form-control col-md-6" name="tgl_input" type="date" placeholder="TGL INPUT" required=""autocomplete="off" style="font-size: 12px;">
                          </div></br>

                          <div class="row">
                          <label class="col-md-4">NO MESIN</label>
                            <input class="form-control form-control col-md-6" list="nomsn" type="text" name="no_mesin" placeholder="--MESIN--" autocomplete="off"required style="font-size: 12px;">
                            <datalist id="nomsn">
                              <?php foreach ($mesin_shtl3->result_array() as $x ) {?>
                                <option value="<?php echo $x['no_mesin']; ?>">DAERAH&ensp;<?php echo $x['daerah'];?>&ensp;|&ensp;LINE&ensp;<?php echo $x['line'];?></option>
                              <?php } ?>
                          </datalist>
                          </div></br>

                          <div class="row">
                          <label class="col-md-4">KONSTRUKSI</label>
                            <input class="form-control form-control col-md-6" list="kons" type="text" name="jns_konstruksi" placeholder="--PILIH KONSTRUKSI--" autocomplete="off"required style="font-size: 12px;">
                            <datalist id="kons">
                              <?php foreach ($konstruksi_shtl3->result_array() as $x ) {?>
                                <option value="<?php echo $x['jns_konstruksi']; ?>"><?php echo $x['jns_konstruksi']; ?></option>
                              <?php } ?>
                            </datalist>
                          </div></br>

                          <div class="row">
                          <label class="col-md-4">NE BENANG</label>
                            <input class="form-control form-control col-md-6" list="nebng" type="text" name="kd_benang" placeholder="--PILIH BENANG--" autocomplete="off"required style="font-size: 12px;">
                            <datalist id="nebng">
                              <?php foreach ($benang_shtl3->result_array() as $x) { ?>
                                <option value="<?php echo $x['kd_benang']; ?>"><?php echo $x['ne']; ?>&ensp;|&ensp;<?php echo $x['asal_benang']; ?></option>
                              <?php } ?>
                            </datalist>
                          </div></br>

                          <div class="row">
                            <label class="col-md-4">MTC</label>
                              <input class="form-control form-control col-md-6" list="nmtc" type="text" name="kd_mtc" placeholder="--PILIH MTC--" autocomplete="off"required style="font-size: 12px;">
                              <datalist id="nmtc">
                                <?php foreach ($mtc_shtl3->result_array() as $x) { ?>
                                  <option value="<?php echo $x['kd_mtc']; ?>"><?php echo $x['nama_mtc']; ?></option>
                                <?php } ?>
                              </datalist>
                          </div></br>

                          <!-- isi input disini selesai -->



                        
                        <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! BATAS FORM !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->



                        </div>
                          <div class="col-md-6">
                          <!-- isi input disini -->

                            <div class="row">
                              <label class="col-md-3">KA GRUP</label>
                                <input class="form-control form-control col-md-6" list="kgrup" type="text" name="kd_kagrup" placeholder="--PILIH KA GRUP--" autocomplete="off"required style="font-size: 12px;">
                                <datalist id="kgrup">
                                  <?php foreach ($kagrup_shtl3->result_array() as $x) { ?>
                                    <option value="<?php echo $x['kd_kagrup']; ?>"><?php echo $x['nama_kagrup']; ?></option>
                                  <?php } ?>
                                </datalist>
                            </div></br>

                            <div class="row">
                              <label class="col-md-3">EFF</label>
                                <input class="form-control col-md-6" name="eff" type="text" maxlength="4" input max="100" min="0" placeholder="EFF" id="eff" required=""autocomplete="off"style="font-size: 12px;" >
                            </div></br>

                            <div class="row">
                              <label class="col-md-3">PRODUKSI</label>
                                <input class="form-control col-md-6" name="produksi" type="text" placeholder="PRODUKSI" required=""autocomplete="off"style="font-size: 12px;" >
                            </div></br>

                            <div class="row">
                              <label class="col-md-3">PICK</label>
                                <input class="form-control col-md-6" name="pick" type="text" placeholder="PICK" id="wf1" onkeyup="sum();" required=""autocomplete="off"style="font-size: 12px;" >
                            </div></br>
                          <!-- isi input disini selesai -->                      
                          </div>                                                 
                        </div>

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
<!--       <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.js"></script>
      <script>
        function sum() {
            var w1 = document.getElementById('wf1').value;
            var w2 = document.getElementById('wf2').value;
            var result = parseFloat(w1) + parseFloat(w2);
            if (!isNaN(result)) {
              document.getElementById('pk').value = result;
            }
      }

      $('#yds').keyup(function(){
          var yds         = parseFloat($('#yds').val()) || 0;
          var jumlah      = parseFloat(yds * 0.9144);
          var fix         = jumlah.toFixed(2);
          $('#mtr').val(fix);
      });
      $('#mc').keyup(function(){
            var yds         = parseFloat($('#mc').val()) || 0;
            var jumlah      = parseFloat(yds * 0.9144);
            var fix         = jumlah.toFixed(2);
            $('#msn').val(fix);
      });
      $('#eff').keyup(function(){
          var eff         = parseFloat($('#eff').val()) || 0;
          if(eff >= 90 && eff <= 100){
            sil = '90-100';
          }else if (eff >= 85 && eff <= 89){
            sil = '85-89';
          }else if (eff >= 80 && eff <= 84){
            sil = '80-84';
          }else if (eff >= 70 && eff <= 79){
            sil = '70-79';
          }else if (eff >= 60 && eff <= 69){
            sil = '60-69';
          }else if (eff >= 0 && eff <= 59){
            sil = '0-59';
          }else{
            sil = '0';
          }
          $('#weff').val(sil);
      });
      </script> -->