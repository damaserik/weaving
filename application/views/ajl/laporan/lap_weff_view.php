<h5>Laporan WEFF</h5>
<!-- <b style="font-size: 13px;"><?php echo indonesian_date($bulan)?> - <?php echo indonesian_date($tahun)?></b><p></p>  -->
<table class="table table-sm table-bordered" style="font-size: 12px;">
	<thead>
	<tr>
		<th>TANGGAL</th>
		<th>RS</th>
		<th>WEFF</th>
		<th>MESIN</th>
		<th>KONSTRUKSI</th>
		<th>COUNT WEFF</th>
		<th>EFF</th>
		<th>PUTUS LUSI</th>
		<th>PUTUS PAKAN</th>
		<th>SUM OF GULUNG MTR</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($data as $row) { ?>		
	<tr>
		<td><?php echo date('d/m/Y', strtotime($row->tgl_input));?></td>
		<td><?php echo $row->rs;?></td>
		<td><?php echo $row->weff;?></td>
		<td><?php echo $row->no_mesin;?></td>
		<td><?php echo $row->jns_konstruksi;?></td>
		<td><?php echo $row->count_weff;?></td>
		<td><?php echo $row->eff;?></td>
		<td><?php echo $row->putus_lusi;?></td>
		<td><?php echo $row->putus_pakan;?></td>
		<td><?php echo $row->gulung_mtr;?></td>
	</tr>
	<?php } ?>
	</tbody>
</table>
			