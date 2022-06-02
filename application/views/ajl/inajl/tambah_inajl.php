     <div class="content-wrapper">
        <div class="page-title">
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>&nbsp;Data / Input Eff Ajl</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="<?php echo site_url('ajl/inajl/simpan')?>"> 
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
                              <?php foreach ($mesin->result_array() as $x ) {?>
                                <option value="<?php echo $x['no_mesin']; ?>">ZONA&ensp;<?php echo $x['zona'];?>&ensp;|&ensp;RS&ensp;<?php echo $x['rs'];?></option>
                              <?php } ?>
                          </datalist>
                          </div></br>

                          <div class="row">
                          <label class="col-md-4">KONSTRUKSI</label>
                            <input class="form-control form-control col-md-6" list="kons" type="text" name="jns_konstruksi" placeholder="--PILIH KONSTRUKSI--" autocomplete="off"required style="font-size: 12px;">
                            <datalist id="kons">
                              <?php foreach ($konstruksi->result_array() as $x ) {?>
                                <option value="<?php echo $x['jns_konstruksi']; ?>"><?php echo $x['jns_konstruksi']; ?></option>
                              <?php } ?>
                            </datalist>
                          </div></br>

                          <div class="row">
                          <label class="col-md-4">NE BENANG</label>
                            <input class="form-control form-control col-md-6" list="nebng" type="text" name="kd_benang" placeholder="--PILIH BENANG--" autocomplete="off"required style="font-size: 12px;">
                            <datalist id="nebng">
                              <?php foreach ($benang->result_array() as $x) { ?>
                                <option value="<?php echo $x['kd_benang']; ?>"><?php echo $x['ne']; ?>&ensp;|&ensp;<?php echo $x['asal_benang']; ?></option>
                              <?php } ?>
                            </datalist>
                          </div></br>

                          <div class="row">
                          <label class="col-md-4">NO BEAM</label>
                            <input class="form-control col-md-6" name="no_beam" type="text" placeholder="NO BEAM" required=""autocomplete="off"style="font-size: 12px;" >
                          </div></br>

                          <div class="row">
                            <label class="col-md-4">KWAL KANJI</label>
                              <input class="form-control col-md-6" name="kwal_kanji" type="text" placeholder="KWAL KANJI" required=""autocomplete="off"style="font-size: 12px;" >
                          </div></br>

                          <div class="row">
                            <label class="col-md-4">TGL PASANG</label>
                              <input class="form-control col-md-6" name="tgl_pasang" type="date" placeholder="TGL PASANG" required=""autocomplete="off" style="font-size: 12px;">
                          </div></br>

                          <div class="row">
                            <label class="col-md-4">TGL KANJI</label>
                              <input class="form-control col-md-6" name="tgl_kanji" type="date" placeholder="TGL KANJI" required=""autocomplete="off" style="font-size: 12px;">
                          </div></br>  

                          <div class="row">
                            <label class="col-md-4">VISCO 1</label>
                              <input class="form-control col-md-6" name="visco_1" type="text" placeholder="VISCO 1" required=""autocomplete="off"style="font-size: 12px;" >
                          </div></br>

                          <div class="row">
                            <label class="col-md-4">VISCO 2</label>
                              <input class="form-control col-md-6" name="visco_2" type="text" placeholder="VISCO 2" required=""autocomplete="off"style="font-size: 12px;" >
                          </div></br>

                          <div class="row">
                            <label class="col-md-4">SPU</label>
                              <input class="form-control col-md-6" name="spu" type="text" placeholder="SPU" required=""autocomplete="off"style="font-size: 12px;" >
                          </div></br>

                          <div class="row">
                            <label class="col-md-4">SET KANJI</label>
                              <input class="form-control col-md-6" name="set_kanji" type="text" placeholder="SET KANJI" required=""autocomplete="off"style="font-size: 12px;" >
                          </div></br>

                          <div class="row">
                            <label class="col-md-4">MTC</label>
                              <input class="form-control form-control col-md-6" list="nmtc" type="text" name="kd_mtc" placeholder="--PILIH MTC--" autocomplete="off"required style="font-size: 12px;">
                              <datalist id="nmtc">
                                <?php foreach ($mtc->result_array() as $x) { ?>
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
                                  <?php foreach ($kagrup->result_array() as $x) { ?>
                                    <option value="<?php echo $x['kd_kagrup']; ?>"><?php echo $x['nama_kagrup']; ?></option>
                                  <?php } ?>
                                </datalist>
                            </div></br>

                            <div class="row">
                              <label class="col-md-3">EFF</label>
                                <input class="form-control col-md-6" name="eff" type="text" maxlength="3" input max="100" min="0" placeholder="EFF" id="eff" required=""autocomplete="off"style="font-size: 12px;" >
                            </div></br>

                            <div class="row">
                              <label class="col-md-3">PUTUS LUSI</label>
                                <input class="form-control col-md-6" name="putus_lusi" type="text" placeholder="PUTUS LUSI" required=""autocomplete="off"style="font-size: 12px;" >
                            </div></br>

                            <div class="row">
                              <label class="col-md-3">WF 1</label>
                                <input class="form-control col-md-6" name="wf_1" type="text" placeholder="WF 1" id="wf1" onkeyup="sum();" required=""autocomplete="off"style="font-size: 12px;" >
                            </div></br>

                            <div class="row">
                              <label class="col-md-3">WF 2</label>
                                <input class="form-control col-md-6" name="wf_2" type="text" placeholder="WF 2" id="wf2" onkeyup="sum();" required=""autocomplete="off"style="font-size: 12px;" >
                            </div></br>

                            <div class="row">
                              <label class="col-md-3">PUTUS PAKAN</label>
                                <input class="form-control col-md-6" name="putus_pakan" type="text" placeholder="PUTUS PAKAN" id="pk" readonly="" required=""autocomplete="off"style="font-size: 12px;" >
                            </div></br>

                            <div class="row">
                              <label class="col-md-3">WEFF</label>
                                <input class="form-control col-md-6" name="weff" type="text" placeholder="WEFF" id="weff" readonly="" required=""autocomplete="off" style="font-size: 12px;">
                            </div></br>

                            <div class="row">
                            <label class="col-md-3">RPM</label>
                              <input class="form-control col-md-6" name="rpm" type="text" placeholder="RPM" required=""autocomplete="off" style="font-size: 12px;">
                            </div></br>    

                            <div class="row">
                              <label class="col-md-3">GULUNG YRD</label>
                                <input class="form-control col-md-6" name="gulung_yrd" type="text" placeholder="GULUNG YRD" id="yds" required=""autocomplete="off"style="font-size: 12px;" >
                            </div></br>

                            <div class="row">
                              <label class="col-md-3">GULUNG MTR</label>
                                <input class="form-control col-md-6" name="gulung_mtr" type="text" placeholder="GULUNG MTR" readonly="" id="mtr" required=""autocomplete="off"style="font-size: 12px;" >
                            </div></br>

                            <div class="row">
                              <label class="col-md-3">MC</label>
                                <input class="form-control col-md-6" name="mc" type="text" placeholder="MC" id="mc" required=""autocomplete="off"style="font-size: 12px;" >
                            </div></br>

                            <div class="row">
                              <label class="col-md-3">MSN</label>
                                <input class="form-control col-md-6" name="msn" type="text" placeholder="MSN" id="msn" readonly="" required=""autocomplete="off"style="font-size: 12px;" >
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
      <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.js"></script>
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
      </script>