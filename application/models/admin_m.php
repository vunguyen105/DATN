<?php

class admin_m extends MY_Model {

    public $table_name = 'Admin';
    public $primary_key = 'AdminID';

    public function __construct() {
        parent::__construct();
    }
}

