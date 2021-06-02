<?php
	include "koneksi.php";
	$perintah = "SELECT * FROM articles ORDER BY articleID DESC";
	$getData = mysqli_query($connection,$perintah);

	echo ("<h2>List Artikel</h2>
			<br><ul>
		");

	while($a = mysqli_fetch_array($getData))
	{
		echo("
				<li>$a[1]&nbsp;$a[2]&nbsp;$a[waktu]&nbsp;
				<a href=\"edit_article.php?articleID=$a[0]\">Edit</a>&nbsp;
				<a href=\"delete.php?articleID=$a[0]\">Hapus</a></li><br>"
			);
	}
	echo("</table>");
	echo "<br><a href=\"add_article.php\">Tambah</a>";
	echo "<br><a href=\"adminpanel.php\">Admin Panel</a>";
?>