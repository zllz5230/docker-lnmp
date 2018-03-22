<?php

class Model_user extends YI_Model {

    protected $_table = 'user';
    protected $_primaryKey = 'id';

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', true);
        $this->setDb($this->db);
    }

}
