<?php
class home extends CI_Controller {
	function __construct() {
		parent::__construct ();
                $this->load->model ( 'customer_m' );
                $this->load->library('form_validation');
	}
	public function index() {
            $data['content'] = $this->load->view('frontend/login','', true);
            $this->load->view('frontend/layout', $data);
	}
	
        public function login()
        {
            if ($this->input->is_ajax_request ()) {
                $post = $this->input->post ();
                $rules_login = $this->customer_m->rules_login;
                $this->form_validation->set_rules ( $rules_login );
                if ($this->form_validation->run () == TRUE) {
                        $return = $this->customer_m->very($post ['username'], $post ['password']);
                        if($return != false) {
                            $this->session->set_flashdata ( 'success', 'Đăng nhập thành công' );
                            echo json_encode ( array (
							'stt' => 1 
					) );
                            die;
                                        
                        }
                        else {
                            echo json_encode ( array (
							'msg' => 'Đăng nhập thất bại' 
					) );
                                        die;
                        }
                        
                }
                 else {
                                echo json_encode ( array (
                                                'msg' => 'Bạn chưa nhập dữ liệu  vào hoặc nhập sai dữ liệu' ,
                                                'error' => validation_errors()
                                ) );
                                die;
                }
            }
        }

        public function product() {
            $data['slider'] = $this->load->view('frontend/slider','', true);
            $data['content'] = $this->load->view('frontend/content','', true);
            $this->load->view('frontend/layout',$data);
        }
}
