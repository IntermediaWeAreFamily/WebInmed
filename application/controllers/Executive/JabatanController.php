<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JabatanController
 *
 * @author zaenu
 */
class JabatanController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('DataModel');
        $this->load->library('form_validation');
    }

    function index() {
        $jabatan = $this->session->userdata('data')->idJabatan;
        $divisi = $this->session->userdata('data')->idDivisi;
        $data['jabatan'] = $this->DataModel->readWhere('jabatan', '*', 'idJabatan', $jabatan)->row();
        $data['divisi'] = $this->DataModel->readWhere('divisi', '*', 'idDivisi', $divisi)->row();
        $data['jabatan1'] = $this->DataModel->read('jabatan', '*')->result_array();
        $this->load->view('admin/jabatanM', $data);
    }

    function input() {
        $this->form_validation->set_rules('nama','Nama Jabatan','required');
        $nama = $this->input->post('nama');
        $ket = $this->input->post('ket');
        $data = array(
            'nama_jabatan' => $nama,
            'keterangan' => $ket
        );
        $input = $this->DataModel->create('jabatan', $data);
        if ($input == FALSE) {
            echo "error cuk";
        } else {
            redirect('executive/jabatan');
        }
    }

    function edit($id) {
        $data['jabatan'] = $this->DataModel->readWhere('jabatan', '*', 'idJabatan', $id)->row();
        $this->load->view('admin/jabatanE', $data);
    }

    function prosesEdit($id) {
        $this->form_validation->set_rules('nama','Nama Jabatan','required');
        $nama = $this->input->post('nama');
        $ket = $this->input->post('ket');
        $data = array(
            'nama_jabatan' => $nama,
            'keterangan' => $ket
        );
        $input = $this->DataModel->update('jabatan', 'idJabatan', $id, $data);
        if ($input == FALSE) {
            echo "error cuk";
        } else {
            redirect('executive/jabatan');
        }
    }

    function hapus($id) {
        $hapus = $this->DataModel->delete('jabatan', 'idJabatan', $id);
        if ($hapus == FALSE) {
            echo "error baen cuk fck";
        } else {
            redirect('executive/jabatan');
        }
    }

}
