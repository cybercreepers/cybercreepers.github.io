<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Problem_model extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	
	public function saveFormData($data){
		$this->db->insert('problems',$data);
	}
	
	public function saveSolutionFormData($data){
		$this->db->insert('solutions',$data);
	}
	
	public function getAllSolutions($id){
		$query = $this->db->query("SELECT S.*,U.name FROM solutions S
						  INNER JOIN users U ON U.user_id = S.created_by
						  where S.problem_id= ".$id);
		return $query->result_array();
	}
	
	public function getProblemsCollegeAdmin(){
		$query = $this->db->query("SELECT P.*,count(S.solution_id) as pending FROM problems P
								   LEFT JOIN solutions S ON P.problem_id = S.problem_id AND S.is_approved=0
								   GROUP BY P.problem_id,S.solution_id");
		return $query->result_array();
	}
	
	public function getProblems(){
		$query = $this->db->query("SELECT P.*,count(S.solution_id) as solutions FROM problems P
								   LEFT JOIN solutions S ON P.problem_id = S.problem_id AND S.is_approved=1
								   GROUP BY P.problem_id");
		return $query->result_array();
	}
	
	public function updateSolution($data){
		$this->db->where('solution_id',$data['solution_id']);
		$this->db->update('solutions',$data);
	}
	
	public function getProblemById($id){
		$this->db->where('problem_id',$id);
		return $this->db->get('problems')->row_array();	
	}
}
