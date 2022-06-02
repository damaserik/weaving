<h5>Laporan EFF Perbulan</h5>
<!-- <b style="font-size: 13px;"><?php echo indonesian_date($awal)?> - <?php echo indonesian_date($akhir)?></b><p></p> -->
<table class="table table-sm table-bordered" style="font-size: 12px;">
	<thead>
	<tr>
		<th>KONSTRUKSI</th>
		<th>JANUARI</th>
		<th>FEBRUARI</th>
		<th>MARET</th>
		<th>APRIL</th>
		<th>MEI</th>
		<th>JUNI</th>
		<th>JULI</th>
		<th>AGUSTUS</th>
		<th>SEPTEMBER</th>
		<th>OKTOBER</th>
		<th>NOVEMBER</th>
		<th>DESEMBER</th>
		<th>RATA2</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($data as $row) { ?>		
	<tr>
		<td><?php echo $row->jns_konstruksi;?></td>
		<td><?php echo $row->jan;?></td>
		<td><?php echo $row->feb;?></td>
		<td><?php echo $row->mar;?></td>
		<td><?php echo $row->apr;?></td>
		<td><?php echo $row->mei;?></td>
		<td><?php echo $row->jun;?></td>
		<td><?php echo $row->jul;?></td>
		<td><?php echo $row->agt;?></td>
		<td><?php echo $row->sep;?></td>
		<td><?php echo $row->okt;?></td>
		<td><?php echo $row->nov;?></td>
		<td><?php echo $row->des;?></td>
		<td><?php echo $row->rata2_;?></td>
	</tr>
	<?php } ?>
	</tbody>
</table>
			