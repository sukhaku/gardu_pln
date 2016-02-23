<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
		parent::__construct();
		$this->load->model('mgardu');
		$this->load->model('mtrafo');
		if($this->session->userdata('islogin')==FALSE){    		
    	   	redirect('login');
        }
	}

	public function index()
	{
		$this->render_pages('home');    
	}
////fungsi gardu
	function gardu(){
			$data['gardu'] = $this->mgardu->show_gardu();
			$this->render_pages('gardu',$data);
	}
	function delete_gardu($id){
		$this->mgardu->delete_gardu($id);
		redirect('dashboard/gardu');
	}
	function add_gardu(){
		$data['trafo_list']=$this->mgardu->get_trafo_list();
		$data['jenis_gardu'] = $this->mgardu->get_jenis_gardu();
		$data['gi_gardu'] = $this->mgardu->get_gi_gardu();
		$this->render_pages('add_gardu',$data);		
	}
	function act_add_gardu(){
		$nama_gardu = $this->input->post('nama_gardu');
        $jenis_gardu = $this->input->post('jenis_gardu');
        $gi_gardu = $this->input->post('gi_gardu');
		$alamat = $this->input->post('alamat');
		$temp_gardu = $this->input->post('temp_gardu');
		$jenis_trafo = $this->input->post('jenis_trafo');

		$this->form_validation->set_rules('nama_gardu', 'Nama Gardu', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Gardu', 'required');
		$this->form_validation->set_rules('temp_gardu', 'Temp Gardu', 'required');
		$this->form_validation->set_rules('jenis_gardu','Jenis Gardu','required');
		$this->form_validation->set_rules('jenis_trafo','Jenis Trafo','required');
		$this->form_validation->set_rules('gi_gardu','GI Gardu','required');

		if ($this->form_validation->run() == FALSE){
			$data['trafo_list']=$this->mgardu->get_trafo_list();
			$data['jenis_gardu'] = $this->mgardu->get_jenis_gardu();
			$data['gi_gardu'] = $this->mgardu->get_gi_gardu();
            $this->render_pages('add_gardu',$data);
       	}else{
			$data_gardu = array("nama_gardu"=>$nama_gardu,"id_trafo"=>$jenis_trafo,"jenis_gardu"=>$jenis_gardu,"gi_gardu"=>$gi_gardu,"alamat_gardu"=>$alamat,"temp_gardu"=>$temp_gardu);
        	$this->mgardu->insert_data_gardu($data_gardu);
            redirect('dashboard/gardu');
		}
	}

	function edit_gardu($id){
		$data['gardu'] = $this->mgardu->get_gardu($id)->row();
		$data['trafo_list']=$this->mgardu->get_trafo_list();
		$data['jenis_gardu'] = $this->mgardu->get_jenis_gardu();
		$data['gi_gardu'] = $this->mgardu->get_gi_gardu();
		$this->render_pages('edit_gardu',$data);
	}

	function save_edit_gardu(){
		$id_gardu = $this->input->post('id_gardu');
		$nama_gardu = $this->input->post('nama_gardu');
        $jenis_gardu = $this->input->post('jenis_gardu');
        $gi_gardu = $this->input->post('gi_gardu');
		$alamat = $this->input->post('alamat');
		$temp_gardu = $this->input->post('temp_gardu');
		$jenis_trafo = $this->input->post('jenis_trafo');

		$this->form_validation->set_rules('id_gardu', 'ID Gardu', 'required');
		$this->form_validation->set_rules('nama_gardu', 'Nama Gardu', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Gardu', 'required');
		$this->form_validation->set_rules('temp_gardu', 'Temp Gardu', 'required');
		$this->form_validation->set_rules('jenis_gardu','Jenis Gardu','required');
		$this->form_validation->set_rules('jenis_trafo','Jenis Trafo','required');
		$this->form_validation->set_rules('gi_gardu','GI Gardu','required');

		if ($this->form_validation->run() == FALSE){
			$data['trafo_list']=$this->mgardu->get_trafo_list();
			$data['jenis_gardu'] = $this->mgardu->get_jenis_gardu();
			$data['gi_gardu'] = $this->mgardu->get_gi_gardu();
            $this->render_pages('validasi_edit',$data);
       	}else{
			$data_gardu = array("nama_gardu"=>$nama_gardu,"id_trafo"=>$jenis_trafo,"jenis_gardu"=>$jenis_gardu,"gi_gardu"=>$gi_gardu,"alamat_gardu"=>$alamat,"temp_gardu"=>$temp_gardu);
        	$this->mgardu->update_gardu($data_gardu,$id_gardu);
            
            redirect('dashboard/gardu');
		}
	}
//fungsi trafo
	function trafo(){
			$data['trafo'] = $this->mtrafo->show_trafo();
			$this->render_pages('trafo',$data);
	}
	function delete_trafo($id){
		$this->mtrafo->delete_trafo($id);
		redirect('dashboard/trafo');
	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */