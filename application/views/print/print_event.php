<html>
<head>
	<title></title>
</head>
<body>
	<table border="0" align="center" width="80%">
		<tr>
			<td colspan="1" width="100px;"><img src="<?=base_url()?>assets/image/logo.png" width="100px;"></td>
			<td colspan="5"><h1><?=$event[0]->nama_event?></h1></td>
		</tr>
		<tr>
			<td colspan="6"><hr></td>
		</tr>
		<tr valign="top">
			<td colspan="2" width="200px;"><img src="<?=base_url()?>assets/image/event/<?=$event[0]->image?>" width="200"></td>
			<td colspan="4">
				<ul type="none">
		            <li>Tanggal <?=$event[0]->tanggal?>
		            <li>Waktu <?=$event[0]->jam?></li>
		            <li>Kategori <?=$event[0]->kategori_event?></li>
		            <li>Lokasi <?=$event[0]->lokasi?></li>
		            <li>Kapasitas <?=$event[0]->kapasitas?> Orang</li>
		            <li>Tiket Rp <?=$event[0]->tiket?></li>
		     	</ul>
			</td>
		</tr>
		<tr>
			<td colspan="6">
				<h3>Deskripsi</h3>
        			<?=$event[0]->deskripsi?>
			</td>
		</tr>

	</table>
</body>
</html>