<?php
// class gallery_model extends CI_Model {
// 	public function savegallery($caption,$image){
// 		$gallerydata=array(
// 			"caption"=>$caption,
// 			"image"=>$image,
// 		);
// 		$this->db->insert("gallery",$gallerydata);
// 	}

// 	public function listgallery(){
// 		$this->db->select("gallery_id,caption,image"); 
// 		$this->db->from('gallery');
// 		$query = $this->db->get();
// 		return $query->result();
// 	}

// 	public function deletegallery($galleryid){
// 		$this->db->where('gallery_id',$galleryid);
// 		// unlink("asset/images/gallery/".$image);
// 		$sql = $this->db->delete('gallery');
// 		return "Deleted";
// 	}

// 	public function singlegallerylist($galleryid){
// 		$this->db->where('gallery_id',$galleryid);
// 		$sql = $this->db->get('gallery');
// 		return $sql->result();
// 	}

// 	public function singlegalleryupdate($galleryid,$caption,$image){
// 		$array = array(
// 			"gallery_id" => $galleryid,
// 			"caption" => $caption,
// 			"image" => $image,
// 		);
// 		$this->db->where("gallery_id",$galleryid);
// 		$this->db->update("gallery",$array);
// 		return"Data Updated";
// 	}
// }
?>