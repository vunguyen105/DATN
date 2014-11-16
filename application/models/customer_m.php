<?php
class customer_m extends MY_Model {
	public $table_name = 'Customer';
	public $primary_key = 'CusID';
	public $rules = array (
			'CusUser' => array (
					'field' => 'CusUser',
					'label' => 'Tài khoản',
					'rules' => 'trim|required|xss_clean|is_unique[Customer.CusUser]' 
			),
			'CusEmail' => array (
					'field' => 'CusEmail',
					'label' => 'Email',
					'rules' => 'trim|required|valid_email|is_unique[Customer.CusEmail]' 
			),
			'CusName' => array (
					'field' => 'CusName',
					'label' => 'Họ Tên',
					'rules' => 'trim|required|xss_clean' 
			),
			'CusPhone' => array (
					'field' => 'CusPhone',
					'label' => 'Số điện thoại',
					'rules' => 'trim|required|integer|xss_clean|integer' 
			),
			'CusAdd' => array (
					'field' => 'CusAdd',
					'label' => 'Địa chỉ',
					'rules' => 'trim|required' 
			),
                        'CusPass' => array (
					'field' => 'CusPass',
					'label' => 'Mật khẩu',
					'rules' => 'trim|required|' 
			),
                        'CusPassC' => array (
					'field' => 'CusPassC',
					'label' => 'Mật khẩu confirm',
					'rules' => 'trim|required|matches[CusPass]' 
			) 
                        
	);
	public function __construct() {
		parent::__construct ();
	}
}
?>
