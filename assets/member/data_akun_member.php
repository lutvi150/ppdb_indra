<?php
error_reporting(0);
session_start();
include "koneksi.php";
$id_member = $_SESSION['idregis'];
$cek_data = mysqli_query($koneksi, "SELECT * FROM `tbl_register` WHERE id_register = '$id_member'");
$data = mysqli_fetch_array($cek_data);

// SELECT * FROM `tbl_pendaftaran` WHERE konfirmasi = 'lulus | tidak lulus | proses'
?>>

<h2>Contextual Classes</h2>

  <table class="table">
    <thead>
      <tr>
        <th>Nama </th>
        <th>User Name</th>
        <th>Password</th>
        <th>No Tlp</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?= $data['nama']?></td>
        <td><?= $data['username']?></td>
        <td><?= $data['password']?></td>
        <td><?= $data['no_tlp']?></td>
      </tr>      
 
      </tr>
    </tbody>
  </table>
</div>

</body>