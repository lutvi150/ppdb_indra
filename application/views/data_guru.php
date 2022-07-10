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
	<hr>
		<div class="container text-center">
			<div class="title-div">
				<div class="tittle-style">
					Data Guru
				</div>
			</div>
			<div class="about-sub">
				<div class="col-md-12 about_bottom_left" style="background-color:aliceblue">
					<table class="table" style="text-align:center">
						<thead>
							<th>NO</th>
							<th>NAMA GURU</th>
							<th>NIP</th>
						</thead>
						<tbody>
							<?php $no = 1;foreach ($guru as $key => $value): ?>
							<tr>
								<td><?=$no++;?></td>
								<td><?=$value->nama_guru;?></td>
								<td><?=$value->nip_guru;?></td>
							</tr>
							<?php endforeach;?>
						</tbody>
					</table>
				</div>
				<!-- Stats-->
				<div class="col-md-6 about2-info">
					<img src="images/graduate.png" alt="" />
				</div>
				<!-- //Stats -->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
