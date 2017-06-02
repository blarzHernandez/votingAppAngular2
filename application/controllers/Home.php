<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	 //Construct
	 public function __construct(){
		 parent::__construct();
		 $this->load->model("user");//User model
		 $this->load->model("candidate");//Candidate model
		 $this->load->model("commitee");//Commitee model
		 $this->load->model("vote");//Vote model
	 }

	public function index()
	{
		$this->load->view('index');

	}


	public function login(){
			$user       = $this->input->get('username');
     		$pass       =md5($this->input->get('password'));

			 //debugging
			//  $user       = "blarz";
     		//  $pass       = "rhernandez";

			$isValid 	= $this->user->login($user,$pass);
		
			if($isValid){
				$data["dinamic"] = "voting_main";
				$this->session->set_userdata("user",$user);
				$this->session->set_userdata("userName",$this->user->getUserName($user));
				$userCountry= $this->user->getCountry($user);
				$data['candidatesArr']= $this->candidate->getAllCandidatePerCountry($userCountry);
				$userCountry= $this->user->getCountry($user);
			
				$data['commitees']= $this->commitee->getAllCommitee($userCountry);
					var_dump($this->user->getCountry($user));
					//redirect
					$this->load->view("templates/main",$data);
			}else{
				redirect("index.php?/home");
			}


	}

	//Load user registration form
        public function loadUserRegistration()
        {
            
           
            $arr['modalTitle']="Users Registration";//Title modal            
            $this->load->view('registration',$arr);//Layout
            
        }


		public function userRegister(){
			//Get data
			$username=$this->input->post('username');
                        $names=$this->input->post('names');
						$surnames=$this->input->post('surnames');
						$country=$this->input->post('country');
                        $password=  md5($this->input->post('password'));
                        $email=  $this->input->post("email");
                        
						$data=array("username"=>$username,"names"=>$names,"surnames"=>$surnames,"password"=>$password,"email"=>$email,"country"=>$country);
						if($this->user->insert($data)){
								echo json_encode(array("response"=>"success","respuesta"=>"Data registered successfully!"));
						}else
						{
							echo json_encode(array("response"=>"error","respuesta"=>"Error Encountered!"));
						}
		}

		//vote
		public function vote(){
		$id_candidate = $this->input->get('id_candidate');
		//$commitee = $this->input->get('commitee');
		$user = $this->session->userdata('user');

		$data = array('id_candidate'=>$id_candidate,"commitee"=>$commitee,"user"=>$user);
		if($this->vote->vote($data)){
								echo json_encode(array("response"=>"success","respuesta"=>"Data registered successfully!"));
						}else
						{
							echo json_encode(array("response"=>"error","respuesta"=>"Error Encountered!"));
						}

		}
		//Destroy session of user
		public function destroySession(){
				$this->session->sess_destroy();
				redirect('index.php?/home/');
			}
		}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
