<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

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
	public function index()
	{
		if($this->session->userdata('islogin')==FALSE){    		
    	   $this->load->view('login');
        }else{
            redirect('dashboard');
        }    
		   
	}

	function act_login(){
		
		$this->load->model('mgardu');
            $username = $this->input->post('username');
       		$password = $this->input->post('password');
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
       		if ($this->form_validation->run() == FALSE){
                $this->load->view('login');
            }else{
                $cek = $this->mgardu->get_user($username,$password)->num_rows(); 
                if($cek>=1){
                    $data = $this->mgardu->get_user($username,$password)->row();
                    $this->session->set_userdata('islogin',TRUE);
                    $this->session->set_userdata('username',$data->username);
                    $this->session->set_userdata('password',$data->password);
                    redirect('dashboard');             
                }else{
                    $data['keterangan'] = 'User is not Registered';    
                    $this->load->view('login',$data);                
                }
            }   	
	}

	function logout(){
		$this->session->sess_destroy();
    	redirect(base_url());
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */