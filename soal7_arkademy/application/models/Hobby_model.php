<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Hobby_model extends CI_Model
{

    function __construct()
    {
        parent::__construct(); // construct the Model class
        $this->load->database();
    }

    private $_table_hobby = "hobby";
    private $_table_nama = "nama";
    private $_table_category = "category";

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Nama',
            'rules' => 'required|xss_clean'],

            ['field' => 'hobby',
            'label' => 'Hobby',
            'rules' => 'required|xss_clean'],

            ['field' => 'category',
            'label' => 'Category',
            'rules' => 'required|xss_clean'],
        ];
    }

    public function getAll()
    {
        $this->db->select($this->_table_nama.'.id, '.$this->_table_nama.'.name, '.$this->_table_hobby.'.id as id_hobby, '.$this->_table_hobby.'.name as hobby, '.$this->_table_category.'.id as id_category, '.$this->_table_category.'.category');
        $this->db->from($this->_table_nama);
        $this->db->join($this->_table_hobby, $this->_table_nama.".id_hobby = ".$this->_table_hobby.".id");
        $this->db->join($this->_table_category, $this->_table_nama.".id_category = ".$this->_table_category.".id");
        $query =$this->db->get()->result();

        return $query;
    }

    public function getHobby()
    {
        $this->db->from($this->_table_hobby);
        $query =$this->db->get()->result();

        return $query;
    }

    public function getCategory()
    {
        $this->db->from($this->_table_category);
        $query =$this->db->get()->result();

        return $query;
    }

    public function save($post)
    {
        $this->name         = $post["name"];
        $this->id_category  = $post["category"];
        $this->id_hobby     = $post["hobby"];

        $id = $this->db->insert($this->_table_nama, $this);
        if($this->db->affected_rows() >=0){
            return $id;    //add your code here
        }else{
            return false;   //add your your code here
        }
    }

    public function update($post)
    {
        if(isset($post["name"]) && ($post["name"] != null && $post["name"] != "")){
            $this->name = $post["name"];
        }

        if(isset($post["category"]) && ($post["category"] != null && $post["category"] != "")){
            $this->id_category = $post["category"];
        }

        if(isset($post["hobby"]) && ($post["hobby"] != null && $post["hobby"] != "")){
            $this->id_hobby = $post["hobby"];
        }

        $this->db->update($this->_table_nama, $this, array('id' => $post['id']));
        if($this->db->affected_rows() >=0){
            return true;    //add your code here
        }else{
            return false;   //add your your code here
        }
    }

    public function delete($post)
    {
        $this->db->where(array('id' => $post['id']));
        $delete = $this->db->delete($this->_table_nama);
        
        return $delete;
    }

}