<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model {

    // public $table_name = 'user';

    protected $CI;
	private $q = Null;		// query
	private $rs = Null;		// record set



public function get_list_user()
{
        // $this->db->select('user_firstname, user_lastname');
        // $query = $this->db->get('user');
        // return $query->result();

        $sql = "SELECT * FROM `user`";
		//echo $sql;
		$this->q = $this->db->query($sql);

		$this->rs = $this->q->result();
		$this->c = count($this->rs);
		$this->r = $this->q->row();
        // var_dump($this->rs);
        echo "<pre>";
        print_r($this->rs);
        echo "</pre>";
		return $this->rs;
}



}