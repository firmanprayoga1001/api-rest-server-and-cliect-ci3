<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {

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

		$data = array(
			'title' => 'Manage Product',
			'page' => 'manage',
			'dataProduct' => $dataProduct
		);

		$this->load->view('layout',$data);
	}
	public function data($kword)
	{
		$kword = $kword;
		if ($kword === 'all'){
			$url = 'http://localhost/product_rest/gifts';
			$getUrl = $url;
			$data = file_get_contents($getUrl);
			$data = json_decode($data, true);
			if ($data['status'] === 'TRUE') {
				$dataProduct = $data['result'];
			} else {
				$dataProduct = $data['message'];
			}
		} else {
			$url = 'http://localhost/product_rest/search';
			$getUrl = $url.'?kword='.$kword;
			$data = file_get_contents($getUrl);
			$data = json_decode($data, true);
			if ($data['status'] === 'TRUE') {
				$dataProduct = $data['result'];
			} else {
				$dataProduct = $data['message'];
			}
		}
		
		$data = array('dataProduct' => $dataProduct);

		$this->load->view('data_product',$data);
	}
	public function detail($id)
	{
		$id = $id;
		$url = 'http://localhost/product_rest/gifts';
		$getUrl = $url.'?id='.$id;
		$data = file_get_contents($getUrl);
		$data = json_decode($data, true);
		$detailProduct = $data['result'];

		$data = array(
			'title' => 'Detail Product',
			'page' => 'detail',
			'detailProduct' => $detailProduct
		);

		$this->load->view('layout',$data);
	}
	public function delete($id)
	{
		$id = $id;
		$data = array( 'id' => $id);
		$data_json = json_encode($data);
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, "http://localhost/product_rest/gifts/{$_POST['id']}");
		curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
		$response  = curl_exec($curl);
		
		curl_close($curl);
		redirect('manage');
		
	}
}
