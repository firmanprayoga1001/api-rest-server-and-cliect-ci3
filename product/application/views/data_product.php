<table class="table table-bordered">
	<thead class="text-center">
		<tr>
			<th scope="col-2">#</th>
			<th scope="col-10">Product</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=0; foreach ($dataProduct as $dataProduct) { $no++; ?>
			<tr>
				<th class="text-center" scope="row"><?= $no; ?></th>
				<td>
					<div class="row">
						<div class="col-4">
							<img src="http://localhost/product_rest/images/<?= $dataProduct['picture'] ?>" width="100" alt="Product">
						</div>
						<div class="col-8">
							<h1 class="fs-14 ml-2 mt-1"><?= $dataProduct['product_name']; ?></h1>
							<p class="card-subtitle text-success ml-2 fs-14"><?= $dataProduct['point']; ?> Point</p>
							<p class="card-subtitle text-muted ml-2 fs-14">Available <?= $dataProduct['qty']; ?> Pcs</p>
						</div>												
					</div>
					<div class="row justify-content-center">
						<div class="col-6">
							<a href="<?php echo base_url('manage/detail/'.$dataProduct['id']) ?>" class="btn mt-4 mb-2" style="border-color: green; width:100%; border-radius: 20px;">Detail</a>
						</div>
					</div>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>



