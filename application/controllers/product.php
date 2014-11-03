<?php
class product extends Backend_Controller {
	function __construct() {
		parent::__construct ();
		$this->load->model ( 'product_m' );
		$this->load->library ( 'pagination' );
	}
	public function view() {
		$this->template->add_title ( 'Thống kê Sản phẩm' );
		$this->template->write ( 'title', 'Thống kê Sản phẩm' );
		$this->template->write ( 'desption', 'Thống kê Sản phẩm' );
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
					// var_dump($no,$data ['start']);die;
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
			// var_dump($_POST);die;
			$post = $this->input->post ();
			$pro = array (
					'pro_name' => $post ['title'],
					'price' => $post ['price'],
					'discounts' => $post ['discounts'],
					'baohanh' => $post ['baohanh'],
					'description' => $post ['descr'],
					'technique' => $post ['technique'],
					'cat_id' => $post ['cat'],
					'qty' => $post ['qty'] 
			);
			$this->load->model ( 'product_m' );
			$this->db->select_max ( 'proid' );
			$id_max = $this->product_m->get ();
			// var_dump($id_max);die;
			if (! empty ( $post ['imgs'] )) {
				$image = array ();
				foreach ( $post ['imgs'] as $key => $value ) {
					$img = array (
							'file_name' => $value,
							'id_pro' => ( int ) $id_max [0] ['id'] 
					);
					$image [] = $img;
				}
				$this->load->model ( 'files_m' );
				$this->files_m->save ( $image, FALSE, TRUE );
			}
			$this->product_m->save ( $pro );
		} else {
			$data = array ();
			$this->template->add_title ( 'Quản lý sản phẩm' );
			$this->template->write ( 'title', 'Quản lý sản phẩm' );
			$this->template->write ( 'desption', 'Quản lý sản phẩm' );
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
}
