<h1>Tambah Mahasiswa</h1>

<?php 
	echo form_open('addsiswa');

	form_hidden('proses', 'simpan');

	$atributnim = array( 
		'name' => 'nis',
		'type' => 'number',
		'maxlength' => '12',
		'min' => 0,
		 );
	echo form_label('NIS', 'nis')." ".form_input($atributnim)."<br><br>";

	echo form_label('Nama', 'nama')." ".form_input('nama')."<br><br>";

	echo form_label('Jenis Kelamin', 'jk')." ".form_radio('jk', 'p')."Perempuan"." ".form_radio('jk', 'l')."Laki-laki"."<br><br>";	
	$arrayStatus = array(
		'aktif' => 'Aktif',
		'tdk_aktif' => 'Tidak Aktif',
		);
	echo form_label('Status', 'status')." ".form_dropdown('status', $arrayStatus)."<br><br>";	

	$arrayKelas = array(
		'1' => '1', 
		'2' => '2', 
		'3' => '3', 
		'4' => '4', 
		'5' => '5', 
		'6' => '6', 
		'7' => '7', 
		'8' => '8', 
		'9' => '9', 
		'10' => '10', 
		'11' => '11', 
		'12' => '12', 
		);
	echo form_label('Kelas', 'kelas')." ".form_dropdown('kelas', $arrayKelas)."<br><br>";	

	echo form_label('Alamat', 'alamat')." ".form_textarea('alamat')."<br><br>";

	echo form_label('Desa', 'desa')." ".form_input('desa')."<br><br>";

	echo form_label('Kecamatan', 'kecamatan')." ".form_input('kecamatan')."<br><br>";

	echo form_label('Kota / Kabupaten', 'kota')." ".form_input('kota')."<br><br>";

	echo form_label('Provinsi', 'provinsi')." ".form_input('provinsi')."<br><br>";

	echo form_label('Negara', 'negara')." ".form_input('negara')."<br><br>";

	echo form_submit('simpan', 'Simpan');

	echo form_close();
 ?>