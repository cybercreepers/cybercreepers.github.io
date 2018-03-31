<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model {
	
	public function getData(){
		$query = $this->db->query("SELECT P.*,S.*,U.name,S.created_at as shared_date FROM problems P
								   INNER JOIN solutions S ON P.problem_id = S.problem_id AND S.is_approved=1
								   INNER JOIN users U ON U.user_id = S.created_by 
								   GROUP BY P.problem_id");
		return $query->result_array();
	}
}
