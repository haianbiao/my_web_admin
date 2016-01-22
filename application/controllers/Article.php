<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

              function __construct()
              {
              	parent::__construct();
              }


	public function show_article($id)
	{
              	           $this->load->model('article_model');
              	           $this->load->model('home_model');
              	           $this->load->model('tag_model');
                                   $data['full_article'] = $this->article_model->show_article($id);
                                   $right_con['tags']            = $this->tag_model->get_tag_names();
                                   $limit  = 5;
                                   $right_con['my_latest_article'] = $this->home_model->get_latest_article($limit);
                                   $data['right_content']       = $this->load->view('right_content_page',  $right_con, TRUE);
                                   $data['header']  = $this->load->view('header_page', NULL, TRUE);
	          $this->load->view('article_page', $data);
	}
}