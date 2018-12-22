<?php
class blog_model extends CI_Model {
	public function saveblog($name,$image,$description,$location,$price){
		$blogdata=array(
			"name"=>$name,
			"image"=>$image,
			"description"=>$description,
			"location"=>$location,
			"price"=>$price,			
		);
		return $this->db->insert("blog",$blogdata);
	}


	public function listblog(){
		$this->db->select("blog_id,name,location,price"); 
		$this->db->from('blog');
		$query = $this->db->get();
		return $query->result();
	}

	public function deleteblog($blog_id){
		$this->db->where('blog_id',$blog_id);
		$sql = $this->db->delete('blog');
		return "Deleted";
	}

	public function singlebloglist($blog_id){
		$this->db->where('blog_id',$blog_id);
		$sql = $this->db->get('blog');
		return $sql->result();
	}

	public function singleblogupdate($blog_id,$name,$image,$description,$location,$price){
		$array = array(
			"blog_id" => $blog_id,
			"name"=>$name,
			"image"=>$image,
			"description"=>$description,
			"location"=>$location,
			"price"=>$price,
			
		);
		$this->db->where("blog_id",$blog_id);
		$this->db->update("blog",$array);
		return"Data Updated";
	}
 }
?>