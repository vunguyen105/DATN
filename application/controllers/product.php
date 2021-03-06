<?php
class product extends Backend_Controller {
	function __construct() {
		parent::__construct ();
		$this->load->model ( 'product_m' );
		$this->load->library ( 'pagination' );
	}
        
        public function index() {
                $this->view();
        }

        public function view() {
		$this->template->add_title ( 'All Product' );
		$this->template->write ( 'title', 'List product' );
		$this->template->write ( 'desption', 'List product' );
		$config ['base_url'] = base_url () . "product/view?";
		$config ['per_page'] = PERPAGA;
		if ($this->input->is_ajax_request ()) {
			$data ['start'] = ($this->input->get ( 'page' ) == FALSE) ? 0 : ( int ) $this->input->get ( 'page' );
			$data ['count'] = $config ['total_rows'] = $this->product_m->get ( FALSE, TRUE );
			$data ['products'] = $this->product_m->show ( $data ['start'] );
			$this->pagination->initialize ( $config );
			$data ['pagination'] = $this->pagination->create_links ();
			$ajax = $this->load->view ( 'product/product_ajax_index', $data, true );
			echo $ajax;
		} else {
			$data ['count'] = $config ['total_rows'] = $this->product_m->get ( FALSE, TRUE );
			$data ['products'] = $this->product_m->show ();
			$this->pagination->initialize ( $config );
			$data ['pagination'] = $this->pagination->create_links ();
			$this->template->write_view ( 'content', 'product/view', $data, true );
			$this->template->render ();
		}
	}
	public function product_del() {
		if ($this->input->is_ajax_request ()) {
			$id = $this->input->post ( 'id' );
			$no = $this->input->post ( 'no' );
			$page = $this->input->post ( 'page' );
			$return = $this->product_m->delete ( $id );
			if ($return) {
				$config ['base_url'] = base_url () . "product/view?";
				$config ['per_page'] = PERPAGA;
				$data ['count'] = $config ['total_rows'] = $this->product_m->get ( FALSE, TRUE );
				$data ['start'] = 0;
				if ($data ['count'] > PERPAGA)
					$data ['start'] = (($no == ($page - 1) * PERPAGA + 1) && $no == $data ['count'] + 1) ? (($page >= 2) ? (($page - 2) * PERPAGA) : 0) : ($page - 1) * PERPAGA;
				$data ['products'] = $this->product_m->show ( $data ['start'] );
				$this->pagination->initialize ( $config );
				$data ['pagination'] = $this->pagination->create_links ();
				$ajax = $this->load->view ( 'product/product_ajax_index', $data, true );
				echo $ajax;
			}
		}
	}
	public function product_create() {
		if ($this->input->is_ajax_request ()) {
			$post = $this->input->post ();
			$pro = array (
					'ProName' => $post ['proname'],
					'ProPrice' => $post ['price'],
					'ProQuantity' => $post ['quantity'],
					'CateID' => $post ['cat'],
					'ProDesc' => $post ['descr'],
                                        'ProStt' => $post ['stt'],
			);
			$rules = $this->product_m->rules;
			$this->form_validation->set_rules ( $rules );
			if ($this->form_validation->run () == TRUE) {
				$return = $this->product_m->save ( $pro );
                                if($return) {
                                    if (! empty ( $post ['imgs'] ) && is_numeric($return)) {    
                                        $image = array ();
                                        foreach ( $post ['imgs'] as $key => $value ) {
                                            $img = array (
                                            'FileName' => $value,
                                            'ProID' => $return
                                            );
                                            $image [] = $img;
                                        }
                                        
                                        $this->load->model('file_m');
                                        $this->file_m->save ( $image, FALSE, TRUE );
//                                        
					echo json_encode ( array (
							'msg' => 'Thêm sản phẩm thành công' 
					) );
                                        die;
                                    }
                                }
                                else {
                                    echo json_encode ( array (
							'msg' => 'Thêm sản phẩm thất bại' 
					) );
                                        die;
                                }
				
                        }
                        else {
                                        echo json_encode ( array (
                                                        'msg' => 'chưa nhập dữ liệu nhập vào hoặc nhập sai dữ liệu' ,
                                                        'error' => validation_errors_array()
                                        ) );
                                        die;
			}	 
		} else {
			$data = array ();
			$this->template->add_title ( 'Tạo sản phẩm mới' );
			$this->template->write ( 'title', '' );
			$this->template->write ( 'desption', 'Tạo sản phẩm mới' );
			$this->load->helper ( array (
					'url',
					'editor_helper' 
			) );
			$this->load->model ( 'category_m' );
			$this->db->order_by ( 'id' );
			$this->db->where ( 'parent_id <>', 0 );
			$data ['cats'] = $this->category_m->get ();
			$data ['ckediter'] = $this->ckeditor->replace ( "demo", editerGetEnConfig () );
			$this->template->write_view ( 'content', 'product/pro_create', $data, true );
			$this->template->render ();
		}
	}
	public function edit($id) { 
		$data = array ();
		$data['products'] = $this->product_m->get($id);
		//var_dump($data['products']);die;
		//if($id == null || empty($data['products'])) redirect('product/view');
		if ($this->input->is_ajax_request ()) {
			$post = $this->input->post ();
			$pro = array (
					'ProName' => $post ['proname'],
					'ProPrice' => $post ['price'],
					'ProQuantity' => $post ['quantity'],
					'CateID' => $post ['cat'],
					'ProDesc' => $post ['descr'] 
			);
			$rules = $this->product_m->rules;
			$this->form_validation->set_rules ( $rules );
			if ($this->form_validation->run () == TRUE) { 
				$return = $this->product_m->save( $pro, $post['id']);
				if ($return)
					echo json_encode ( array (
							'msg' => 'update successfully' 
					) );
				die ();
			} else {
				echo json_encode ( array (
						'msg' => 'chưa nhập dữ liệu nhập vào hoặc nhập sai dữ liệu' 
				) );
				die ();
			}
		} else {
			$this->template->add_title ( 'Product edit' );
			$this->template->write ( 'title', '' );
			$this->template->write ( 'desption', 'Product edit' );
			$this->load->helper ( array ('url','editor_helper') );
			$this->load->model ( 'category_m' );
			$this->db->order_by ( 'id' );
			$this->db->where ( 'parent_id <>', 0 );
			$data ['cats'] = $this->category_m->get ();
			$data ['ckediter'] = $this->ckeditor->replace ( "demo", editerGetEnConfig () );
			$this->template->write_view ( 'content', 'product/product_edit', $data, true );
			$this->template->render ();
		}
	}
}
