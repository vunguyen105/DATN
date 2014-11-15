<?php
class customer_m extends MY_Model {
	public $table_name = 'Customer';
	public $primary_key = 'CusID';
	public $rules = array (
			'CusUser' => array (
					'field' => 'CusUser',
					'label' => 'Tài khoản',
					'rules' => 'trim|required|xss_clean' 
			),
			'CusEmail' => array (
					'field' => 'CusEmail',
					'label' => 'Email',
					'rules' => 'trim|required|email|integer' 
			),
			'CusName' => array (
					'field' => 'CusName',
					'label' => 'Họ Tên',
					'rules' => 'trim|required|xss_clean' 
			),
			'CusPhone' => array (
					'field' => 'CusPhone',
					'label' => 'Số điện thoại',
					'rules' => 'trim|required|integer|xss_clean' 
			),
			'CusAdd' => array (
					'field' => 'CusAdd',
					'label' => 'Địa chỉ',
					'rules' => 'required' 
			) 
	);
	public function __construct() {
		parent::__construct ();
	}
}
?>
