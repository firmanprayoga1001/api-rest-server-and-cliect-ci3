<div class="container">
	<div class="row mt-3 justify-content-center">
		<div class="col-12 col-md-7 col-lg-5 mb-3">
			<div class="col">
				<a href="<?php echo base_url('gifts')?>" class="fs-16 float-left text-dark">
					<i class="fa-sharp fa-solid fa-chevron-left"></i>
				</a>
				<p class="fs-16 text-center">Gift detail</p>
				<hr>
			</div>
			<div class="col">
				<div class="card noborder">
					<a href="#" class="text-dark" style="text-decoration: none;">
						<img src="http://localhost/product_rest/images/<?= $detailProduct['picture'] ?>" class="card-img-top poster" alt="Poster Film">
						<div class="fs-12 pin-poster-1" style="background-color:orange;">
							<b>New</b> 
						</div>
					</a>
				</div>
			</div>
			<div class="col mt-3">
				<h3><?= $detailProduct['product_name'] ?></h3>
				<p class="card-subtitle mb-2 text-muted fs-16">Available <?= $detailProduct['qty'] ?> Pcs</p>
				<hr>
				<div class="row">
					<div class="col-md-4 col-4 text-center">
						<div class="fs-12 text-warning mb-2 mt-2">
							<i class="fa-sharp fa-solid fa-star"></i>
							<i class="fa-sharp fa-solid fa-star"></i>
							<i class="fa-sharp fa-solid fa-star"></i>
							<i class="fa-sharp fa-solid fa-star"></i>
							<i class="fa-sharp fa-solid fa-star"></i>
						</div>
						<p class="text-muted fs-12" style="color:green;">
							150 Reviews
						</p>
					</div>
					<div class="col-md-4 col-4 text-center">
						<p class="card-subtitle" style="color:green;">
							<i class="fa-sharp fa-solid fa-circle-xmark"></i>
						</p>
						<p class="card-subtitle fs-18" style="color:green;"><b>20000</b></p>
						<p class="card-subtitle text-muted">Poins</p>
					</div>
					<div class="col-md-4 col-4 text-center">

						<?php if ( $detailProduct['qty'] === 10 ) { ?>
							<a href="<?php echo base_url('gifts')?>" class="fs-24">
								<i class="fa-sharp fa-regular fa-heart text-muted"></i>
							</a>
						<?php } else { ?>
							<a href="<?php echo base_url('gifts')?>" class="fs-24">
								<i class="fa-sharp fa-solid fa-heart text-danger"></i>
							</a>
							<p class="text-muted fs-12">Add To Wishlist</p>
						<?php } ?>
						
					</div>
				</div>
				<hr>
				<h6>Info Product</h6>
				<p class="card-subtitle mb-2 text-muted fs-12"><?= $detailProduct['info_product'] ?></p>
				<form id='myform' method='POST' class='quantity' action='#'>
					<div class="row mt-3">
						<div class="col-md-6 col-6">
							<div class="input-group">
								<input type='button' value='-' class='qtyminus minus noborder' field='quantity' style="border-bottom-left-radius: 20px; border-top-left-radius: 20px;"/>
								<input type='text' name='quantity' value='0' class='qty form-control text-center' />
								<input type='button' value='+' class='qtyplus plus noborder' field='quantity' style="border-bottom-right-radius: 20px; border-top-right-radius: 20px;" />
							</div>
						</div>
						<div class="col-md-6 col-6">
							<a href="<?php echo base_url('gifts')?>">
								<input type="button" class="btn form-control" style="border-color: green; width:100%; border-radius: 20px; padding: 5px;" value="Add to cart"/>
							</a>
						</div>
					</div>
				</form>
				<a href="<?php echo base_url('gifts')?>" class="btn text-light mt-4 mb-3" style="background-color: green; width:100%; border-radius: 20px; padding: 5px;">Redem
				</a>
			</div>
		</div>
	</div>
</div>