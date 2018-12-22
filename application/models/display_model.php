 <?php
class display_model extends CI_Model{

// 	function displayrecords()
// 	{
// 	$query=$this->db->query("select * from video");
// 	return $query->result();
// 	}

	function displayblog(){
		$query=$this->db->query("select * from blog");
		return $query->result();
	}

// 	function displaytestimonial(){
// 		$query=$this->db->query("select * from testimonial");
// 		return $query->result();
// 	}

// 	function displaygallery(){
// 		$query=$this->db->query("select * from gallery");
// 		return $query->result();
// 	}

// 	function displaycount(){
// 		$this->db->select("*"); 
// 		$this->db->from('package');
// 		$query = $this->db->get();
// 		return $query->result();		
// 	}

// 	function displaycounttest(){
// 		$this->db->select("*"); 
// 		$this->db->from('testimonial');
// 		$query = $this->db->get();
// 		return $query->result();		
// 	}

// 	function displayexpensivepackage(){
// 		$query=$this->db->query("SELECT * FROM package WHERE cost IN (SELECT MAX(cost) FROM package);");
// 		return $query->result();
// 	}

// 	function displaytreklist(){
// 		$query=$this->db->query("select * from package where trip_style = 'Trek';");
// 		return $query->result();
// 	}

// 	function displayhikelist(){
// 		$query =$this->db->query("select * from package where trip_style <> 'Trek';");
// 		return $query->result();
// 	}

// 	function search($keyword){
// 		$query = $this->db->query("SELECT * from package where (name like '%".$keyword."%') or (trip_style like '%".$keyword."%') or (trip_difficulty like '%".$keyword."%')");
//         return $query->result();
// 	}
}
?>