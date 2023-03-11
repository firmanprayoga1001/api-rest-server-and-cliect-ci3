<?php  

class product_model extends CI_Model
{
	public function getProduct($id)
	{
		if ($id === NULL) {
			$this->db->select('*');
			$this->db->from('gift');
			$this->db->order_by('id','desc');
			$query = $this->db->get();
			return $query->result();
		} else {
			$this->db->select('gift.*');
			$this->db->from('gift');
			$this->db->where('id',$id);
			$this->db->order_by('id','desc');
			$query = $this->db->get();
			return $query->row();
		}
		
	}
	public function addProduct($data)
	{
		$this->db->insert('gift', $data);
	}
	public function updateProduct($data)
	{
		$this->db->where('id',$data['id']);
		$this->db->update('gift', $data);
	}
	public function deleteProduct($id)
	{
		$this->db->delete('gift', ['id' => $id]);
		return $this->db->affected_rows();
	}
	public function searchProduct($kword)
	{	
		$this->db->select('gift.*');
		$this->db->from('gift');
		$this->db->like('product_name',$kword);
		$this->db->order_by('id','desc');
		$query = $this->db->get();
		return $query->result();		
	}
}
