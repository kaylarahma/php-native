<?php 
if (isset($_POST['bayar']) || isset($_POST['bayar'])){
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $merek = $_POST['merek'];
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

    if ($bayar == $totalpembayaran) {
        $ket ="Terima Kasih";
    } else if ($bayar >= $totalpembayaran) {
        $kembalian = $bayar - $totalpembayaran;
        $ket = "Terima Kasih, Silahkan Ambil Kembalian Anda Rp.". number_format($kembalian, 2,',',',');
    } else if ($bayar == 0) {
        echo " ";
    } else {
        $ket = "Uang Anda Kurang, Nama anda Kami Blacklist Dari Rental Kami";
    }
}
?>

<html>
    <head><title>Bayar</title></head>
    <body>
        <form action="" method="post">
        <input type="hidden" name="nama" value=<?php echo "$nama";?> >
        <input type="hidden" name="nik" value=<?php echo "$nik";?> >
        <input type="hidden" name="kelamin" value=<?php echo "$kelamin";?> >
        <input type="hidden" name="agama" value=<?php echo "$agama";?> >
        <input type="hidden" name="namamobil" value=<?php echo "$namamobil";?> >
        <input type="hidden" name="jenismobil" value=<?php echo "$jenismobil";?> >
        <input type="hidden" name="tanggalpeminjaman" value=<?php echo "$tanggalpeminjaman";?> >
        <input type="hidden" name="nomobil" value=<?php echo "$nomobil";?> >
        <input type="hidden" name="tanggalkembali" value=<?php echo "$tanggalkembali";?> >
        <input type="hidden" name="supir" value=<?php echo "$supir";?> >
        <input type="hidden" name="merek" value=<?php echo "$merek";?> >
        <input type="hidden" name="penjamin" value=<?php echo "$penjamin";?> >

        <input type="number" name="pembayaran" id="">
        <button type="submit" name="bayar">Bayar</button>
        </form>
        
        <tr>
            <td>Keterangan</td>
            <td> :</td>
            <td><?php echo "$ket"; ?></td> 
        </tr>
    </body>
</html>