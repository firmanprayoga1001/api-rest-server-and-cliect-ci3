<div class="container">
	<div class="row mt-3 justify-content-center">
		<div class="col-12 col-md-7 col-lg-5 mb-3">
			<div class="col">
				<a href="<?php echo base_url('home')?>" class="fs-16 float-left text-dark">
					<i class="fa-sharp fa-solid fa-chevron-left"></i>
				</a>
				<p class="fs-16 text-center">Manage Product</p>
				<hr>
			</div>
			<div class="col">
				<div class="row mt-3 mb-3 justify-content-center">
					<div class="col">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Product name.." id="search-input" style="border-bottom-left-radius: 20px; border-top-left-radius: 20px;">
							<div class="input-group-append">
								<button class="btn btn-dark" type="button" id="search-button" style="border-bottom-right-radius: 20px; border-top-right-radius: 20px;">Search</button>
							</div>
						</div>
					</div>
				</div>
				<hr>
				<button class="btn mb-3 text-light" data-toggle="modal" data-target="#addForm" style="background-color: green; width:50%; border-radius: 20px; padding: 5px;">+ Add product
				</button>
				<div class="modal fade" id="addForm" tabindex="-1" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h6 class="modal-title" id="exampleModalLabel">Add Product</h6>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<label>Product name</label>
									<input type="text" class="form-control" name="name" id="input-name" required>
								</div>
								<div class="form-group">
									<label>Product info</label>
									<input type="text" class="form-control" name="info" id="input-info" required>
								</div>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label>Point</label>
											<input type="number" class="form-control text-center" name="point" id="input-point" required>
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Quantity</label>
											<input type="number" class="form-control text-center" name="qty" id="input-qty" required>
										</div>	
									</div>
								</div>
								<div class="form-group">
									<label>Picture</label>
									<input type="text" class="form-control" name="picture" id="input-pic" required>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn" style="border-color: green; border-radius: 20px;" data-dismiss="modal" id="close-add">Close</button>
								<button type="submit" class="btn text-light" id="add-button" style="background-color: green; border-radius: 20px;">Save</button>
							</div>
						</div>
					</div>
				</div>
				<div id="data-notif"></div>
				<div id="product-list">
					<?php include'data_product.php'?>
				</div>
			</div>
		</div>
	</div>
</div>