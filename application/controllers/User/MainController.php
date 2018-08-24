<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MainController
 *
 * @author zaenu
 */
class MainController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('DataModel');
    }

    function index() {
        $data['tentang'] = $this->DataModel->read('tentang','*')->row();
        $data['berita'] = $this->DataModel->read('berita','*')->result_array();
        $data['pemrograman'] = $this->DataModel->readWhere('divisi','keterangan','nama_divisi','pemrograman')->row();
        $data['multimedia'] = $this->DataModel->readWhere('divisi','keterangan','nama_divisi','multimedia')->row();
        $data['jaringan'] = $this->DataModel->readWhere('divisi','keterangan','nama_divisi','jaringan')->row();
        //var_dump($data);
        $this->load->view('user/index',$data);
    }

    function event() {
        $data['acara'] = $this->DataModel->read('event','*')->result_array();
        $this->load->view('user/event',$data);
    }

    function news() {
        $data['berita'] = $this->DataModel->read('berita','*')->result_array();
        $this->load->view('user/news',$data);
    }

    function join() {
        $this->load->view('user/joinfalse');
    }
    
    function daftar(){
        $this->load->view('user/Form_Join');
    }

    function about() {
        $this->load->view('user/About');
    }

    function achievement() {
        $data['pencapaian'] = $this->DataModel->read('achievement','*')->result_array();
        $this->load->view('user/Achievement',$data);
    }

    function team() {
        $this->load->view('user/Team');
    }

}
