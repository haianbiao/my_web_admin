<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

        public  function __construct()
              {
                      parent::__construct();
              }


	public   function index()
	{
              $data  = array();
              $this->load->model('tag_model');
              $data['tags'] = $this->tag_model->get_all_tags();
              $data['header']  = $this->load->view('header_page', NULL, TRUE);
		$this->load->view('add_page', $data);
	}

       public function add()
       {
              $this->load->model('add_model');
              $post        = $this->input->post();
              $title         = $this->input->post('title');
              $content  = $this->input->post('content');
              $tag_id     = $this->input->post('tag');
              $result     = $this->add_model->store($title, $content, $tag_id);
              if($result)
              {
                      redirect('add');
              }

       }


}