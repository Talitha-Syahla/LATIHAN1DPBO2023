<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>LATIHAN1DPBO2023 - Talitha Syahla</title>
   <link rel="stylesheet" href="">
   
   <body>
        <center><h2>Biodata Mahasiswa Universitas Pendidikan Indonesia</h2></center>
        <center><h4>Ilmu Komputer - 2021/2022</h4></center>
</head>

        <?php
        require ('LATIHAN1DPBO2023.php');
        echo '<hr>';

        // hardcode inputan mahasiswa pertama
        echo "<table>";
        $human1 = new LATIHAN1DPBO2023('Talitha Syahla', '2101330', 'Ilmu Komputer', 'FPMIPA', 'P', '30 September 2003');
        echo "<tr>" . "<td>" . 'Nama'         . "</td>" ."<td>". ':'. "</td>"."<td>". $human1->getName().     "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'NIM'          . "</td>" ."<td>". ':'. "</td>"."<td>". $human1->getNim().      "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Jurusan'      . "</td>" ."<td>". ':'. "</td>"."<td>". $human1->getJurusan().  "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Fakultas'     . "</td>" ."<td>". ':'. "</td>"."<td>". $human1->getFakultas(). "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Jenis Kelamin'. "</td>" ."<td>". ':'. "</td>"."<td>". $human1->getGender().   "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Tanggal Lahir'. "</td>" ."<td>". ':'. "</td>"."<td>". $human1->getTtl().      "</td>"."</tr>";
        echo "</table>";
        echo '<hr>';

        // hardcode inputan mahasiswa kedua
        echo "<table>";
        $human2 = new LATIHAN1DPBO2023('Park Jimin', '2101395', 'Ilmu Komputer', 'FPMIPA', 'L', '13 Oktober 2003');
        echo "<tr>" . "<td>" . 'Nama'         . "</td>" ."<td>". ':'. "</td>"."<td>". $human2->getName().     "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'NIM'          . "</td>" ."<td>". ':'. "</td>"."<td>". $human2->getNim().      "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Jurusan'      . "</td>" ."<td>". ':'. "</td>"."<td>". $human2->getJurusan().  "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Fakultas'     . "</td>" ."<td>". ':'. "</td>"."<td>". $human2->getFakultas(). "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Jenis Kelamin'. "</td>" ."<td>". ':'. "</td>"."<td>". $human2->getGender().   "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Tanggal Lahir'. "</td>" ."<td>". ':'. "</td>"."<td>". $human2->getTtl().      "</td>"."</tr>";
        echo "</table>";
        echo '<hr>';

        // hardcode inputan mahasiswa ketiga
        echo "<table>";
        $human3 = new LATIHAN1DPBO2023('Park Jeongwoo', '2100929', 'Ilmu Komputer', 'FPMIPA', 'L', '29 September 2004');
        echo "<tr>" . "<td>" . 'Nama'         . "</td>" ."<td>". ':'. "</td>"."<td>". $human3->getName().     "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'NIM'          . "</td>" ."<td>". ':'. "</td>"."<td>". $human3->getNim().      "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Jurusan'      . "</td>" ."<td>". ':'. "</td>"."<td>". $human3->getJurusan().  "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Fakultas'     . "</td>" ."<td>". ':'. "</td>"."<td>". $human3->getFakultas(). "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Jenis Kelamin'. "</td>" ."<td>". ':'. "</td>"."<td>". $human3->getGender().   "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Tanggal Lahir'. "</td>" ."<td>". ':'. "</td>"."<td>". $human3->getTtl().      "</td>"."</tr>";
        echo "</table>";
        echo '<hr>';

        // hardcode inputan mahasiswa keempat
        echo "<table>";
        $human4 = new LATIHAN1DPBO2023('Min Yoongi', '2100309', 'Ilmu Komputer', 'FPMIPA', 'L', '9 Maret 2002');
        echo "<tr>" . "<td>" . 'Nama'         . "</td>" ."<td>". ':'. "</td>"."<td>". $human4->getName().     "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'NIM'          . "</td>" ."<td>". ':'. "</td>"."<td>". $human4->getNim().      "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Jurusan'      . "</td>" ."<td>". ':'. "</td>"."<td>". $human4->getJurusan().  "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Fakultas'     . "</td>" ."<td>". ':'. "</td>"."<td>". $human4->getFakultas(). "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Jenis Kelamin'. "</td>" ."<td>". ':'. "</td>"."<td>". $human4->getGender().   "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Tanggal Lahir'. "</td>" ."<td>". ':'. "</td>"."<td>". $human4->getTtl().      "</td>"."</tr>";
        echo "</table>";
        echo '<hr>';

        // hardcode inputan mahasiswa kelima
        echo "<table>";
        $human5 = new LATIHAN1DPBO2023('Kim Taehyung', '2103095', 'Ilmu Komputer', 'FPMIPA', 'L', '30 Desember 2003');
        echo "<tr>" . "<td>" . 'Nama'         . "</td>" ."<td>". ':'. "</td>"."<td>". $human5->getName().     "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'NIM'          . "</td>" ."<td>". ':'. "</td>"."<td>". $human5->getNim().      "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Jurusan'      . "</td>" ."<td>". ':'. "</td>"."<td>". $human5->getJurusan().  "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Fakultas'     . "</td>" ."<td>". ':'. "</td>"."<td>". $human5->getFakultas(). "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Jenis Kelamin'. "</td>" ."<td>". ':'. "</td>"."<td>". $human5->getGender().   "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Tanggal Lahir'. "</td>" ."<td>". ':'. "</td>"."<td>". $human5->getTtl().      "</td>"."</tr>";
        echo "</table>";
        echo '<hr>';

        // hardcode inputan mahasiswa keenam
        echo "<table>";
        $human6 = new LATIHAN1DPBO2023('Jeon Jungkook', '2100997', 'Ilmu Komputer', 'FPMIPA', 'L', '1 September 2003');
        echo "<tr>" . "<td>" . 'Nama'         . "</td>" ."<td>". ':'. "</td>"."<td>". $human6->getName().     "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'NIM'          . "</td>" ."<td>". ':'. "</td>"."<td>". $human6->getNim().      "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Jurusan'      . "</td>" ."<td>". ':'. "</td>"."<td>". $human6->getJurusan().  "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Fakultas'     . "</td>" ."<td>". ':'. "</td>"."<td>". $human6->getFakultas(). "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Jenis Kelamin'. "</td>" ."<td>". ':'. "</td>"."<td>". $human6->getGender().   "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Tanggal Lahir'. "</td>" ."<td>". ':'. "</td>"."<td>". $human6->getTtl().      "</td>"."</tr>";
        echo "</table>";
        echo '<hr>';

        // hardcode inputan mahasiswa ketujuh
        echo "<table>";
        $human7 = new LATIHAN1DPBO2023('Kim Jennie', '2101696', 'Ilmu Komputer', 'FPMIPA', 'P', '16 Januari 2003');
        echo "<tr>" . "<td>" . 'Nama'         . "</td>" ."<td>". ':'. "</td>"."<td>". $human7->getName().     "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'NIM'          . "</td>" ."<td>". ':'. "</td>"."<td>". $human7->getNim().      "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Jurusan'      . "</td>" ."<td>". ':'. "</td>"."<td>". $human7->getJurusan().  "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Fakultas'     . "</td>" ."<td>". ':'. "</td>"."<td>". $human7->getFakultas(). "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Jenis Kelamin'. "</td>" ."<td>". ':'. "</td>"."<td>". $human7->getGender().   "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Tanggal Lahir'. "</td>" ."<td>". ':'. "</td>"."<td>". $human7->getTtl().      "</td>"."</tr>";
        echo "</table>";
        echo '<hr>';

        // hardcode inputan mahasiswa kedelapan
        echo "<table>";
        $human8 = new LATIHAN1DPBO2023('Park Jihoon', '2101420', 'Ilmu Komputer', 'FPMIPA', 'L', '14 Maret 2002');
        echo "<tr>" . "<td>" . 'Nama'         . "</td>" ."<td>". ':'. "</td>"."<td>". $human8->getName().     "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'NIM'          . "</td>" ."<td>". ':'. "</td>"."<td>". $human8->getNim().      "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Jurusan'      . "</td>" ."<td>". ':'. "</td>"."<td>". $human8->getJurusan().  "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Fakultas'     . "</td>" ."<td>". ':'. "</td>"."<td>". $human8->getFakultas(). "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Jenis Kelamin'. "</td>" ."<td>". ':'. "</td>"."<td>". $human8->getGender().   "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Tanggal Lahir'. "</td>" ."<td>". ':'. "</td>"."<td>". $human8->getTtl().      "</td>"."</tr>";
        echo "</table>";
        echo '<hr>';
        ?>
</body>

<form action="LATIHAN1DPBO2023.php" method="get"> <!-- membuat form dengan memanggil file 'LATIHAN1DPBO2023.php' -->
       <center><h3>Input Data Baru</h3></center>
       <div class="container">
           <!-- membuat form untuk meminta Nama -->
           <tr><label for="name">Nama</label></tr>
           <td><input name="name" type="text"></td><br><br>
            
           <!-- membuat form untuk meminta nama Ibu Kota dari NIM yang diisi -->
           <tr><label for="nim">Nim</label></tr>
           <td><input name="nim" type="text"></td><br><br>
 
           <!-- membuat form untuk meminta kode dari Jurusan yang diisi-->
           <label for="jurusan">Jurusan</label>
           <input name="jurusan" type="text"><br><br>
 
           <!-- membuat form untuk meminta nama kota dari Fakultas yang diisi-->
           <label for="fakultas">Faktultas</label>
           <input name="fakultas" type="text"><br><br>
 
           <!-- membuat form untuk meminta banyaknya populasi dari Jenis Kelamin yang diisi-->
           <label for="gender">Jenis Kelamin</label>
                <select class="form-select" id="select1" name="gender">
                    <option value="P">P</option>
                    <option value="L">L</option>
                </select><br><br>
           <!-- <input name="cityPopulation" type="text"> -->

           <!-- membuat form untuk meminta banyaknya populasi dari Tanggal Lahir yang diisi-->
           <label for="ttl">Tanggal Lahir</label>
           <input name="ttl" type="text"><br><br>
       </div>
       <div>
           <!-- membuat tombol button untuk perintah submit data -->
           <button id="submit" name="submit" type="submit" value="Submit">Submit</button>
           
           <!-- membuat tombol button untuk perintah reset data -->
           <button id="reset" type="reset" value="Reset">Reset</button>
       </div>
   </form>


<!-- Nama -->
<!-- NIM -->
<!-- Jurusan -->
<!-- Faktultas -->
<!-- Jenis Kelamin -->
<!-- TTL -->
