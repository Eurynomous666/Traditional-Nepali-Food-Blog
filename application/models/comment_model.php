<?php
class comment_model extends CI_Model
{


    // get full tree comments based on news id
    function tree_all($blog_id) {
        $result = $this->db->query("SELECT * FROM comment where blog_id = $blog_id");
        return $result->result();
    }

    // to get child comments by entry id and parent id and news id
    function tree_by_parent($blog_id,$in_parent) {
        $result = $this->db->query("SELECT * FROM comment where parent_id = $in_parent AND  blog_id = $blog_id");
        return $result->result();
    }

    // to insert comments
    function add_new_comment()
    {
        $this->db->set("blog_id", $this->input->post('blog_id'));
        $this->db->set("parent_id", $this->input->post('parent_id'));
        $this->db->set("comment_name", $this->input->post('comment_name'));
        $this->db->set("comment_email", $this->input->post('comment_email'));
        $this->db->set("comment_body", $this->input->post('comment_body'));
        $this->db->set("comment_created", time());
        $this->db->insert('comment');
        return $this->input->post('parent_id');
    }


}
?>
