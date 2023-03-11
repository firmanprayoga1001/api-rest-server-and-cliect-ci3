<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gifts extends CI_Controller {

	public function index()
	{
		function getProduct($url){
			
			$data = file_get_contents($url);
			$data = json_decode($data, true);
			if ($data['status'] === 'TRUE') {
				$dataProduct = $data['result'];
				return $dataProduct;
			}	
		}

		$url = 'http://localhost/product_rest/gifts';
		$dataProduct = getProduct($url);
		$countData = count($dataProduct);
		$countDataPerpage = 6;
		$countPage = ceil( $countData / $countDataPerpage ); 
		$activePage = ( isset($_GET["page"]) ) ? $_GET["page"] : 1;
		$firstData = ( $countDataPerpage * $activePage ) - $countDataPerpage;
		$dataProduct = array_slice($dataProduct,$firstData,$countDataPerpage);

		$data = array(
			'title' => 'Gifts',
			'page' => 'gifts',
			'dataProduct' => $dataProduct,
			'count_page' => $countPage,
			'active_page' => $activePage
		);

		$this->load->view('layout',$data);
	}
	public function detail_gifts($id)
	{
		$id = $id;
		$url = 'http://localhost/product_rest/gifts';
		$getUrl = $url.'?id='.$id;
		$data = file_get_contents($getUrl);
		$data = json_decode($data, true);
		$detailProduct = $data['result'];

		$data = array(
			'title' => 'Gift Detail',
			'page' => 'detail_gifts',
			'detailProduct' => $detailProduct
		);

		$this->load->view('layout',$data);
	}
}
