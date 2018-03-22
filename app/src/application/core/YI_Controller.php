<?php

/**
 * Description of Yi_Controller
 *
 * @author Yjk
 */
class YI_Controller extends CI_Controller {

    protected $vdata = array();

    function __construct() {
        parent::__construct();
    }

    /**
     * 统一获取参数方法
     * @return type
     */
    public function getParams() {
        $getParams = $this->input->get(null, true);
        $postParams = $this->input->post(null, true);

        $params = array_merge($getParams, $postParams);
        return $params;
    }

    /**
     * 方法转发
     */
    public function option() {
        $action = $this->input->post('action', true);
        if (empty($action)) {
            $action = $this->input->get('action', true);
        }
        $arrParams = $this->input->post(null, true);

        $action = trim($action);
        if (!empty($action) && method_exists($this, $action)) {
            $this->$action($arrParams);
        }
    }
}
