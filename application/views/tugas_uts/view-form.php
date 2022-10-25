<html>

<head>
	<title>Form Input Siswa</title>
</head>

<body>
	<center>
		<form action="<?= base_url('Tugas_uts/cetak'); ?>" method="post">
			<table>
				<tr>
					<th colspan="3">
						D-Lemas : form Input Data Siswa
					</th>
				</tr>
				<tr>
					<td colspan="3">
						<hr>
					</td>
				</tr>
				<tr>
					<th align="left">Nama Siswa</th>
					<td>:</td>
					<td>
						<input type="text" name="nama" id="nama" value="<?= set_value('nama'); ?>">
					</td>
				</tr>
				<tr>
					<th></th>
					<th></th>
					<td colspan="3">
						<font style="color:red; font-size:10; font-align:center;"><?= form_error('nama'); ?>
					</td>
				</tr>
				<tr>
					<th align="left">NIS</th>
					<td>:</td>
					<td>
						<input type="text" name="nis" id="nis"  value="<?= set_value('nis'); ?>">
					</td>
				</tr>
				<tr>
					<th></th>
					<th></th>
					<td colspan="3">
						<font style="color:red; font-size:10; font-align:center;"><?= form_error('nis'); ?>
					</td>
				</tr>
				<tr>
					<th align="left">Kelas</th>
					<td>:</td>
					<td>
						<input type="text" name="kls" id="kls"  value="<?= set_value('kls'); ?>">
					</td>
				</tr>
				<tr>
					<th></th>
					<th></th>
					<td colspan="3">
						<font style="color:red; font-size:10; font-align:center;"><?= form_error('kls'); ?>
					</td>
				</tr>
				<tr>
					<th align="left">Tanggal Lahir<br>
						<font style="font-size:10;">(format : 2021-04-23)</font>
					</th>
					<td>:</td>
					<td>
						<input type="text" name="tgl_lahir" id="tgl_lahir"  value="<?= set_value('tgl_lahir'); ?>">
					</td>
				</tr>
				<tr>
					<th></th>
					<th></th>
					<td colspan="3">
						<font style="color:red; font-size:10; font-align:center;"><?= form_error('tgl_lahir'); ?>
					</td>
				</tr>
				<tr>
					<th align="left">Tempat Lahir</th>
					<td>:</td>
					<td>
						<input type="text" name="tmpt_lhr" id="tmpt_lhr"  value="<?= set_value('tmpt_lhr'); ?>">
					</td>
				</tr>
				<tr>
				<tr>
					<th></th>
					<th></th>
					<td colspan="3">
						<font style="color:red; font-size:10; font-align:center;"><?= form_error('tmpt_lhr'); ?>
					</td>
				</tr>
				<tr>
					<th align="left">Alamat</th>
					<td>:</td>
					<td>
						<input type="text" name="alamat" id="alamat"  value="<?= set_value('alamat'); ?>">
					</td>
				</tr>
				<tr>
					<th></th>
					<th></th>
					<td colspan="3">
						<font style="color:red; font-size:10; font-align:center;"><?= form_error('alamat'); ?>
					</td>
				</tr>
				<tr>
					<th align="left">Jenis Kelamin</th>
					<td>:</td>
					<td>
						<input type="radio" name="jk" value="Laki-Laki"  <?php echo  set_radio('jk', 'Laki-Laki'); ?> />Laki-Laki<br>
						<input type="radio" name="jk" value="Perempuan" <?php echo  set_radio('jk', 'Perempuan'); ?> />Perempuan
					</td>
				</tr>
				<tr>
					<th></th>
					<th></th>
					<td colspan="3">
						<font style="color:red; font-size:10; font-align:center;"><?= form_error('jk'); ?>
					</td>
				</tr>
				<tr>
					<th align="left">Agama</th>
					<td>:</td>
					<td>
						<select name="agama" >
							<option value=""<?= set_select('agama','', TRUE); ?>>Pilih Agama</option>
							<option value="Islam"<?= set_select('agama', 'Islam'); ?>>Islam</option>
							<option value="Kristen"<?= set_select('agama', 'Kristen'); ?>>Kristen</option>
							<option value="Hindu"<?= set_select('agama', 'Hindu'); ?>>Hindu</option>
							<option value="Buddha"<?= set_select('agama', 'Buddha'); ?>>Buddha</option>
							<option value="Konghucu"<?= set_select('agama', 'Konghucu'); ?>>Konghucu</option>
						</select>
					</td>
				</tr>
				<tr>
					<th></th>
					<th></th>
					<td colspan="3">
						<font style="color:red; font-size:10; font-align:center;"><?= form_error('agama'); ?>
					</td>
				</tr>
				<tr>
					<td colspan="3" align="center">
						<input type="submit" value="submit">
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>

</html>