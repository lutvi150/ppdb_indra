<script> </script>

    <tr  align="center">
      <table style="width:98%" border="0">
      <th><img src="<?=base_url('assets/member/images/303.jpg')?>" width="150px" height="150px" align="left"> </th>
                <td align="center" colspan="3"><h3>PEMERINTAH KOTA MEDAN<br>DINAS PENDIDIKAN DAN KEBUDAYAAN<br> SMP SWASTA PNIEL MEDAN<br>
                </h3>Jl. Perjuangan Gg. Pisang No. 1 Pasar IV, Deli Tua, Kec. Namo Rambe, Sumatera Utara
                </td>
                <th></th>
      </table>
              <hr>
              </br>
              <center><h3 >Kartu Bukti Pendaftaran</h3></center>

    <table class="table-bordered table table-striped " border="0" cellspacing="0"cellpadding="8" align="center" width="60%">

          <tr>
            <td>Nomor Pendaftaran</td>
            <td>:</td>
            <td><?=$user->no_pendaftaran;?></td>
            <td rowspan="6" align="right"><img src="<?=$pas_photo?>" width="150px" height="150px" alt=""></td>
          </tr>

          <tr>
            <td>Nama Pendaftar</td>
            <td>:</td>
            <td><?=$user->nama;?></td>
          </tr>

          <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><?=($user->tgl_lahir);?></td>
          </tr>

          <tr>
            <td>Asal Sekolah</td>
            <td>:</td>
            <td><?=$user->asal_sekolah;?></td>
          </tr>

          <tr>
            <td>Alamat Siswa</td>
            <td>:</td>
            <td><?=$user->alamat;?></td>
          </tr>

          <tr>
            <td>No Telp</td>
            <td>:</td>
            <td><?=$user->no_tlp;?></td>
          </tr>

          <tr>
            <td>Dinyatakan</td>
            <td>:</td>
            <td><?=$user->konfirmasi;?></td>
          </tr>
    </table>
            <table style="width: 60%" align="center" >
              <!-- Tr atau TABLE ROW, untuk membuat baris di dalam kolom -->



                <tr align="center" >
                  <!-- td atau TABEL DATA, untuk membuat kolom table -->

                </br>
                    <td rowspan="4"><b></br>Pendaftar </b>
                </br>
                </br>
                </br>
                </br>
                <hr style="width: 60%" />
                <p><?=$user->nama;?></p>

                </td>
                  <td width="200px"></td>
                    <td width="200px"></td>

                    <td rowspan="3" align="center">Padang, <?php echo date('d-M-Y'); ?> </br> <b>Administrasi</b>
                </br>
                </br>
                </br>
                </br>
                <hr style="width: 60%" />
                ........................
                  </td>
                </tr>
            </body>


