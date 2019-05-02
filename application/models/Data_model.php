<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function simpanData($data, $tabel) {
        $this->db->insert($tabel, $data);
    }

    public function updateData($id, $data, $tabel, $field = 'tid') {
        $this->db->where($field, $id);
        $this->db->update($tabel, $data);
    }

    public function updateDataWhere($data, $tabel, $where) {
        $this->db->where($where);
        $this->db->update($tabel, $data);
    }
    
    public function updateDataWhereSablengTehHeuse($field, $data, $tabel, $where) {
        $this->db->where($where);
        $this->db->set($field, $data);
        $this->db->update($tabel, $data);
    }

    public function hapusData($id, $tabel, $field = 'tid') {
        $this->db->where($field, $id);
        $this->db->delete($tabel);
    }

    public function hapusDataWhere($tabel, $where) {
        $this->db->where($where);
        $this->db->delete($tabel);
    }

    public function ambilData($id, $tabel, $field = 'tid') {
        $this->db->from($tabel);
        if ($field <> 'tid') {
            $this->db->where($field, $id);
        }
        $getData = $this->db->get();

        if ($getData->num_rows() > 0) {
            return $getData->row();
        } else {
            return false;
        }
    }

    public function ambilDataWhere($tabel, $where, $orderby, $ascdesc, $grp = '', $select = '') {
        if ($select <> '') {
            $this->db->select($select);
        }
        $this->db->from($tabel);
        $this->db->where($where);
        if ($grp <> '') {
            $this->db->group_by($grp);
        }
        $this->db->order_by($orderby, $ascdesc);
        $getData = $this->db->get();
        if ($getData->num_rows() > 0) {
            return $getData->result();
        } else {
            return false;
        }
    }

    public function satuData($tabel, $where) {
        $this->db->from($tabel);
        $this->db->where($where);
        $getData = $this->db->get();

        if ($getData->num_rows() > 0) {
            return $getData->row();
        } else {
            return false;
        }
    }

    public function cekData($tabel, $where = "") {
        $this->db->from($tabel);
        if ($where <> "") {
            $this->db->where($where);
        }
        $getData = $this->db->get();
        return $getData->num_rows();
    }

    public function selectData($tabel, $orderby, $where = "", $ascdesc = 'asc') {
        $this->db->from($tabel)->order_by($orderby, $ascdesc);
        if ($where <> "") {
            $this->db->where($where);
        }
        $getData = $this->db->get();
        if ($getData->num_rows() > 0) {
            return $getData->result();
        } else {
            return false;
        }
    }

    public function getLastIdDb($tabel, $key, $where = '') {
        $querynya = "SELECT * FROM " . $tabel . $where . " ORDER BY " . $key . " DESC LIMIT 1";
        $query_result = $this->db->query($querynya);
        $data_last = $query_result->result_array();
        return ($data_last) ? $data_last[0] : false;
    }

    public function getLastChild($tabel, $key, $field) {
        $querynya = "SELECT $field FROM $tabel WHERE parent=$key ORDER BY $field DESC LIMIT 1";
        $query_result = $this->db->query($querynya);
        $data_last = $query_result->row();
        return ($data_last) ? $data_last->$field : 0;
    }

    public function jalankanQuery($query, $return = '') {
        $res = $this->db->query($query);
        if ($return == 1) {
            $result = $res->row();
        } elseif ($return == 2) {
            $pre = $res->row();
            $result = ($pre) ? $pre->a : 0;
        } elseif ($return == 3) {
            $result = $res->result();
        } elseif ($return == 4) {
            $result = $res->num_rows();
        } else {
            $result = $res;
        }
        return $result;
    }

    public function verify_user($condition, $tabel) {
        $q = $this
                ->db
                ->where($condition)
                ->limit(1)
                ->get($tabel);

        if ($q->num_rows() > 0) {
            return $q->row();
        } else {
            return false;
        }
    }

    public function perPage() {
        return 5;
    }

    public function getTotalData($tabel, $where) {
        $this->db->from($tabel);
        $this->db->where($where);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function getList($limit, $offset, $where, $kolom, $order, $tabel) {
        $this->db->limit($limit, $offset);
        $this->db->from($tabel);
//        $this->db->select("id, title, alias, title_alias, introtext, `fulltext`, state, sectionid, mask, catid, created, created_by, images, urls, parentid, ordering,publish_up");
        $this->db->where($where);
        $this->db->order_by($kolom, $order);
        $q = $this->db->get();
        return $q->result();
    }

    public function getProsedur($query) {
        $qry_res = $this->db->query($query);
        $res = $qry_res->result_array();
        $qry_res->next_result();
        $qry_res->free_result();

        if (count($res) > 0) {
            return $res;
        } else {
            return 0;
        }
    }

    public function get_search($tabel, $cari, $start_idx = 0, $limit = 5, $fungsi = '') {

        $sql = "SELECT * FROM $tabel WHERE nip_baru LIKE '%$cari%' OR nama LIKE '%$cari%' OR jabatan_baru LIKE '%$cari%'  OR nosk LIKE '%$cari%'  OR unit_kerja LIKE '%$cari%' OR golru LIKE '%$cari%' OR tingkat LIKE '%$cari%' ";

        $sql2 = ($fungsi == '') ? (($start_idx == 0) ? $sql . ' limit ' . $limit : $sql . ' limit ' . $limit . ',' . $start_idx) : $sql;
        $query = $this->db->query($sql2);

        if ($fungsi == '') {
            return ($query->num_rows() > 0) ? $query->result() : FALSE;
        } else {
            return $query->num_rows();
        }
    }

    //    ------------------------------------------------------------------------------------------
    
    function get_staff($limit, $start){
        $query = $this->db->get('tbl_content', $limit, $start);
        return $query;
    }

    public function get_staff1($form_name,$limit, $start) {
        $data = $this->db->query('SELECT * FROM tbl_content WHERE form_name = "'.$form_name.'" ORDER by id DESC LIMIT '.$limit.' '.$start);
        return $data->result_array();
    }
    
    public function count_all($form_name) {
        $data = $this->db->query('SELECT COUNT(*) AS numrows FROM tbl_content where form_name = "'.$form_name.'"');
        return $data->result_array();
    }
}

?>