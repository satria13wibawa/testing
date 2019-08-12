<?php

class Barang_model extends CI_Model
{
    function data($number, $offset)
    {
        return $query = $this->db->get('barang', $number, $offset)->result();
    }

    function jumlah_data()
    {
        return $this->db->get('barang')->num_rows();
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
