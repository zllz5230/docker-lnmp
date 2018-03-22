<?php

class Test extends YI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Model_user');
    }

    public function index() {
        $list = $this->Model_user->getList(false);
        echo json_encode($list);
    }

}
