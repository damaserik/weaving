<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h4>Eff Montir</h4>
          </div>
        </div>
              <div class="row">
              	<div class="col-md-12" style="font-size: 13px;">
              		<div class="row">
                      <div class="row" style="padding: 0px 0px 0px 33px;">
                      <form class="form-inline" method="POST" action="<?php echo site_url('shtl3/laporan/laporan_montir_cetak');?>" target="_blank">
                         <div class="form-group">
                                <label for="expirationmonth">Bulan</label>&ensp;
                                <select id="bulan" name="bulan" class="form-control" style="font-size: 13px;">
                                    <option value="01">01 - Januari</option>
                                    <option value="02">02 - Februari</option>
                                    <option value="03">03 - Maret</option>
                                    <option value="04">04 - April</option>
                                    <option value="05">05 - Mei</option>
                                    <option value="06">06 - Juni</option>
                                    <option value="07">07 - Juli</option>
                                    <option value="08">08 - Agustus</option>
                                    <option value="09">09 - September</option>
                                    <option value="10">10 - Oktober</option>
                                    <option value="11">11 - November</option>
                                    <option value="12">12 - Desember</option>     
                                </select>
                        </div>&ensp;
                        <div class="form-group">                
                              <label for="expirationyear">Tahun</label>&ensp;
                              <select id="tahun" name="tahun"  class="form-control" style="font-size: 13px;">
                                <?php for ( $i = 2019; $i <= 2032; $i ++) { ?>
                                  <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                  <?php }?>
                              </select>
                          </div>
                           &ensp;<button class="btn btn-outline-primary" type="submit" style="font-size: 13px;"name="action">cetak</button>&ensp;
                        </div>                        
                      </form>


                      <!-- view laporan  -->
                      <form class="form-inline" method="POST" action="<?php echo site_url('shtl3/laporan/laporan_montir_view');?>" target="_blank">
                       <div class="form-group" hidden="">
                          <label for="expirationmonth">Bulan</label>&ensp;
                          <select id="bulan2" name="bulan" class="form-control" style="font-size: 13px;">
                              <option value="01">01 - Januari</option>
                              <option value="02">02 - Februari</option>
                              <option value="03">03 - Maret</option>
                              <option value="04">04 - April</option>
                              <option value="05">05 - Mei</option>
                              <option value="06">06 - Juni</option>
                              <option value="07">07 - Juli</option>
                              <option value="08">08 - Agustus</option>
                              <option value="09">09 - September</option>
                              <option value="10">10 - Oktober</option>
                              <option value="11">11 - November</option>
                              <option value="12">12 - Desember</option>     
                          </select>
                       </div>&ensp;
                      <div class="form-group" hidden="">                
                          <label for="expirationyear">Tahun</label>&ensp;
                          <select id="tahun2" name="tahun"  class="form-control" style="font-size: 13px;">
                            <?php for ( $i = 2019; $i <= 2032; $i ++) { ?>
                              <option value="<?php echo $i;?>"><?php echo $i;?></option>
                              <?php }?>
                          </select>
                      </div>
                        <div class="form-group" style="padding: 0px 0px 0px 8px;">            
                          <button class="btn btn-outline-danger" type="reset" style="font-size: 13px;"onclick="return confirm('Konfirmasi Clear Form ?')">reset</button>&ensp;
                        </div>
                        <div class="form-group">
                          <button class="btn btn-outline-success" type="submit" style="font-size: 13px;"name="action">view</button>&ensp;
                        </div>
                      </form>
                      </div>                     
                      <!-- END view-->

              		</div>
              	</div>
              </div>
<hr><br> 
</div>

                                                                          <!-- end of permesin -->

<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script>
  $('#bulan').change(function(){ 
       // ambil nilai
       var ss = $(this).find('option:selected').attr('value');
       $('#bulan2').val(ss);
  });
  $('#tahun').change(function(){ 
       // ambil nilai
       var ss = $(this).find('option:selected').attr('value');
       $('#tahun2').val(ss);
  });
</script>