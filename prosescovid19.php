<?php 
		$nm_wilayah = $_POST['wilayah'];
		$jml_positif = $_POST['jmlpositif'];
		$jml_dirawat = $_POST['jmldirawat'];
		$jml_sembuh = $_POST['jmlsembuh'];
		$jml_meninggal = $_POST['jmlmeninggal'];
		$operator = $_POST['namaoperator'];
		$nim_mhs = $_POST['nimmahasiswa']; 


		$data = "\n$nm_wilayah|$jml_positif|$jml_dirawat|$jml_sembuh|$jml_meninggal|$operator|$nim_mhs";

		$fh = fopen("datapasiencovid19.txt", "w");
		fwrite($fh, $data);

		fclose($fh);
		print("Data Sudah Disimpan Silahkan Di Cek Kembali Terima Kasih <br> <a href='index.php'");;
?>
