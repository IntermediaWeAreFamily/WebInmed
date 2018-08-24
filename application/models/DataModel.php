<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DataModel
 *
 * @author zaenu
 */
class DataModel extends CI_Model{
     function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function create($table,$data){
        $query = $this->db->insert($table,$data);
        return $query;
    }
    
    function update($table,$where,$kondisi,$data){
        $this->db->where($where,$kondisi);
        $query = $this->db->update($table,$data);
        return $query;
    }
    
    function delete($table,$where,$kondisi){
        $this->db->where($where,$kondisi);
        $query = $this->db->delete($table);
        return $query;
    }
    
    function read($table,$col){
        $this->db->select($col);
        $query = $this->db->get($table);
        return $query;
    }
    
    function readWhere($table,$col,$where,$kondisi){
        $this->db->select($col);
        $this->db->where($where,$kondisi);
        $query = $this->db->get($table);
        return $query;
    }
    
    function CekLogin($table,$where){
        return $this->db->get_where($table,$where);
    }

    function innerJoin($col,$table1,$table2,$where){
        $query = $this->db->select($col);
        $query = $this->db->from($table1);
        $query = $this->db->join($table2,$where,'inner');
        $query = $this->db->get();
        return $query;
    }

    function innerJoinWhere($col,$table1,$table2,$table3,$join,$join2,$col2,$where){
        $query = $this->db->select($col);
        $query = $this->db->from($table1);
        $query = $this->db->join($table2,$join);
        $qeury = $this->db->join($table3,$join2,'inner');
        $query = $this->db->where($col2,$where);
        $query = $this->db->get();
        return $query;
    }
}
