<h5>Laporan Eff Permesin</h5><!-- 
<b style="font-size: 13px;"><?php echo indonesian_date($awal)?> - <?php echo indonesian_date($akhir)?></b><p></p></br> -->
<b style="font-size: 13px;">Eff Permesin</b></p>
<table class="table table-sm table-bordered" style="font-size: 11px;">
	<thead>
	<tr>
		<th rowspan="2" style="vertical-align: middle;">KAGRUP</th>
		<th rowspan="2" style="vertical-align: middle;">MTC</th>
		<th rowspan="2" style="vertical-align: middle;">MESIN</th>
		<th colspan="31" style="text-align: center;">TANGGAL</th>
		<th rowspan="2" style="vertical-align: middle;">RATA2</th>
		</tr>
					<tr>
					<th>1</th>
					<th>2</th>
					<th>3</th>
					<th>4</th>
					<th>5</th>
					<th>6</th>
					<th>7</th>
					<th>8</th>
					<th>9</th>
					<th>10</th>
					<th>11</th>
					<th>12</th>
					<th>13</th>
					<th>14</th>
					<th>15</th>
					<th>16</th>
					<th>17</th>
					<th>18</th>
					<th>19</th>
					<th>20</th>
					<th>21</th>
					<th>22</th>
					<th>23</th>
					<th>24</th>
					<th>25</th>
					<th>26</th>
					<th>27</th>
					<th>28</th>
					<th>29</th>
					<th>30</th>
					<th>31</th>
					</tr>
	</thead>
	<tbody>
	<?php foreach ($data_permesin as $row) { ?>		
	<tr>
		<td><?php echo $row->nama_kagrup;?></td>
		<td><?php echo $row->nama_mtc;?></td>
		<td><?php echo $row->no_mesin;?></td>
		<td><?php echo $row->TGL_1;?></td>
		<td><?php echo $row->TGL_2;?></td>
		<td><?php echo $row->TGL_3;?></td>
		<td><?php echo $row->TGL_4;?></td>
		<td><?php echo $row->TGL_5;?></td>
		<td><?php echo $row->TGL_6;?></td>
		<td><?php echo $row->TGL_7;?></td>
		<td><?php echo $row->TGL_8;?></td>
		<td><?php echo $row->TGL_9;?></td>
		<td><?php echo $row->TGL_10;?></td>
		<td><?php echo $row->TGL_11;?></td>
		<td><?php echo $row->TGL_12;?></td>
		<td><?php echo $row->TGL_13;?></td>
		<td><?php echo $row->TGL_14;?></td>
		<td><?php echo $row->TGL_15;?></td>
		<td><?php echo $row->TGL_16;?></td>
		<td><?php echo $row->TGL_17;?></td>
		<td><?php echo $row->TGL_18;?></td>
		<td><?php echo $row->TGL_19;?></td>
		<td><?php echo $row->TGL_20;?></td>
		<td><?php echo $row->TGL_21;?></td>
		<td><?php echo $row->TGL_22;?></td>
		<td><?php echo $row->TGL_23;?></td>
		<td><?php echo $row->TGL_24;?></td>
		<td><?php echo $row->TGL_25;?></td>
		<td><?php echo $row->TGL_26;?></td>
		<td><?php echo $row->TGL_27;?></td>
		<td><?php echo $row->TGL_28;?></td>
		<td><?php echo $row->TGL_29;?></td>
		<td><?php echo $row->TGL_30;?></td>
		<td><?php echo $row->TGL_31;?></td>
		<td><?php echo $row->rata2_;?></td>
	</tr>
	<?php } ?>
	</tbody>
</table>

<b style="font-size: 13px;">Total Perkagrup</b></p>
<table class="table table-sm table-bordered" style="font-size: 11px;">
	<thead>
	<tr>
		<th rowspan="2" style="vertical-align: middle;">KAGRUP</th>
		<th colspan="31" style="text-align: center;">TANGGAL</th>
		<th rowspan="2" style="vertical-align: middle;">RATA2</th>
		</tr>
					<tr>
					<th>1</th>
					<th>2</th>
					<th>3</th>
					<th>4</th>
					<th>5</th>
					<th>6</th>
					<th>7</th>
					<th>8</th>
					<th>9</th>
					<th>10</th>
					<th>11</th>
					<th>12</th>
					<th>13</th>
					<th>14</th>
					<th>15</th>
					<th>16</th>
					<th>17</th>
					<th>18</th>
					<th>19</th>
					<th>20</th>
					<th>21</th>
					<th>22</th>
					<th>23</th>
					<th>24</th>
					<th>25</th>
					<th>26</th>
					<th>27</th>
					<th>28</th>
					<th>29</th>
					<th>30</th>
					<th>31</th>
					</tr>
	</thead>
	<tbody>
	<?php foreach ($data_total as $row) { ?>		
	<tr>
		<td><?php echo $row->nama_kagrup;?></td>
		<td><?php echo $row->TGL_1;?></td>
		<td><?php echo $row->TGL_2;?></td>
		<td><?php echo $row->TGL_3;?></td>
		<td><?php echo $row->TGL_4;?></td>
		<td><?php echo $row->TGL_5;?></td>
		<td><?php echo $row->TGL_6;?></td>
		<td><?php echo $row->TGL_7;?></td>
		<td><?php echo $row->TGL_8;?></td>
		<td><?php echo $row->TGL_9;?></td>
		<td><?php echo $row->TGL_10;?></td>
		<td><?php echo $row->TGL_11;?></td>
		<td><?php echo $row->TGL_12;?></td>
		<td><?php echo $row->TGL_13;?></td>
		<td><?php echo $row->TGL_14;?></td>
		<td><?php echo $row->TGL_15;?></td>
		<td><?php echo $row->TGL_16;?></td>
		<td><?php echo $row->TGL_17;?></td>
		<td><?php echo $row->TGL_18;?></td>
		<td><?php echo $row->TGL_19;?></td>
		<td><?php echo $row->TGL_20;?></td>
		<td><?php echo $row->TGL_21;?></td>
		<td><?php echo $row->TGL_22;?></td>
		<td><?php echo $row->TGL_23;?></td>
		<td><?php echo $row->TGL_24;?></td>
		<td><?php echo $row->TGL_25;?></td>
		<td><?php echo $row->TGL_26;?></td>
		<td><?php echo $row->TGL_27;?></td>
		<td><?php echo $row->TGL_28;?></td>
		<td><?php echo $row->TGL_29;?></td>
		<td><?php echo $row->TGL_30;?></td>
		<td><?php echo $row->TGL_31;?></td>
		<td><?php echo $row->rata2_;?></td>
	</tr>
	<?php } ?>
	</tbody>
</table>