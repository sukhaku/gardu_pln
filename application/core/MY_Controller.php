<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class MY_Controller extends CI_Controller{
    function render_pages($content, $data = NULL){
        //$data['cat_news'] = $this->mnews->get_cat_news();
        $data['header'] = $this->load->view('template/header', $data, TRUE);
        $data['sidebar'] = $this->load->view('template/sidebar', $data, TRUE);
        $data['content'] = $this->load->view($content, $data, TRUE);

       
        $this->load->view('template/index', $data);
    }
    
}