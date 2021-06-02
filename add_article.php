<?php
	include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Form Berita</h1>
	<form nme="article" method="post" action="article.php">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td width="18%">Judul</td>
				<td width="2%">:</td>
				<td width="80%"><input required type="text" name="title" size="30" class="masukan"></td>
			</tr>
			<tr>
				<td>Penulis</td>
				<td>:</td>
				<td><input required type="text" name="author" size="30" class="masukan"></td>
			</tr>
			<tr>
				<td>Lead</td>
				<td>:</td>
				<td><textarea required name="abstraksi" rows="4" cols="45"></textarea></td>
			</tr>
			<tr>
				<td>Content</td>
				<td>:</td>
				<td><textarea required name="content" rows="8" cols="45"></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>
					<input type="submit" name="Submit" value="Add" class="tombol">
					<input type="reset" name="batal" value="Reset" class="tombol">
					<input type="button" name="list" value="View Articles" class="tombol" onclick="viewList()">
				</td>
			</tr>
		</table>
	</form>

	<script type="text/javascript">
		function viewList(){
			window.location.href="tampil_articles.php";
		}
	</script>

</body>
</html>