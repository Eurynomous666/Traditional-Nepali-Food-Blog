<?php
/*class testimonial_model extends CI_Model {
	public function savetestimonial($fullname,$dowhat,$testimonial){
		$testimonialdata=array(
			"fullname"=>$fullname,
			"dowhat"=>$dowhat,
			"testimonial"=>$testimonial,
		);
		return $this->db->insert("testimonial",$testimonialdata);
	}

	public function listtestimonial(){
		$this->db->select("testimonial_id,fullname,dowhat,testimonial"); 
		$this->db->from('testimonial');
		$query = $this->db->get();
		return $query->result();
	}

	public function deletetestimonial($testimonialid){
		$this->db->where('testimonial_id',$testimonialid);
		$sql = $this->db->delete('testimonial');
		return "Deleted";
	}

	public function singletestimoniallist($testimonialid){
		$this->db->where('testimonial_id',$testimonialid);
		$sql = $this->db->get('testimonial');
		return $sql->result();
	}

	public function singletestimonialupdate($testimonialid,$fullname,$dowhat,$testimonial){
		$array = array(
			"testimonial_id" => $testimonialid,
			"fullname" => $fullname,
			"dowhat" => $dowhat,
			"testimonial" => $testimonial,
		);
		$this->db->where("testimonial_id",$testimonialid);
		$this->db->update("testimonial",$array);
		return"Data Updated";
	}
}*/
?>