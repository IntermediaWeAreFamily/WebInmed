<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PendaftaranController
 *
 * @author zaenu
 */
class PendaftaranController extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('DataModel');
    }
    
    function index(){
        $jabatan = $this->session->userdata('data')->idJabatan;
        $divisi = $this->session->userdata('data')->idDivisi;
        $data['jabatan'] = $this->DataModel->readWhere('jabatan','*','idJabatan',$jabatan)->row();
        $data['divisi'] = $this->DataModel->readWhere('divisi','*','idDivisi',$divisi)->row();
        $data['pendaftar'] = $this->DataModel->read('pendaftaran','*')->result_array();
        $this->load->view('admin/pendaftaranM',$data);
    }
}
