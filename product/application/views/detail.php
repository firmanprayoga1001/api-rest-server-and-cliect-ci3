<div class="container">
	<div class="row mt-3 justify-content-center">
		<div class="col-12 col-md-7 col-lg-5 mb-3">
			<div class="col">
				<a href="<?php echo base_url('manage')?>" class="fs-16 float-left text-dark">
					<i class="fa-sharp fa-solid fa-chevron-left"></i>
				</a>
				<p class="fs-16 text-center">Detail Product</p>
				<hr>
				<div id="notif"></div>
			</div>
			<div class="col" id="form-update">
				<div class="card">
					<div class="card-header">
						<h6 class="modal-title" id="exampleModalLabel">Product - ID : 
							<input type="text" class="noborder bg-transparent" id="id-product" size="5px" value="<?= $detailProduct['id']; ?>" disabled>
						</h6>
					</div>
					<div class="card-body">
						<div class="form-group">
							<label>Product name</label>
							<input type="text" class="form-control" name="name" id="update-name" value="<?= $detailProduct['product_name']; ?>" required>
						</div>
						<div class="form-group">
							<label>Product info</label>
							<input type="text" class="form-control" name="info" id="update-info" value="<?= $detailProduct['info_product']; ?>" required>
						</div>
						<div class="row">
							<div class="col-6">
								<div class="form-group">
									<label>Point</label>
									<input type="number" class="form-control text-center" name="point" id="update-point" value="<?= $detailProduct['point']; ?>"required>
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label>Quantity</label>
									<input type="number" class="form-control text-center" name="qty" id="update-qty" value="<?= $detailProduct['qty']; ?>" required>
								</div>	
							</div>
						</div>
						<div class="form-group">
							<label>Picture</label>
							<input type="text" class="form-control" name="picture" id="update-pic" value="<?= $detailProduct['picture']; ?>" required>
						</div>
					</div>
					<div class="card-footer">
						<div class="row">
							<div class="col-6">
								<a href="<?php echo base_url('manage') ?>" type="button" class="btn" style="border-color: green; border-radius: 20px; width: 100%;">Back</a>
							</div>
							<div class="col-6">
								<button class="btn text-light" id="update-button" onclick="return confirm('Are you sure to change ?')" style="background-color: green; border-radius: 20px; width: 100%;">Update</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>