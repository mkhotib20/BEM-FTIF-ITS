<?php 

class data extends CI_Model{
	//crud basic
	function read($table){
		return $this->db->get($table);
	}
	
	function insert($table, $data){
		return $this->db->insert($table, $data);
	}

	//crud advance
	function readWH($table, $where, $id, $limit='', $order='timestamp', $order_type='DESC'){
		$this->db->order_by($order, $order_type);
		return $this->db->get_where($table, array($where => $id), $limit);
	}
	function updateView($table, $data, $where){
		return $this->db->update($table, $data, $where);
	}
	//hashing
	function rahasia($password){
		$key = $this->config->item('encryption_key');
	    $salt1 = hash('sha512', $key . $password);
	    $salt2 = hash('sha512', $password . $key);
	    return hash('sha512', $salt1 . $password . $salt2);
	}

}

 ?>