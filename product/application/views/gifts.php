<div class="container">
	<div class="row mt-3 justify-content-center">
		<div class="col-12 col-md-7 col-lg-5 mb-3">
			<a href="<?php echo base_url('home')?>" class="fs-16 float-left text-dark">
				<i class="fa-sharp fa-solid fa-chevron-left"></i>
			</a>
			<p class="fs-16 text-center">Gift</p>
			<hr>
			<?php if ($dataProduct) { ?>
				<div class="row mt-3">
					<?php foreach ($dataProduct as $dataProduct) { ?>
						<div class="col-md-6 col-6 mb-3">
							<div class="card poster">
								<a href="<?php echo site_url('gifts/detail_gifts/'.$dataProduct['id']) ?>" class="text-dark" style="text-decoration: none;">
									<img src="http://localhost/product_rest/images/<?= $dataProduct['picture'] ?>" class="card-img-top poster" alt="Poster Film">
								</a>
								<div class="fs-9 pin-poster-1" style="background-color:orange;">
									<b>New</b> 
								</div>
								<div class="col">
									<hr>
									<a href="<?php echo site_url('gifts/detail_gifts/'.$dataProduct['id']) ?>" class="text-dark" style="text-decoration: none;">
										<h1 class="fs-12"><?= $dataProduct['product_name'] ?></h1>
									</a>
									<p class="card-subtitle mb-2 fs-12" style="color:green;">
										<i class="fa-sharp fa-solid fa-circle-xmark"></i>  <?= $dataProduct['point'] ?> poins
									</p>
									<div class="row">
										<div class="col-md-8 col-8">
											<div class="fs-10 text-warning">
												<i class="fa-sharp fa-solid fa-star"></i>
												<i class="fa-sharp fa-solid fa-star"></i>
												<i class="fa-sharp fa-solid fa-star"></i>
												<i class="fa-sharp fa-solid fa-star"></i>
												<i class="fa-sharp fa-solid fa-star"></i>
											</div>									
											<p class="text-muted mb-2 fs-10" style="color:green;">
												150 reviews
											</p>
										</div>
										<div class="col-md-4 col-4">
											<div class="text-right">
												<?php if ( $dataProduct['qty'] === 10 ) { ?>
													<i class="fa-sharp fa-lg fa-regular fa-heart text-muted"></i>
												<?php } else { ?>
													<i class="fa-sharp fa-lg fa-solid fa-heart text-danger"></i>
												<?php } ?>
											</div>
										</div>
									</div>
									<!-- <h1 class="card-subtitle mb-2 text-muted fs-12" style="color:green;"><?= $dataProduct['info_product'] ?></h1> -->
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
			<div class="row justify-content-center">
				
				<?php if($active_page > 1 ) : ?>
					<a href="?page=<?= $active_page - 1; ?>" class="ml-2">
						<button class="btn btn-light" style="border-radius:10px; border-color:green;">&laquo;</button>
					</a>
				<?php endif ; ?>
				<?php for ( $i = 1; $i <= $count_page; $i++ ) : ?>
					<?php if($i == $active_page) : ?>
						<a href="?page=<?= $i; ?>" class="ml-2">
							<button class="btn text-light" style="background-color:green; border-radius:10px;"><?= $i; ?></button>
						</a>
					<?php else : ?>
						<a href="?page=<?= $i; ?>" class="ml-2">
							<button class="btn btn-light" style="border-radius:10px; border-color:green;"><?= $i; ?></button>
						</a>
					<?php endif ; ?>
				<?php endfor ?>
				<?php if($active_page < $count_page ) : ?>
					<a href="?page=<?= $active_page + 1; ?>" class="ml-2">
						<button class="btn btn-light" style="border-radius:10px; border-color:green;">&raquo;</button>
					</a>
				<?php endif ; ?>
				
			</div>	
			<div class="col-md-12">
				<div class="btn-group mb-3 float-right">
					
				</div>
			</div>
		</div>
	</div>
</div>