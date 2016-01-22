<?php
class Add_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function store($title, $content, $tag_id)
    {
        $current_time = time();
    	 $sql = "INSERT INTO article(title,  tag_id, content,  add_time,   update_time) VALUES(?, ?, ?,?,?)";
    	 $query = $this->db->query($sql , array($title, $tag_id,  $content, $current_time, $current_time));
        if($query)
        {
              return TRUE;
        }
    }




}