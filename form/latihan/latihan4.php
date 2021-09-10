<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4</title>
</head>

<body>
    <form action="hasil4.php" method="post">
    <h3>GOLONGAN KERJA</h3>
        <td>Nama : </td>
            <input type="text" name="nama" id="nama" required> <br>
        <td>Jenis Kelamin : </td>
            <input type="radio" name="jk" id="l" value="Laki-laki" > Laki-laki
            <input type="radio" name="jk" id="p" value="Perempuan" > Perempuan <br>

        <td>Agama : </td>
        <select name="agama" required>
            <option value="">Pilih</option>
            <option value="Islam">Islam</option>
            <option value="kristen">Kristen</option>
            <option value="katolik">Katolik</option>
            <option value="hindu">Hindu</option>
            <option value="budha">Budha</option>
            <option value="konghucu">Konghucu</option>
        </select> <br>

        <td>Golongan Kerja: </td>
        <select name="golongan" required>
            <option value="">Pilih</option>
            <option value="1">Golongan 1</option>
            <option value="2">Golongan 2</option>
            <option value="3">Golongan 3</option>
            <option value="4">Golongan 4</option>
        </select> <br>

        <td> Jam Kerja : </td>
            <input type="number" name="jamKerja" id="jamkerja" required> <br>
            <button type="submit" name="Simpan">Simpan</button>
            <button tyoe="reset" name="reset">Reset</button>
    </form>
</body>
</html>