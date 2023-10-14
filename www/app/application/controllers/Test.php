<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Base.php';

class Test extends REST_Base {

    public function __construct() {
        parent::__construct();
    }
    
    public function index_get()
    {
        $data = [ 
            "uno" => 'number one',
            "two" => 'number two',
            "thrre" => 'number therr',
            "TEST" => 'Ricardo N,Luis Mateos'
        ];

        $this->respose($data);
    }
}