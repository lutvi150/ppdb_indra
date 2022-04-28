<div class="inner_page_agile"></div>
<!-- Gallery -->
	<div class="gallery">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span></span>Galeri
				</h3>
				<div class="tittle-style">
				<?php 
				include "koneksi.php";
				$galeri=mysqli_query($koneksi,"SELECT * FROM tbl_galeri");
					while ($sql= mysqli_fetch_array($galeri)){
				?>
				</div>
			</div>
			<div class="agileinfo-gallery-row">
				<div class="col-xs-4 w3gallery-grids">
				
				<a href="admin/user/images/<?php echo $sql['foto_galeri']; ?>"  class="imghvr-hinge-right figure">
				<img src="admin/user/images/<?php echo $sql['foto_galeri']; ?>" class="img-responsive" alt="">
						<div class="agile-figcaption">
							<h4><?php echo $sql['nama_foto']; ?></h4>
						</div>
					</a>
					<?php } ?>
				</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	<!-- //Gallery -->

