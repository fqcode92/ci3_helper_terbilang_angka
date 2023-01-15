<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Terbilang_angka extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('terbilang_angka');
    }

    public function index()
    {
        $nominal = '11';
        $terbilang = terbilang($nominal);

        echo ucfirst(trim($terbilang));
    }
}

/* End of file Terbilang_angka.php */
