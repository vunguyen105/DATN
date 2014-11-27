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
            $this->load->model('menucate_m');
            $this->load->model('product_m');
            $this->load->library('category_lib');
            $this->new_nested_set = $this->category_lib->category_initialize();
            $idMenu = 4;
            $cateInMenu = $this->menucate_m->getCateMenu($idMenu);
            $inCat = array();
            foreach ($cateInMenu as $k => $v) {
                    $inCat[] = $v['CateID'];
            }
            $this->product_m->set_start( 0, 3);
            $data['products'] = $this->product_m->get();
            //var_dump($data['products']);die;
            $data['menu'] = $this->new_nested_set->category_fronend( 1, $inCat, $idMenu, $cateInMenu);
            $data['slider'] = $this->load->view('frontend/slider','', true);
            $data['content'] = $this->load->view('frontend/content',$data, true);
            $this->load->view('frontend/layout',$data);
        }
        
        public function blog() {
            $this->load->model('menucate_m');
            $this->load->model('product_m');
            $this->load->model('news_m');
            $this->load->library('category_lib');
            $this->new_nested_set = $this->category_lib->category_initialize();
            $idMenu = 4;
            $cateInMenu = $this->menucate_m->getCateMenu($idMenu);
            $inCat = array();
            foreach ($cateInMenu as $k => $v) {
                    $inCat[] = $v['CateID'];
            }
            $data['menu'] = $this->new_nested_set->category_fronend( 1, $inCat, $idMenu, $cateInMenu);
            $data['news'] = $this->news_m->get();
            $data['content'] = $this->load->view('frontend/blog',$data, true);
            $this->load->view('frontend/layout',$data);
        }
        
        public function contact() {
            $data ='';
            $data['content'] = $this->load->view('frontend/contact_us',$data, true);
            $this->load->view('frontend/layout',$data);
        }
}
