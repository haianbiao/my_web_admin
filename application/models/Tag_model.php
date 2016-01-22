<?php
class Tag_model extends CI_Model {

        function __construct()
        {
            parent::__construct();
        }

        function  get_tag_names()
        {
        	$sql = "SELECT   distinct (tag_id) as tag_id,  name
        	             FROM   article  
                        INNER JOIN tag   on   article.tag_id = tag.id";
        	 $query = $this->db->query($sql);

        	 if($query->num_rows() > 0)
        	 {
        	          return $query->result_array();
        	 }

        	 return array();
        }

        function get_article_by_tag_id($tag_id)
        {
             $sql = "SELECT  * 
                          FROM  article 
                          WHERE tag_id = ?";
              $query = $this->db->query($sql, array($tag_id));
              if($query->num_rows() > 0)
              {
                      return $query->result_array();
              }
              return array();
        }

        function get_all_tags()
        {
                  $sql = "SELECT *
                               FROM tag ";
                  $query = $this->db->query($sql);

                  return $query->result_array();
        }

        function add_tag($tag_name)
        {
               $sql = "INSERT INTO tag (name)  values(?)";
               return $this->db->query($sql, array($tag_name));

        }

 

}