<!DOCTYPE html>
<html>
<head>
<style>
body {background-color: grey}
table, tr, td{
	border: 1px solid white;
	background-color:blue;
	padding: 7px;
} 
ul {list-style-type: square;}
</style>
</head>
<body>
<?php
echo "<h1><b>Daftar</b></h1>
	<p>
	<form>
		<table>
			<tr>
				<td align=right><font color='white'>Nama Lengkap :</font></td>
				<td><input type='text' name='Nama' size='20'></td>
			</tr>
			<tr>
				<td align=right><font color='white'>Username :</font></td>
				<td><input type='text' name='user' size='20'></td>
			</tr>
			<tr>
				<td align=right><font color='white'>Password :</font></td>
				<td><input type='text' name='password' size='20'></td>
			</tr>
			<tr>
				<td align=right><font color='white'>Password sekali lagi :</font></td>
				<td><input type='text' name='password2' size='20'></td>
			</tr>
			<tr>
				<td></td>
				<td><input type='submit' value='Submit'>
					<input type='submit' value='Ulangi'></td>
			</tr>
		</table>
	</form>
	<p>
		<ul>
			<li>Membuat sambungan database</li>
			<p>
			<li>Memilih database</li>
			<p>
			<li>Membuat query</li>
			<p>
			<li>Menjalankan query</li>
			<p>
			<li>Mengambil hasilnya</li>
			<p>
			<li>Memproses hasil</li>
		</ul>"
?>
</body>
</html>