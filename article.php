<?php
	include "koneksi.php";

	date_default_timezone_set('Asia/Jakarta');
	
	$judul = $_POST['title'];
	$penulis = $_POST['author'];
	$lead = $_POST['abstraksi'];
	$isi = $_POST['content'];
	$time = date("d M Y, H:i");

	$lead = str_replace("\r\n","<br>",$lead);
	$content = str_replace("\r\n","<br>",$isi);

	$query = "INSERT INTO articles (judul,penulis,lead,content,waktu) VALUES ('$judul','$penulis','$lead','$isi','$time')";
	mysqli_query($connection, $query);

	if($query)
	{
		echo "<h3 align=center>Proses Penambahan Artikel Berhasil</h3>";
		echo "<A href=\"tampil_articles.php\">List</A>";
	}
	else
	{
		echo "<h2 align=center>Proses Penambahan Artikel Tidak Berhasil</h2>";
	}
?>