<?php

class  product_m extends MY_Model{
    public $table_name = 'product';
    public $primary_key = 'proid';
    //protected $_order_by = 'user_id';

    public $rules = array(
		'name' => array(
			'field' => 'pro_name',
			'label' => 'Tên sản phẩm',
			'rules' => 'trim|required|xss_clean'
		),
		'price' => array(
			'field' => 'price',
			'label' => 'Giá',
			'rules' => 'trim|required|xss_clean'
		)
	);
     public $rules_create = array(
		'user' => array(
			'field' => 'user',
			'label' => 'Tài khoản',
			'rules' => 'trim|required'
		),
		'lastname' => array(
			'field' => 'lastname',
			'label' => 'Tên',
			'rules' => 'trim|required'
		),
                'email' => array(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'trim|required|valid_email'
		),
                'password' => array(
			'field' => 'password',
			'label' => 'Mật khẩu',
			'rules' => 'trim|required|min_length[4]|max_length[32]'
		),
                'cpassword' => array(
			'field' => 'cpassword',
			'label' => 'Nhập lại Mật khẩu',
			'rules' => 'trim|required|matches[password]'
		),
	);

    public function __construct() {
        parent::__construct();
    }
    
    public function show($start = 0){
    	$this->set_start($start);
    	$this->db->select('ProID, CateID, ProName, ProPrice, ProStt, ProQuantity,  ProDesc, ProStt2, Categories.name as CateName');
    	$this->db->join('Categories', 'Product.CateID = Categories.id', 'left');
    	return $this->get ();
    }
}
?>
