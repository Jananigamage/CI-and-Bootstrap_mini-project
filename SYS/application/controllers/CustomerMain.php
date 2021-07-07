<?php
	Class CustomerMain extends CI_Controller{

		public function _construct(){

			parent::_construct();
			$this->load->database();
			$this->load->model('CustomerModel');

		}

		public function index(){
			$this->load->view("Customerheader.php");
			$this->load->view("Home.php");
			$this->load->view("Customerfooter.php");


		}

		public function register(){
			$this->load->view("Defaultheader.php");
			$this->load->view("CustomerRegister.php");
			$this->load->view("Customerfooter.php");
			$this->session->unset_userdata('userError');
		}

		public function login(){
			$this->load->view("Defaultheader.php");
			$this->load->view("CustomerLogin.php");
			$this->load->view("Customerfooter.php");
			$this->session->unset_userdata('userError');
		}

		
		public function loadcustomer(){
			$this->load->view("Customerheader.php");
			$this->load->view("CustomerPage.php");
			$this->load->view("Customerfooter.php");
			$this->session->unset_userdata('userError');
		}

		
		public function updateprofile(){
			$this->load->view("Customerheader.php");
			$this->load->view("CustomerUpdateData.php");
			$this->load->view("Customerfooter.php");
			$this->session->unset_userdata('userError');
		}


		public function registerValidation(){
			$this->form_validation->set_rules('fName','First Name','required');
			$this->form_validation->set_rules('lName','Last Name','required');
			$this->form_validation->set_rules('custTelephone','telephone','required');
			$this->form_validation->set_rules('custNIC','NIC','required');
			$this->form_validation->set_rules('pwd','Password','required');
			$this->form_validation->set_rules('custPassword','Confirm Password','required');

			if($this->form_validation->run()){

				$fName=$this->input->post('fName');
				$lName=$this->input->post('lName');

				$custName=$fName." ".$lName;

				$custTelephone=$this->input->post('custTelephone');
				$custNIC=$this->input->post('custNIC');

				$custEmail=$this->input->post('custEmail');
				$custPassword=md5($this->input->post('custPassword'));

				$this->load->model('CustomerModel');

				
				if($this->CustomerModel->checkExistUser($custNIC)){
					$this->CustomerModel->insertData($custName,$custNIC,$custTelephone,$custEmail,$custPassword);
					$session_data=array(
						'custName'=>$custName,
						'custTelephone'=>$custTelephone,
						'custEmail'=>$custEmail,
						'custNIC'=>$custNIC,
					);


					$this->session->set_userdata($session_data);
					$this->loadcustomer();
				
				}else{
					$error="User already exists on given NIC";
					$session_data=array(
						'custName'=>'',
						'custTelephone'=>'',
						'custEmail'=>'',
						'custNIC'=>'',
						'userError'=>$error
					);
					$this->session->set_userdata($session_data);
					echo "User Already exists on given NIC";
					$this->register();
				}

			}else{
				$error="Please fill the form correctly";
				$this->session->set_userdata('userError','Please fill the form correctly');
				echo 'error';
				$this->register();
			}
		}

		public function loginvalidate(){

			$this->form_validation->set_rules('custNIC','NIC','required');
			$this->form_validation->set_rules('custPassword','Password','required');

			if($this->form_validation->run()){

				$custNIC=$this->input->post('custNIC');
				$custPassword=md5($this->input->post('custPassword'));

				$this->load->model('CustomerModel');
				
				if($this->CustomerModel->checkData($custNIC,$custPassword)){
					
					$result=$this->CustomerModel->retrieveData($custNIC,$custPassword);
					
					foreach($result as $row){
						$data1=$row['custName'];
						$data3=$row['custEmail'];
						$data4=$row['custTelephone'];
					}
					
					$session_data=array(
						'custName'=>$data1,
						'custTelephone'=>$data4,
						'custEmail'=>$data3,
						'custNIC'=>$custNIC
					);
					$this->session->set_userdata($session_data);
					$this->loadcustomer();

				}else{
					$this->session->set_userdata('userError', 'No active user for given NIC or Password');
					echo "No active user for given NIC or Password";
					$this->login();
				}
			}else{
				$this->session->set_userdata('userError', 'Error occured while doing !');
				echo 'error';
				$this->login();
			}
		}

		public function update(){
			$custNIC=$_SESSION['custNIC']; 
			$custName=$this->input->post('custName');
			$custTelephone=$this->input->post('custTelephone');
			$custEmail=$this->input->post('custEmail');

			$this->load->model('CustomerModel');

			if($custNIC==''){
				$this->session->set_userdata('userError', 'Log in first to change');
				echo 'Log in first to change';
				$this->login();
			}else{

				$config =[
				'upload_path'=>'./uploads',
				'allowed_types'=>'png|jpg|jpeg'
				];

				$this->load->library('upload',$config);
				$this->form_validation->set_error_delimiters();
				
				$image_path='';

				if($this->upload->do_upload()){
					$data=$this->input->post();
					$info=$this->upload->data();
					$image_path=base_url("uploads/".$info['raw_name'].$info['file_ext']);
					unset($data['submit']);
					$this->load->model('CustomerModel');
					$this->CustomerModel->insertImage($image_path,$custNIC);				
				}else{
					$image_path=$_SESSION['custPhoto'];
				}

				$this->CustomerModel->updateData($custNIC,$custName,$custTelephone,$custAddress,$custEmail,$custDOB);
				$session_data=array(
						'custName'=>$custName,
						'custTelephone'=>$custTelephone,
						'custEmail'=>$custEmail,
						'custNIC'=>$custNIC
					);
				$this->session->set_userdata($session_data);
				$this->loadcustomer();
			}
		}



		
		public function deactivate(){
			$this->load->model('CustomerModel');
			$custNIC=$_SESSION['custNIC'];
			$this->CustomerModel->deleteData($custNIC);
			$session_data=array(
						'custName'=>'',
						'custTelephone'=>'',
						'custEmail'=>'',
						'custNIC'=>'',
					);
				$this->session->set_userdata($session_data);
			redirect(base_url());
		}


		public function customerDisplayData(){


			$this->load->view("Customerheader.php");
			$this->load->view("Display.php");
			$this->load->view("Customerfooter.php");
			$this->session->unset_userdata('userError');

			
		}

		public function rrr(){


			
			$this->load->library('Pdf');
			$this->load->view('makepdf');

		}
	



		
	}
?>