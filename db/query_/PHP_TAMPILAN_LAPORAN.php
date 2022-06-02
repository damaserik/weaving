<body style="background-image: url('../assets/images/sdsd.jpg');">
<div class="row">
	<div class="col-md-12" style="font-size: 12px;">
		<div class="row">

            <div class="col-md-1" >
				<a href=""><button type="submit" value="Pencarian Data" name="pencarian" class="btn btn-success" style="font-size: 12px;">FILTER</button></a>&nbsp;
			</div>
		</div>
	</div>
</div>
<hr><br>

<table border="1" class="table table-hover table-bordered" style="font-size: 11px;" >
	<tr style=" background-color: rgb(100,50,70); color: #fff;" >
		<td>Konstruksi</td>
		<td>Januari</td>
		<td>Februari</td>
		<td>Maret</td>
		<td>April</td>
		<td>Mei</td>
		<td>Juni</td>
		<td>Juli</td>
		<td>Agustus</td>
		<td>September</td>
		<td>Oktober</td>
		<td>November</td>
		<td>Desember</td>
		<td>Rata-rata</td>
	</tr>
	<tbody style="background-color: yellow; ">
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
	<!-- <tr>
		<td></td>
		<td>2</td>
		<td>2</td>
		<td>2</td>
		<td>2</td>
	</tr>
	<tr>
		<td></td>
		<td>3</td>
		<td>3</td>
		<td>3</td>
		<td>3</td>
	</tr> -->
	<?php } ?>
	</tbody>
<!-- 	<tfoot style="background-color: pink;">
		<tr>
			<td>Grand Total</td>
			<td><?php echo $row->grand_total;?></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</tfoot> -->
</table>
</body>

<?php

if ($bulan1 == "Januari") {
    $bl = '01';
} else if ($bulan1 == 'Februari') {
    $bl = '02';
}
else if ($bulan1 == 'Maret') {
    $bl = '03';
}
elseif ($bulan1 == 'April') {
    $bl = '04';
}
elseif ($bulan1 == 'Mei') {
    $bl = '05';
}
elseif ($bulan1 == 'Juni') {
    $bl = '06';
}
elseif ($bulan1 == 'July') {
    $bl = '07';
}
elseif ($bulan1 == 'Agustus') {
    $bl = '08';
}
elseif ($bulan1 == 'September') {
     $bl = '09';
}
elseif ($bulan1 == 'Oktober') {
    $bl = '10';
}
elseif ($bulan1 == 'November') {
    $bl = '11';
}
elseif ($bulan1 == 'Desember') {
    $bl = '12';}
else {
    $bl = '';
}
echo "Nilai anda: $bulan1<br>";
echo "Grade: $bl";
?>
<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script>
// var e = document.getElementById("tgl_awal");
// var strUser = e.options[e.selectedIndex].value;
// var bulan1 = strUser;

// if (bulan1 == "01") {
//     bl = 'Januari';
// } else if (bulan1 == 'Februari') {
//     bl = '02';
// }
// else if (bulan1 == 'Maret') {
//     bl = '03';
// }
// else if (bulan1 == 'April') {
//     bl = '04';
// }else {
//     bl = '';
// }
// document.getElementById("test").innerHTML = bulan;
// </script>
<input type="text" id="bl">
<script type="text/javascript">
   function price() {
	var tes = document.getElementById("tgl_awal").value;
        document.getElementById("bl").value=tes;
}
</script>