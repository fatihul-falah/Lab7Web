# Praktikum 7 - Pemrograman Web
### Fatihul Falah Hidayatullah
### 311910460
### TI.19.A2

### Menjalankan Web Server
Buka XAMPP dan jalankan apache dari menu XAMPP control
![1](https://i.imgur.com/sFSGn5H.png)
### Memulai PHP
Buat folder lab7_php_dasar pada root directory web server
![2](https://i.imgur.com/i9HgkLO.png)
Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL: 
http://localhost/lab7_php_dasar/
![3](https://i.imgur.com/t3quUPc.png)
### PHP dasar
Buat file baru dengan nama php_dasar.php pada directory tersebut. Kemudian buat
kode seperti berikut.
```
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
</body>
</html>
```
Kemudian untuk mengakses hasilnya melalui URL:
http://localhost/lab7_php_dasar/php_dasar.php
![4](https://i.imgur.com/GmBBiUn.png)
![5](https://i.imgur.com/0dzFpq0.png)
### Variable PHP
Menambahkan variable pada program
```
<?php
$nim = "0411500400";
$nama = 'Abdullah';
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama";
?>

```
![6](https://i.imgur.com/QJhCpy6.png)
### Predefine Variable $_GET
```
<?php
echo 'Selamat Datang ' . $_GET['nama'];
?>
```
Untuk mengaksesnya gunakan URL:
http://localhost/lab7_php_dasar/latihan2.php?nama=
![7](https://i.imgur.com/jZtzIyF.png)
### Membuat Form Input
```
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>PHP Dasar</title>
</head>
<body>
<h2>Form Input</h2>
<form method="post">
 <label>Nama: </label>
 <input type="text" name="nama">
 <input type="submit" value="Kirim">
</form>
<?php
echo 'Selamat Datang ' . $_POST['nama'];
?>
</body>
</html>
```
![8](https://i.imgur.com/sF7fWwJ.png)
### Operator
```
<?php
$gaji = 1000000;
$pajak = 0.1;
$thp = $gaji - ($gaji*$pajak);
echo "Gaji sebelum pajak = Rp. $gaji <br>";
echo "Gaji yang dibawa pulang = Rp. $thp";
?>
```
![9](https://i.imgur.com/2rZlMap.png)
### Kondisi IF
```
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
```
![10](https://i.imgur.com/yoN1foE.png)
### Kondisi Switch
```
<?php
$nama_hari = date("l");
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
?>
```
![11](https://i.imgur.com/wamUMRu.png)
### Perulangan for
```
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
```
![12](https://i.imgur.com/O0gybxj.png)
### Perulangan while
```
<?php
echo "Perulangan 1 sampai 10 <br />";
$i=1;
while ($i<=10) {
 echo "Perulangan ke: " . $i . '<br />';
 $i++;
}
?>
```
![13](https://i.imgur.com/OcFoQO6.png)
### Perulangan dowhile
```
<?php
echo "Perulangan 1 sampai 10 <br />";
$i=1;
do {
 echo "Perulangan ke: " . $i . '<br />';
 $i++;
} while ($i<=10);
?>
```
![14](https://i.imgur.com/cnWH0xZ.png)
## Tugas
Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan
nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung
umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang
berbeda-beda sesuai pilihan pekerjaan.
```
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
```
![15](https://i.imgur.com/n4CnQSi.png)
![15-2](https://i.imgur.com/454dGLs.png)
![15-3](https://i.imgur.com/v3hg6pw.png)