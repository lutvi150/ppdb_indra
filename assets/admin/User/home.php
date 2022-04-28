<?php
include "koneksi.php";
$sqlp = mysqli_query($koneksi,"SELECT * FROM tbl_pendaftar");
$jmlm = 0;
while($rm = mysqli_fetch_array($sqlp)){
  $jmlm++;
}
$sql = mysqli_query($koneksi,"SELECT * FROM tbl_pendaftar WHERE konfirmasi='LULUS'");
$jmll = 0;
while($rm = mysqli_fetch_array($sql)){
  $jmll++;
}
$sql = mysqli_query($koneksi,"SELECT * FROM tbl_pendaftar WHERE konfirmasi='TIDAK LULUS'");
$jmlt = 0;
while($rm = mysqli_fetch_array($sql)){
  $jmlt++;

}
$sql = mysqli_query($koneksi,"SELECT * FROM tbl_galeri");
$jmlg = 0;
while($rm = mysqli_fetch_array($sql)){
  $jmlg++;
}
$sql = mysqli_query($koneksi,"SELECT * FROM tbl_admin");
$jmla = 0;
while($rm = mysqli_fetch_array($sql)){
  $jmla++;
}
$sql = mysqli_query($koneksi,"SELECT * FROM tbl_register");
$jmlr = 0;
while($rm = mysqli_fetch_array($sql)){
  $jmlr++;
}
$sql = mysqli_query($koneksi,"SELECT * FROM tbl_pengumuman");
$jmlpe = 0;
while($rm = mysqli_fetch_array($sql)){
  $jmlpe++;
}
?>
<div class="widget_2">
		   	  <div class="col-sm-3 widget_1_box">
		   	  	<div class="wid-social facebook">
                    <div class="social-icon">
                        <i class="fa fa-users text-light icon-xlg pull-right"></i>
                    </div>
                    <div class="social-info">
                        <h3 class="number_counter bold count text-light start_timer counted"><?php echo "$jmlm" ?></h3>
                        <h4 class="counttype text-light">Jumlah Pendaftar</h4>
                        <span class="percent">5% increase from last week</span>
                    </div>
                </div>
              </div>
              <div class="col-sm-3 widget_1_box">
                <div class="wid-social twitter">
                    <div class="social-icon">
                        <i class="fa fa-users text-light icon-xlg pull-right"></i>
                    </div>
                    <div class="social-info">
                        <h3 class="number_counter bold count text-light start_timer counted"><?php echo "$jmll" ?></h3>
                        <h4 class="counttype text-light">Siswa DI Terima</h4>
                        <span class="percent">2% increase from last week</span>
                    </div>
                </div>
			  </div>
              <div class="col-sm-3 widget_1_box">
              	<div class="wid-social google-plus">
                    <div class="social-icon">
                        <i class="fa fa-users text-light icon-xlg pull-right"></i>
                    </div>
                    <div class="social-info">
                        <h3 class="number_counter bold count text-light start_timer counted"><?php echo "$jmlt" ?></h3>
                        <h4 class="counttype text-light">Siswa Di Tolak</h4>
                        <span class="percent">2% increase from last week</span>
                    </div>
                </div>
			  </div>
              <div class="col-sm-3 widget_1_box">
                <div class="wid-social dribbble">
                    <div class="social-icon">
                        <i class="fa fa-picture-o text-light icon-xlg pull-right"></i>
                    </div>
                    <div class="social-info">
                        <h3 class="number_counter bold count text-light start_timer counted"><?php echo "$jmlg" ?></h3>
                        <h4 class="counttype text-light">Data Galeri</h4>
                        <span class="percent">7% increase from last week</span>
                    </div>
                </div>
			  </div>
              <div class="clearfix"> </div>
		   </div>
           <div class="widget_3">
		   	  <div class="col-sm-3 widget_1_box">
                <div class="wid-social linkedin">
                    <div class="social-icon">
                        <i class="fa fa-user text-light icon-xlg pull-right"></i>
                    </div>
                    <div class="social-info">
                        <h3 class="number_counter bold count text-light start_timer counted"><?php echo "$jmla" ?></h3>
                        <h4 class="counttype text-light">Data Admin</h4>
                        <span class="percent">7% increase from last week</span>
                    </div>
                </div>
			   </div>
               <div class="col-sm-3 widget_1_box">
               	<div class="wid-social youtube">
                    <div class="social-icon">
                        <i class="glyphicon glyphicon-list-alt text-light icon-xlg pull-right"></i>
                    </div>
                    <div class="social-info">
                        <h3 class="number_counter bold count text-light start_timer counted"><?php echo "$jmlr" ?></h3>
                        <h4 class="counttype text-light">Jumlah Member</h4>
                        <span class="percent">7% increase from last week</span>
                    </div>
                </div>
			  </div>
              <div class="col-sm-3 widget_1_box">
                <div class="wid-social skype">
                    <div class="social-icon">
                        <i class="fa fa-bullhorn text-light icon-xlg pull-right"></i>
                    </div>
                    <div class="social-info">
                        <h3 class="number_counter bold count text-light start_timer counted"><?php echo "$jmlpe" ?></h3>
                        <h4 class="counttype text-light">Pengumuman</h4>
                        <span class="percent">7% increase from last week</span>
                    </div>
                </div>
			  </div>
               <div class="clearfix"> </div>
		   </div>