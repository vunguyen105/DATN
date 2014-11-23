<?php
    class news_m extends MY_Model{
        public $table_name='New';
        public $primary_key = 'NewID';
        public function __construct(){
            parent::__construct();
        }
        
        public $rules = array (
			'name' => array (
					'field' => 'NewTitle',
					'label' => 'Tiêu đề',
					'rules' => 'trim|required|xss_clean' 
			),
			'price' => array (
					'field' => 'NewContent',
					'label' => 'Nội dung',
					'rules' => 'trim|required|xss_clean' 
			)
	);
    }
?>
