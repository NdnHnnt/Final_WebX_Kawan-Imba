<html>

<header>
	<title>Ereview</title>
</header>

<style>
table 
{
  width:100%;
}
/*garis tepi tabel*/
table, th, td 
{
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
</style>

<body>

<h1><center><img src="http://localhost/ereview/img/ereviewer.jpeg"></center></h1>
    <h2 style="background-color:dodgerblue">Riwayat Pengerjaan</h2>

	<table>
        <tr style="font-weight:bold;"> <!-- baris -->
            <td>Nama Customer</td> <!-- sel 1 -->
            <td>Kode Pembayaran</td>
            <td>Metode Pembayaran Yang Digunakan</td>
			      <td>Pembayaran</td>
            <td>Pemotongan</td>
			      <td>Pilih</td>
	    	</tr>
		    <tr>
            <td>Bill Gates</td>
            <td style="text-align:center;">#U934H32</td>
            <td style="text-align:center;">Transfer Bank</td> <!-- angka akan berada ditengah -->
			      <td style="text-align:center;">Rp. 190.000</td>
            <td style="text-align:center;">Rp. 35.000</td>
			      <td style="text-align:center;"><button type="button" onclick="myFunction()">Ambil</button></td>
        </tr>
		    <tr>
            <td>Naruto</td>
            <td style="text-align:center;">#U897TF4</td>
            <td style="text-align:center;">OVO</td> <!-- angka akan berada ditengah -->
			      <td style="text-align:center;">Rp. 100.000</td>
            <td style="text-align:center;">Rp. 40.000</td>
			      <td style="text-align:center;"><button type="button" onclick="myFunction()">Ambil</button></td>
        </tr>

</body>
</html>