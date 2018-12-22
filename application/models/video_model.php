<?php
// class video_model extends CI_Model {
// 	public function savevideo($vname,$vid){
// 		$videodata=array(
// 			"name"=>$vname,
// 			"youtube_vid"=>$vid,
// 		);
// 		return $this->db->insert("video",$videodata);
// 	}

// 	public function listvideo(){
// 		$this->db->select("video_id,name,youtube_vid"); 
// 		$this->db->from('video');
// 		$query = $this->db->get();
// 		return $query->result();
// 	}

// 	public function deletevideo($vid){
// 		$this->db->where('video_id',$vid);
// 		$sql = $this->db->delete('video');
// 		return "Deleted";
// 	}

// 	public function singlevideolist($vid){
// 		$this->db->where('video_id',$vid);
// 		$sql = $this->db->get('video');
// 		return $sql->result();
// 	}

// 	public function singlevideoupdate($vid,$name,$youtube_vid){
// 		$array = array(
// 			"video_id" => $vid,
// 			"name" => $name,
// 			"youtube_vid" => $youtube_vid,
// 		);
// 		$this->db->where("video_id",$vid);
// 		$this->db->update("video",$array);
// 		return"Data Updated";
// 	}
// }
 ?>