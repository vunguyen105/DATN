<?php
class customer_m extends MY_Model {
	public $table_name = 'Customer';
	public $primary_key = 'CusID';
	// protected $_order_by = 'user_id';
	public $rules = array (
			'name' => array (
					'field' => 'proname',
					'label' => 'Tên sản phẩm',
					'rules' => 'trim|required|xss_clean' 
			),
			'price' => array (
					'field' => 'price',
					'label' => 'Giá',
					'rules' => 'trim|required|xss_clean|integer' 
			),
			'quantity' => array (
					'field' => 'quantity',
					'label' => 'quantity',
					'rules' => 'trim|required|integer|xss_clean' 
			),
			'cat' => array (
					'field' => 'cat',
					'label' => 'cat',
					'rules' => 'trim|required|integer|xss_clean' 
			),
			'descr' => array (
					'field' => 'descr',
					'label' => 'descr',
					'rules' => 'required' 
			) 
	);
	public function __construct() {
		parent::__construct ();
	}
}
?>
