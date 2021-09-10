<?php 
    if(isset($_POST['Simpan'])){
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $agama = $_POST['agama'];
        $golongan = $_POST['golongan'];
        $jamKerja = $_POST['jamKerja'];
        $jamLembur = 0;
        $gajiLembur = 0;
        $totalPajak = 0;

        //menghitung jam lembur
        $jamLembur = $jamKerja-173;
        
        //menambahkan jam lebur setiap jam nya
        for($i = 0; $i<=$jamLembur; $i++){
             $gajiLembur = $jamLembur*20000;
         }

        //menentukan gaji dan tunjangan berdasarkan golongan
        if($golongan == 1){
            $gajiPokok = 1500000;
            $tunjangan = 150000;
        }else if($golongan == 2){
            $gajiPokok = 2000000;
            $tunjangan = 200000;
        }else if($golongan == 3){
            $gajiPokok = 2500000;
            $tunjangan = 250000;
        }else if($golongan == 4){
            $gajiPokok = 3000000;
            $tunjangan = 300000;
        }else{
            echo "Anda bukan golongan kami";
        }

        //menghitung pajak gaji pokok dan lembur
        $pajakGajiPokok = $gajiPokok * 0.05;
        $pajakGajiLembur = $gajiLembur * 0.05;
        
        //menghitung total Pajak
        $gajiKotor = $gajiPokok+$tunjangan+$gajiLembur;
        $totalPajak = $pajakGajiLembur+$pajakGajiPokok;

        //mengitung total gaji
        $totalGaji = $gajiKotor - $totalPajak;

        //menampilkan
        echo "<br>Nama : <b>$nama</b>";
        echo "<br>Jenis Kelamin : <b>$jk </b>";
        echo "<br>Agama : <b>$agama</b>";
        echo "<br>golongan : <b> $golongan</b>";
        echo "<br>Gaji Pokok : <b>$gajiPokok</b>";
        echo "<br>Gaji Lembur : <b>$gajiLembur</b>";
        echo "<br>Pajak Gaji Pokok : <b>$pajakGajiPokok</b>";
        echo "<br>Pajak Gaji Lembur : <b>$pajakGajiLembur</b>";
        echo "<br>Total Pajak : <b>$totalPajak</b>";
        echo "<br>Tunjangan Pengabdian: <b>$tunjangan</b>";
        echo "<br>Gaji Yang Diterima: <b>$totalGaji</b>";
    }
?>