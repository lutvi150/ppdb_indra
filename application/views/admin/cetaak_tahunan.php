<script>
        window.print();
    </script>




  <div>
  <tr  align="center">
  <table style="width:98%" border="0">
  <th><img src="<?=base_url('assets/member/images/303.jpg')?>" width="150px" height="150px" align="left"> </th>
            <td align="center" colspan="3"><h3>PEMERINTAH KOTA MEDAN<br>DINAS PENDIDIKAN DAN KEBUDAYAAN<br> SMP Swasta PNIEL MEDAN<br>
            </h3>Jl. Perjuangan Gg. Pisang No. 1 Pasar IV, Deli Tua, Kec. Namo Rambe
            </td>
            <th><img width="150px" height="150px" src="<?=base_url('assets/member/images/303.jpg');?>" align="right"></th>
  </table>

    <hr>
<table class="table-bordered table table-striped " border="1" cellspacing="0"cellpadding="0" align="center" width="100%">
    <tr >
        <th>NO</th>
        <th>NISN </th>
        <th>Nama Siswa</th>
        <th>Tanggal Lahir</th>
        <th>Asal Sekolah</th>
        <th>Nama Orang Tua</th>
        <th>Pas Foto</th>
        <th>Tanggal Pendaftaran</th>

    </div>
<?php foreach ($laporan as $key => $value): ?>
        <tr align="center">
        <td><?=$key + 1?></td>
        <td><?=$value->nisn;?></td>
        <td><?=$value->nama;?></td>
        <td><?=($value->tgl_lahir);?></td>
        <td><?=$value->asal_sekolah;?></td>
        <td><?=$value->nm_ayah;?></td>
        <td><img src="<?=base_url('uploads/' . $value->pas_foto);?>" alt="tidak muncul " width="50px"></td>
        <td><?=($value->tgl_daftar);?></td>
        </tr>
<?php endforeach;?>
        </table>

        <br>
        <br>
        <table border="0" align="right">
        <tr>
        <td colspan="2" align="center"><b>Medan
        <?=date('d-M-Y');?> </b></br><b>Kepala Sekolah</b></br></br></br></br><hr><b>Kristiani Septa Br Ginting, S.Pd</b></td>

        </tr>




        </table>

        </body>


