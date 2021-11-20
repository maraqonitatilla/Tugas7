<?php
defined('BASEPATH') OR exist('No direct script access allowed');

class M_mhs extends CI_Model{
    public function getDataMhs(){
        $this->db->select('*');
        $this->db->from('tbl_mhs');
        $query = $this->db->get();
        return $query->result();
    }

    public function InsertDataMhs($data){
        $this->db->insert('tbl_mhs', $data);
    }

    public function edit_data($where, $table){
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

}