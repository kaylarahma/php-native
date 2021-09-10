<?php
    if (isset($_POST['proses'])) {
        $nama = $_POST['nama'];
        $nik = $_POST['nik'];
        $kelamin = $_POST['kelamin'];
        $agama = $_POST['agama'];
        $namamobil = $_POST['namamobil'];
        $jenismobil = $_POST['jenismobil'];
        $tanggalpeminjaman = $_POST['tanggalpeminjaman'];
        $nomobil = $_POST['nomobil'];
        $tanggalkembali = $_POST['tanggalkembali'];
        $supir = $_POST['supir'];
        $penjamin = $_POST['penjamin'];
        $tanggalpengembalian = $_POST['tanggalpengembalian'];
   
 function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
}
} 
 
?>
<html>
<fieldset>
    <table border=5 width=100% align=”center”>
        <tr>
            <th>Nama</th>
            <th>NIK</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Kembali</th>
            <th>Penjamin</th>
            <tr>
                <td><?php echo "$nama"; ?> </td>
                <td><?php echo "$nik"; ?> </td>
                <td><?php echo "$kelamin"; ?> </td>
                <td><?php echo "$agama"; ?> </td>
                <td><?php echo "$tanggalpeminjaman"; ?> </td>
                <td><?php echo "$tanggalpengembalian"; ?> </td>
            </tr>
        </tr>
        
        <tr>
            <th colspan="7">Rincian Biaya</th>
        </tr>

        <tr>
            <th>Nama Mobil</th>
            <th>Jenis Mobil</th>
            <th>Merk Mobil</th>
            <th>Agama</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Kembali</th>

            <tr>
            <td><?php echo "$namamobil";?></td>
            <td><?php echo "$jenismobil";?></td>
            <td><?php echo "$merek"; ?></td>`
            <td><?php echo "$tanggalpeminjaman"; ?></td>
            <td><?php echo "$tanggalkembali";?></td>
            <td><?php echo "$supir" ?></td>
           </tr>
        </tr>

    </table>
    <div style=text-align:right>Bandung,<?php echo date('d  M  Y');?>
    <br><br><br><br><br>
    <br>Bendahara<br><br>
    
    <button  onclick="window.print()" >Print</button>
    
    

</div>
</fieldset>
</html>