<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mr_company extends CI_Model {

	public $uid;
    public $name;
    public $address;
	public $person;
	public $designation;
    public $email;
	public $phone;
	public $comment;
	public $entry;
	
    public function __construct(){
        parent::__construct();
    }
	
	public function INFO(){
        $query = $this->db->get('company');
        return $query->result();
    }
	
	public function ADD($data){
		$this->uid   		= $this->get_id();
		$this->name    		= $data['name'];
		$this->address   	= $data['address'];
		$this->person  		= $data['person'];
		$this->designation  = $data['designation'];
		$this->email  		= $data['email'];
		$this->phone  		= $data['phone'];
		$this->comment  	= $data['comment'];
        $this->entry    	= time();

        $this->db->insert('company', $this);
		return $this->uid;
    }
	
	public function EDIT($data){
        $this->uid   		= $data['uid'];
		$this->name    		= $data['name'];
		$this->address   	= $data['address'];
		$this->person  		= $data['person'];
		$this->designation  = $data['designation'];
		$this->email  		= $data['email'];
		$this->phone  		= $data['phone'];
		$this->comment  	= $data['comment'];
        $this->entry    	= time();
		$this->db->where('uid', $this->uid);
		$this->db->update('company', $this);
		return $this->uid;
    }
	
	public function TRASH($data){
        $this->uid   	= $data['uid'];
		$this->db->where('uid', $this->uid);
		$this->db->delete('company');
    }
	
	public function get_id(){
		$this->db->where('name', 'id');
        $querys = $this->db->get('data');
		if(empty($querys->result())){
			$id = 1;
			$data = array( 'name' => 'id', 'value' => $id );
			$this->db->insert('data', $data);
		}else{
			foreach($querys->result() as $query){
				$id = ( $query->value + 1 );
			}
			$data = array( 'name' => 'id', 'value' => $id );
			$this->db->where('name', 'id');
			$this->db->update('data', $data);
		}
		return $id;
    }
	
}