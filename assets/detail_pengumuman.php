            <div class="inner_page_agile"></div>
                                <!-- Gallery -->
                <div class="gallery">
                    <div class="container">
                        <div class="title-div">
                            <h3 class="tittle" style="Font-Family:Times New Roman">
                                <span></span>Detail Berita
                                </h3>
                            <div class="tittle-style">
                        </div>
                    </div>
                    <div class="about">
                        <div class="container">
                            <div class="about-grids">
                        <?php 
                                include "tglindo.php";
                                include "koneksi.php";
                                $pilih = mysqli_query($koneksi,"SELECT * FROM `tbl_pengumuman` WHERE id_pengumuman='$_GET[id]'");												
                                while($data = mysqli_fetch_array($pilih)){ 
                        ?>
            <div class="col-md-5 wthree-about-left">
                <div class="wthree-about-left-info">
                    <img witdh="500px" height="290px" src="admin/user/images/<?php echo $data['foto_pengumuman']; ?>" alt="" />
            </div>
                </div>
                    <div class="col-md-7 agileits-about-right">
                        <h4 style="color:black; Font-size:20"><?php echo $data['judul_pengumuman']; ?>,<?= TanggalIndo($data['tgl_pengumuman']);?></h4>
                            <p align="justify"  style="color:black; Font-Family:Times New Roman" ><?php echo $data['isi_pengumuman']; ?></p>
                                </p>
                            </div>
                        <?php } ?>
                    <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>