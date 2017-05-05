<?php

class Registration_model extends CI_Model
{
		public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function registration_post($user_first_name,$user_last_name,$user_mobile_number,$user_email_id,$user_username,$user_password)
        {
			
			
			$sql="SELECT * FROM `rev_user` WHERE `user_username`='$user_username'";
			$query_userdetails = $this->db->query($sql);
			$query_userdetails2=$query_userdetails->result();
			if(!empty($query_userdetails2))
			{
				return 0;
			}
			else
				{
					 $data = array(
						'user_first_name' => $user_first_name,
						'user_last_name' =>$user_last_name,
						'user_mobile_number' =>$user_mobile_number,
						'user_email_id' =>$user_email_id,
						'user_username' =>$user_username,
						'user_password' =>md5($user_password),
						'user_status' =>1,
						);

						$this->db->insert('rev_user', $data);
						return $id=$this->db->insert_id() ;
					
				}
			
			
        }

       

}

?>
