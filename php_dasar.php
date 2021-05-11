<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Dasar</title>
</head>
<body>
	<h1>Belajar PHP Dasar</h1>
	<?php
		echo "Hello World";
	?>
	<h2>Menggunakan Variable</h2>
	<?php
		$nim = "0411500400";
		$nama = 'Abdullah';
		echo "NIM : " . $nim . "<br>";
		echo "Nama : $nama";
	?>
	<h3>Predefine Variable $_GET</h2>
	<?php
		echo 'Selamat Datang ' . $_GET['nama'];
	?>
	<h4>Form Input</h4>
	<form method="post">
		<label>Nama: </label>
		<input type="text" name="nama">
		<input type="submit" value="Kirim">
	</form>
	<?php
		echo 'Selamat Datang ' . $_POST['nama'];
	?>
	<h5>Operator</h5>
	<?php
		$gaji = 1000000;
		$pajak = 0.1;
		$thp = $gaji - ($gaji*$pajak);
		echo "Gaji sebelum pajak = Rp. $gaji <br>";
		echo "Gaji yang dibawa pulang = Rp. $thp";
	?>
	<h2>Kondisi IF</h2>
    <?php
        $nama_hari = date("l");
        if ($nama_hari == "Sunday") {
        echo "Minggu";
        } elseif ($nama_hari == "Monday") {
        echo "Senin";
        } else {
        echo "Selasa";
        }
    ?>
	<h2>Kondisi SWITCH</h2>
    <?php
    $nama_hari = date("1");
    switch ($nama_hari) {
        case "Sunday":
            echo "Minggu";
            break;
        case "Monday":
            echo "Senin";
            break;
        case "Tuesday":
            echo "Selasa";
            break;
        default:
            echo "Sabtu";
        }
    ?>
	<h2>Perulangan FOR</h2>
   <?php
        echo "Perulangan 1 sampai 10 <br />";
        for ($i=1; $i<=10; $i++) {
            echo "Perulangan ke: " . $i . '<br />';
        }

        echo "Perulangan Menurun dari 10 ke 1 <br />";
        for ($i=10; $i>=1; $i--) {
            echo "Perulangan ke: " . $i . '<br />';
        }
   ?>
   <h2>Perulangan WHILE</h2>
    <?php
        echo "Perulangan 1 sampai 10 <br />";
        $i=1;
        while ($i<=10) {
            echo "Perulangan ke: " . $i . '<br />';
            $i++;
        }
    ?>
	<h2>Perulangan DOWHILE</h2>
    <?php
        echo "Perulangan 1 sampai 10 <br />";
        $i=1;
        do {
            echo "Perulangan ke: " . $i . '<br />';
            $i++;
        } while ($i<=10);
    ?>
	<h2>Tugas</h2>
	<form method="post">
		<label>Nama: </label>
		<input type="text" name="nama">
		<br>
		<label>Tanggal Lahir: </label>
		<input type="text" name="tgl_lahir">
		<br>
		<label>Pekerjaan:
			<select name='pekerjaan'>
                <option value='Direktur'>Direktur</option>
                <option value='Manager'>Manager</option>
                <option value='Staff'>Staff</option>
                <option value='Operator'>Operator</option>
			</select>
		</label>
		<br>
		<input type="submit" value="Kirim">
	</form>
	<?php
        # Memanggil Nama
        echo 'Nama: ' . $_POST['nama'];

        # Merubah Tanggal Lahir menjadi Umur (Tahun)
        $tgl_lahir = @$_POST['tgl_lahir'];

        $lahir = new DateTime($tgl_lahir);
        $hari_ini = new DateTime();

        $diff = $hari_ini->diff($lahir);

        # Memanggil fungsi umur yg sudah dibuat diatas
        echo "<br> Umur: ". $diff->y ." Tahun";

        # Memanggil pekerjaan
        echo "<br> Pekerjaan: ". $_POST['pekerjaan'];

        # Kondisi if pekerjaan untuk menentukan gaji
        $pekerjaan = @$_POST['pekerjaan'];

        if($pekerjaan == "Direktur"){
            echo '<br> Gaji: Rp. 10.000.000,-';
        }elseif($pekerjaan == "Manager"){
            echo '<br> Gaji: Rp. 7.000.000,-';
        }elseif($pekerjaan == "Staff"){
            echo '<br> Gaji: Rp. 5.000.000,-';
        }elseif($pekerjaan == "Operator"){
            echo '<br> Gaji: Rp. 4.000.000,-';
        }
    ?>
</body>
</html>