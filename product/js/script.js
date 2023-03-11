$(document).ready(function() {

	$('#delete-button').on('click',function() {
		$('#update-button').trigger('click');
	});

	function searchProduct(){
		$('#product-list').html('');
		$('#product-list').load('http://localhost/product/manage/data/'+ $('#search-input').val());
	}
	$('#search-button').on('click',function() {
		searchProduct();
	});
	$('#search-input').on('keyup', function(e) {
		if (e.keyCode === 13){
			searchProduct();
		}
	});

	function addProduct(){
		$.ajax({
			url: 'http://localhost/product_rest/gifts',
			type: 'post',
			dataType:'json',
			data: {
				'name' : $('#input-name').val(),
				'info' : $('#input-info').val(),
				'qty' : $('#input-qty').val(),
				'point' : $('#input-point').val(),
				'pic' : $('#input-pic').val(),
			},
			success: function (add) {

				if (add.status === 'TRUE'){
					$('#product-list').html('');
					$('#product-list').load('http://localhost/product/manage/data/all');
				} else {
					$('#data-notif').html('');
					$('#data-notif').append(`<div class="col">
						<h3 class="text-center text-danger">`+ add.message +`</h3>
						</div>`);
				}
			}
		});
	}
	$('#add-button').on('click',function() {
		$('#close-add').trigger('click');
		addProduct();
		$('#input-name').val('');
		$('#input-info').val('');
		$('#input-qty').val('');
		$('#input-point').val('');
		$('#input-pic').val('');
	});

	function updateProduct(){
		$.ajax({
			url: 'http://localhost/product_rest/gifts',
			type: 'patch',
			dataType:'json',
			data: {
				'id' : $('#id-product').val(),
				'name' : $('#update-name').val(),
				'info' : $('#update-info').val(),
				'qty' : $('#update-qty').val(),
				'point' : $('#update-point').val(),
				'pic' : $('#update-pic').val(),
			},
			success: function (update) {

				if (update.status === 'TRUE') {

					window.location.replace('http://localhost/product/manage');
				} else {
					$('#notif').html('');
					$('#notif').append(`<div class="col">
						<h3 class="text-center text-danger">`+ update.message +`</h3>
						</div>`);
				}
			}
		});
	}
	
	$('#update-button').on('click',function() {
		updateProduct();
	});
	

	$('.quantity').on('click', '.plus', function(e) {
		let $input = $(this).prev('input.qty');
		let val = parseInt($input.val());
		$input.val( val+1 ).change();
	});

	$('.quantity').on('click', '.minus', function(e) {
		let $input = $(this).next('input.qty');
		var val = parseInt($input.val());
		if (val > 0) {
			$input.val( val-1 ).change();
		} 
	});
});





