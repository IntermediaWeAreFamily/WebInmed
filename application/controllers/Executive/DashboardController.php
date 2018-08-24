<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DashboardController
 *
 * @author zaenu
 */
class DashboardController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('DataModel');
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('Executive/login'));
        }
    }

    function index() {
        $jabatan = $this->session->userdata('data')->idJabatan;
        $divisi = $this->session->userdata('data')->idDivisi;
        $data['jabatan'] = $this->DataModel->readWhere('jabatan','*','idJabatan',$jabatan)->row();
        $data['divisi'] = $this->DataModel->readWhere('divisi','*','idDivisi',$divisi)->row();
        //var_dump($data);
        $this->load->view('admin/homePage',$data);
    }

}
