<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author 		Andryan@gmail.com
*/
class grup_model extends CI_Model {
    private $table = "alus_u";
    private $table2 = "m_grup";
    private $mg_id;
    private $nama_g;
    private $deskripsi;

    public function save()
    {
        $data = array
        (
        		'mg_nama' => $this->input->post('group_nama'),
         		'mg_deskripsi' => $this->input->post('des_group')
     	);
        $this->db->insert($this->table2,$data);
    }

    public function delete($id)
    {
        $this->db->where("mg_id",$id);
        return $this->db->delete($this->table2);
    }

    public function getAll()
    {
        return $this->db->get('m_grup')->result();
    }
    public function getAllkelas()
    {
        return $this->db->get('m_kelas')->result();
    }
    public function getanggota($mg_id)
    {
    	 return $this->db->query("SELECT * from m_kelas INNER JOIN t_grup ON m_kelas.mk_id=t_grup.kelas_id where group_id=$mg_id ")->result();
    }
    public function insert_grup()
    {
        $id = $_POST['check'];
        $kode = $_POST['kode_grup'];
        $data = array();
        $index=0;
        foreach($id as $dataid)
        {
            array_push($data,array(
                'kelas_id'=>$dataid ,
                'group_id'=>$kode,
            ));
            $index++;
        }   
        $this->db->insert_batch('t_grup',$data);
    }       
}