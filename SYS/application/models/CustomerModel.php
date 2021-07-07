<?php
	Class CustomerModel extends CI_Model{
		
		public function _construct(){
			parent::_construct;
		}

		
		function checkExistUser($custNIC){
			$status=1;
			$this->db->where('custNIC',$custNIC);
			$this->db->where('custStatus',$status);
			$query=$this->db->get('Customer');

			
			$status=0;
			$this->db->where('custNIC',$custNIC);
			$this->db->where('custStatus',$status);
			$query_two=$this->db->get('Customer');

			if($query->num_rows()>0){
				 return false;
			}else if($query_two->num_rows()>0){
				$this->db->where('custNIC',$custNIC);
				$this->db->delete('Customer');
				return true;
			}else{
				return true;
			}
		}

		
		function insertData($custName,$custNIC,$custTelephone,$custEmail,$custPassword){

			$custStatus=1; 
			$data=array(
				'custNIC'=>$custNIC,
				'custPassword'=>$custPassword,
				'custName'=>$custName,
				'custTelephone'=>$custTelephone,
				'custEmail'=>$custEmail,
				'custStatus'=>$custStatus
			);

			$this->db->insert('Customer',$data);
		}

		
		function checkData($custNIC,$custPassword){
			$status=1;
			$this->db->where('custNIC',$custNIC);
			$this->db->where('custStatus',$status);
			$this->db->where('custPassword',$custPassword);
			$query=$this->db->get('Customer');

			if($query->num_rows()>0){
				 return true;
			}else{
				return false;
			}
		}

		
		function retrieveData($custNIC,$custPassword){
			$this->db->where('custNIC',$custNIC);
			$this->db->where('custPassword',$custPassword);
			$query=$this->db->get('Customer');
			

			return $query->result_array();

		}

		
		function updateData($custNIC,$custName,$custTelephone,$custEmail){
			$value=array('custName'=>$custName,'custEmail'=>$custEmail,'custTelephone'=>$custTelephone);
            $this->db->where('custNIC',$custNIC);
            $this->db->update('Customer',$value);
		}



		function updatePassword($custNIC,$custPassword){
			$value=array('custPassword'=>$custPassword);
			$this->db->where('custNIC',$custNIC);
            $this->db->update('Customer',$value);
		}

		function deleteData($custNIC){
			$custStatus=0;
			$value=array('custStatus'=>$custStatus);
			$this->db->where('custNIC',$custNIC);
			$this->db->update('Customer',$value);
		}

		



		public function query(){
			$this->db->order_by('custNIC', 'desc');
			$query = $this->db->get('customer');
			if($query->num_rows() > 0){
				return $query->result();
			}else{
				return false;
			}
		}


	}
?>

