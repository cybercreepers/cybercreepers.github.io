<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Problems extends MX_Controller {

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
	 
	 function __construct(){
		parent::__construct();
		if($this->session->userdata('is_logged')!=1){
			redirect('welcome');
		}
		$this->load->model('Problem_model','ProblemModel');
		$this->load->library('form_validation');
		
	}
	
	public function index()
	{
		if($this->session->userdata('user_role_id')==2){
			$data['problems'] = $this->load->ProblemModel->getProblemsCollegeAdmin();
		}else{
			$data['problems'] = $this->load->ProblemModel->getProblems();
		}
		//echo '<pre>';print_r($data);exit;
		$this->load->view('problem_view',$data);
	}
	
	public function new_problem(){
		
		$this->form_validation->set_rules('problem','problem','required');
		
		if($this->form_validation->run() === false)
		{
			$this->load->view('add_problem_view');
		}else{
				$config['upload_path']   = './assets/files/';
				$config['file_name']     = strtotime("now");
				$config['allowed_types'] = '*';
                $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile'))
            {
				$data['imageError'] =  $this->upload->display_errors();
			}
			
			$input_data = array(
						'department'=> $this->input->post('department'),
						'problem'=> $this->input->post('problem'),
						'problem_details'=> $this->input->post('problem_details'),
						'file' => $this->upload->data('file_name'),
						'created_by' => $this->session->userdata('user_id')
						);
						
			$this->ProblemModel->saveFormData($input_data);	
			redirect('problems');
		}
	}
	
	public function new_solution($id=''){
		$this->form_validation->set_rules('solution','solution','required');
		
		if($this->form_validation->run() === false)
		{
			$data['problem_id'] = $id;
			 $data['problem']  = $this->ProblemModel->getProblemById($id);
			$this->load->view('add_solution_view',$data);
		}else{
			
				$config['upload_path']   = './assets/files/';
				$config['file_name']     = strtotime("now");
				$config['allowed_types'] = '*';
                $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile'))
            {
				$data['imageError'] =  $this->upload->display_errors();
			}
			
			$input_data = array(
						'problem_id'=>$this->input->post('problem_id'),
						'solution'=> $this->input->post('solution'),
						'file' => $this->upload->data('file_name'),
						'created_by' => $this->session->userdata('user_id')
						);
						
			$this->ProblemModel->saveSolutionFormData($input_data);	
			redirect('problems');
		}
	}
	
	public function all_solutions($id=''){
		   $data['problem']  = $this->ProblemModel->getProblemById($id);
			$data['all_solutions'] = $this->ProblemModel->getAllSolutions($id);
			$this->load->view('all_solutions',$data);
	}
	
	function approve_solution(){
		
		if($this->input->post()){
			$total = count($this->input->post('problem_id'));
			$total_approve = count($this->input->post('approve'));
			
			for($i=0;$i<$total;$i++){
				$data['solution_id'] = $_POST['solution_id'][$i];
				for($j=0;$j<$total_approve;$j++){ 
				
					if($_POST['approve'][$j]==$data['solution_id']){
						$data['is_approved'] = 1;
						$this->ProblemModel->updateSolution($data);
					}
				}
				
			}
		}
		redirect('problems');
	}
	
	function solution_feedback(){
		if($this->input->post()){
			$total = count($this->input->post('problem_id'));
			for($i=0;$i<$total;$i++){
				$data['solution_id'] = $_POST['solution_id'][$i];
				$data['feedback'] = $_POST['feedback'][$i];
				$this->ProblemModel->updateSolution($data);
			}
		}
		redirect('problems');
	}
	
}
