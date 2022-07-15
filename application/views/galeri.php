<style>
	.image-background{
		text-align: center;
	}
</style>
<div style="height: 20px;"></div>
<div
		class="image-background">

		<img class="" style="width:1035px;height: 250px;" src="<?=base_url();?>assets/images/03.jpg" alt="" srcset="">
	</div>
<!-- Gallery -->
	<div class="gallery">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span></span>Galeri
				</h3>
				<div class="tittle-style">

	<?php foreach ($galeri as $key => $value): ?>
				</div>
			</div>
			<div class="agileinfo-gallery-row">
				<div class="col-xs-4 w3gallery-grids">

				<a href="<?=base_url('uploads/' . $value->foto_galeri)?>"  class="imghvr-hinge-right figure">
				<img src="<?=base_url('uploads/' . $value->foto_galeri)?>" class="img-responsive" alt="">
						<div class="agile-figcaption">
							<h4><?=$value->nama_foto;?></h4>
						</div>
					</a>
					<?php endforeach;?>
				</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	<!-- //Gallery -->

