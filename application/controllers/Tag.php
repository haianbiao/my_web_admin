<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Tag extends CI_Controller {

        function __construct()
        {
                parent::__construct();
                $this->load->model('tag_model');
        }


	public function  index()
	{
              $data['header']  = $this->load->view('header_page', NULL, TRUE);
		$this->load->view('tag_page', $data);
	}

      public function add_tag()
      {
              $tag_name  = $this->input->post('tag_name');
              $return = $this->tag_model->add_tag($tag_name);
              if(!$return)
              {
                     echo "添加标签失败";
              }
              else
              {
                     redirect('tag');
              }

      }
}