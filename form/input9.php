<html>
    <head><title>Kritik dan Saran ~ Inputan Textarea</title></head>
    <body>
        <FORM ACTION="" METHOD="POST" NAME="input">
            <h2>Input Kritik / Saran :</h2>
            <textarea name="saran" cols="40" rows="5"></textarea><br>
            <input type="submit" name="Proses" value="Input Saran">
        </FORM>
    </body>
</html>

<?php
if (isset($_POST['Proses'])) {
$saran = nl2br($_POST['saran']);
echo "Kritik / Saran Anda adalah : <br>";
echo "<font color=blue><b>$saran</b></font>";
}
?>