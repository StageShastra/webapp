<?php
	class Auth extends CI_Model {
		public function insertUser($type = '', $refer = 'direct', $refer_id = 0){
			$this->load->library('user_agent');
			$pass = hash_hmac('sha512', $this->input->post('password'), $this->config->item("encryption_key"));
			// check username
			$username = trim(explode("@", $this->input->post('email'))[0]);
			$checkUsername = $username;
			$d = $this->getUserData("StashUsers_username", $checkUsername);
			while (count($d)){
				$checkUsername = $username . "-" . mt_rand(100, 999);
				$d = $this->getUserData("StashUsers_username", $checkUsername);
			}
			
			$data = array(
						'StashUsers_id' => null,
						'StashUsers_username' => $checkUsername,
						'StashUsers_name' => ucwords($this->input->post('name')),
						'StashUsers_email' => $this->input->post("email"),
						'StashUsers_mobile' => $this->input->post("mobile"),
						'StashUsers_password' => $pass,
						'StashUsers_type' => trim($type),
						'StashUsers_time' => time(),
						'StashUsers_status' => 0,
						'StashUsers_mobile_status' => 0,
						'StashUsers_ip' => $this->input->ip_address(),
						'StashUsers_header' => $this->agent->agent_string(),
						'StashUsers_refer' => $refer,
						'StashUsers_refer_id' => $refer_id
					);
			$response = $this->db->insert("stash-users", $data);
			return $this->db->insert_id();
		}
		public function setupActorProfile($ref = 0){
			$data = array(
						'StashActor_id' => null,
						'StashActor_actor_id_ref' => $ref,
						'StashActor_name' => ucwords($this->input->post("name")),
						'StashActor_email' => $this->input->post("email"),
						'StashActor_mobile' => $this->input->post('mobile'),
						'StashActor_whatsapp' => '',
						'StashActor_dob' => 0,
						'StashActor_gender' => 0,
						'StashActor_height' => 0,
						'StashActor_weight' => 0,
						'StashActor_avatar' => 'default.png',
						'StashActor_images' => '{}',
						'StashActor_min_role_age' => 0,
						'StashActor_max_role_age' => 0,
						'StashActor_address' => '',
						'StashActor_city' => '',
						'StashActor_state' => '',
						'StashActor_country' => '',
						'StashActor_zip' => '',
						'StashActor_actor_card' => 0,
						'StashActor_passport' => 0,
						'StashActor_last_update' => time(),
						'StashActor_last_ip' => $this->input->ip_address()
					);
			$response = $this->db->insert("stash-actor", $data);
			return $response;
		}
		public function setupDirectorProfile($ref = 0){
			$data = array(
						'StashDirector_id' => null,
						'StashDirector_director_id_ref' => $ref,
						'StashDirector_name' => ucwords($this->input->post("name")),
						'StashDirector_email' => $this->input->post('email'),
						'StashDirector_mobile' => $this->input->post("mobile"),
						'StashDirector_avatar' => "default.png",
						'StashDirector_last_update' => time(),
						'StashDirector_last_ip' => $this->input->ip_address()
					);
			$response = $this->db->insert("stash-director", $data);
			return $response;
		}
		public function ifUserExist($email = ''){
			$this->db->where("StashUsers_email", $email);
			//return $query = $this->db->get_compiled_select("stash-users");
			$query = $this->db->get("stash-users");
			return $query->num_rows();
		}
		public function verifyLoginCredentials($data = []){
			$pass = hash_hmac('sha512', $data['password'], $this->config->item("encryption_key"));
			$this->db->where("StashUsers_email", trim($data['email']));
			$this->db->where("StashUsers_password", $pass);
			$this->db->where("StashUsers_type", $data['type']);
			$query = $this->db->get("stash-users");
			return $query->first_row('array');
		}

		public function verifyCredentials($pass = ''){
			$pass = hash_hmac('sha512', $pass, $this->config->item("encryption_key"));
			$this->db->where("StashUsers_id", $this->session->userdata("StaSh_User_id"));
			$this->db->where("StashUsers_password", $pass);
			$this->db->where("StashUsers_type", $this->session->userdata("StaSh_User_type"));
			$query = $this->db->get("stash-users");
			return $query->first_row('array');
		}

		public function startLoginSession($profile = []){
			$session_data = array(
								'StaSh_User_Logged_In' => true,
								'StaSh_User_id' => $profile['StashUsers_id'],
								'StaSh_User_name' => $profile['StashUsers_name'],
								'StaSh_User_type' => $profile['StashUsers_type'],
							);
	    	$this->session->set_userdata($session_data);
		}
		public function updateUserLogin($ref = 0){
			$data = array(
						'StashLogins_id' => null,
						'StashLogins_user_id_ref' => $ref,
						'StashLogins_time' => time(),
						'StashLogins_ip' => $this->input->ip_address()
					);
			$response = $this->db->insert("stash-logins", $data);
			return $response;
		}
		public function getUserData($key = '', $value = ''){
			$this->db->where($key, trim($value));
			$query = $this->db->get("stash-users");
			return $query->first_row('array');
		}
		
		public function isConfirmedUser($key = '', $value = ''){
			$this->db->where($key, trim($value));
			$this->db->where("StashUsers_status", 1);
			$query = $this->db->get("stash-users");
			return $query->num_rows();
		}
		public function insertPassCode($ref = 0, $passCode = 0){
			$data = array(
						'StashForgotPassword_id' => null,
						'StashForgotPassword_user_id_ref' => $ref,
						'StashForgotPassword_code' => $passCode,
						'StashForgotPassword_req_time' => time(),
						'StashForgotPassword_used_time' => 0,
						'StashForgotPassword_status' => 0,
						'StashForgotPassword_ip' => $this->input->ip_address()
					);
			$response = $this->db->insert("stash-forgot-password", $data);
			return $response;
		}
		public function getPassCodeData($ref = 0, $code = 0){
			$this->db->where("StashForgotPassword_user_id_ref", $ref);
			$this->db->where("StashForgotPassword_code", $code);
			$this->db->ordeR_by("StashForgotPassword_id", "DESC");
			$query = $this->db->get("stash-forgot-password", 1);
			return $query->first_row('array');
		}
		public function updatePassCodeUses($id = 0){
			$data = array(
						'StashForgotPassword_used_time' => time(),
						'StashForgotPassword_status' => 1
					);
			$this->db->where('StashForgotPassword_id', $id);
			return $this->db->update('stash-forgot-password', $data);
		}
		public function updatePassword($ref = 0, $pass = ''){
			$pass = hash_hmac('sha512', $pass, $this->config->item("encryption_key"));
			$data = array(
						'StashUsers_password' => $pass
					);
			$this->db->where('StashUsers_id', $ref);
			return $this->db->update('stash-users', $data);
		}
		public function insertActorInProject($ref = 0, $proj = 0){
			$info = ($proj == 0) ? $this->input->cookie("project_ref") : $proj;
			$data = array(
						'StashActorProject_id' => null,
						'StashActorProject_actor_id_ref' => $ref,
						'StashActorProject_project_id_ref' => $info,
						'StashActorProject_time' => time(),
						'StashActorProject_status' => 1
					);
			//return $query = $this->db->get_compiled_insert("stash-actor-project", $data);
			$this->db->insert("stash-actor-project", $data);
		}
		public function insertActorInDirectorList($ref = 0, $dir = 0){
			$info = ($dir == 0) ? $this->input->cookie("director_ref") : $dir;
			$data = array(
						'StashDirectorActorLink_id' => null,
						'StashDirectorActorLink_director_id_ref' => $info,
						'StashDirectorActorLink_actor_id_ref' => $ref,
						'StashDirectorActorLink_rate' => 5,
						'StashDirectorActorLink_time' => time(),
						'StashDirectorActorLink_status' => 1
					);
			$this->db->insert("stash-director-actor-link", $data);
			//return $query = $this->db->get_compiled_insert("stash-director-actor-link", $data);
		}
		
		public function setDefaultCookies(){
			//$this->load->helper('cookie');
			setcookie("isCat", true, time() + 3600, "/");
			$cate = json_encode(array('Name','Age','Sex','Email','Mobile'));
			setcookie("categories", $cate, time() + 3600, "/");
			//set_cookie("categories", $cate);
		}
		
		public function checkActorProject($ref = 0, $project = 0){
			$this->db->where("StashActorProject_actor_id_ref", $ref);
			$this->db->where("StashActorProject_project_id_ref", $project);
			$query = $this->db->get("stash-actor-project");
			$result = $query->result("array");
			if(count($result))
				return true;
			else
				return false;
		}
		
		public function checkActorInDirector($ref = 0, $director = 0){
			$this->db->where("StashDirectorActorLink_actor_id_ref", $ref);
			$this->db->where("StashDirectorActorLink_director_id_ref", $director);
			$query = $this->db->get("stash-director-actor-link");
			return $query->num_rows();
		}
		
		public function confirmEMail($email = ''){
			$this->db->where("StashUsers_email", $email);
			return $this->db->update("stash-users", array("StashUsers_status" => 1));
		}
		
		public function setupDirectorConfirmation($ref = 0){
			$data = array(
						"StashDirectorAllowed_id" => null,
						"StashDirectorAllowed_director_id_ref" => $ref,
						"StashDirectorAllowed_admin_id_ref" => 0,
						"StashDirectorAllowed_status" => 0,
						"StashDirectorAllowed_time" => time()
					);
			return $this->db->insert("stash-direction-allowed", $data);
		}
		
		public function getLinkDetails($link = ''){
			$this->db->where("StashSMSInvites_link", $link);
			$this->db->where("StashSMSInvites_status", 0);
			$query = $this->db->get("stash-sms-invites", 1);
			return $query->first_row('array');
		}

		public function getEmailLinkDetails($link = ''){
			$this->db->where("StashEmailInvite_link", $link);
			$this->db->where("StashEmailInvite_status", 0);
			$query = $this->db->get("stash-email-invites", 1);
			return $query->first_row('array');
		}

		public function getPromoLinkDetails($link = ''){
			$this->db->where("StashPromo_code", $link);
			$this->db->where("StashPromo_status", 1);
			$query = $this->db->get("stash-promo", 1);
			return $query->first_row('array');
		}

		public function getPromoLinkDetailsById($ref = 0){
			$this->db->where("StashPromo_id", $ref);
			$this->db->where("StashPromo_status", 1);
			$query = $this->db->get("stash-promo", 1);
			return $query->first_row('array');
		}
		
		public function getProjectNameForAC($t = ''){
			$this->db->like("StashProject_name", $t, "after");
			$this->db->where("StashProject_status", 1);
			$this->db->where("StashProject_director_id_ref", $this->session->userdata("StaSh_User_id"));
			/*$query = $this->db->get_compiled_select("stash-project");
			print_r($query);
			exit();*/
			$query = $this->db->get("stash-project");
			$fetch = $query->result("array");
			$result = [];
			foreach($fetch as $f){
				$v['value'] = $f['StashProject_name'];
				$v['label'] = $f['StashProject_name'] . " (" . date("d/M/Y", $f['StashProject_date']) . ")";
				$v['id'] = $f['StashProject_id'];
				$v['date'] = date("Y-m-d", $f['StashProject_date']);
				$result[] = $v;
			}
			
			return $result;
		}
		public function addOTP($otp = 0, $ref = 0){
			$data = array(
						'StashMobileOTP_id' => null,
						'StashMobileOTP_user_id_ref' => $ref,
						'StashMobileOTP_otp' => $otp,
						'StashMobileOTP_status' => 0,
						'StashMobileOTP_time' => time()
					);
			$this->db->insert("stash-mobile-otp", $data);
		}
		public function validateOTP($otp = 0, $ref = 0){
			$this->db->where("StashMobileOTP_user_id_ref", $ref);
			$this->db->where("StashMobileOTP_otp", $otp);
			$query = $this->db->get("stash-mobile-otp", 1);
			return $query->first_row('array');
		}
		public function updateMobileVerificationStatus($ref = 0){
			$data = array(
						'StashUsers_mobile_status' => 1
					);
			$this->db->where('StashUsers_id', $ref);
			return $this->db->update('stash-users', $data);
		}
		public function updateOTPStatus($ref = 0, $otp = 0){
			$data = array(
						'StashMobileOTP_status' => 1
					);
			$this->db->where('StashMobileOTP_user_id_ref', $ref);
			$this->db->where('StashMobileOTP_otp', $otp);
			return $this->db->update('stash-mobile-otp', $data);
		}
		public function updateUserMobile($ref = 0, $mobile = 0){
			$data = array(
						'StashUsers_mobile_status' => 1,
						'StashUsers_mobile' => $mobile
					);
			$this->db->where('StashUsers_id', $ref);
			return $this->db->update('stash-users', $data);
		}
		public function addDeliveryReport($num = '', $status = '', $customId = ''){
			$data = array(
						"id" => null,
						"numbers" => $num,
						"status" => $status,
						"customId" => $customId,
						"time" => time()
					);
			$this->db->insert("tl_delivery_report", $data);
		}

		public function getLastReminderData($time = 0){
			$this->db->distinct();
			$this->db->select("StashInactivityMail_user_id_ref");
			$this->db->where("StashInactivityMail_time > {$time}");
			$query = $this->db->get("stash-inactivity-mail");
			$fetch = $query->result('array');
			$result = [];
			foreach ($fetch as $key => $f) {
				$result[] = $f['StashInactivityMail_user_id_ref'];
			}
			return $result;
		}

		public function getInactiveUsers($time = 0){
			$this->db->distinct();
			$this->db->select("StashLogins_user_id_ref");
			$this->db->where("StashLogins_time < {$time}");
			$query = $this->db->get("stash-logins");
			$fetch = $query->result('array');
			$result = [];
			foreach ($fetch as $key => $f) {
				$result[] = $f['StashLogins_user_id_ref'];
			}
			return $result;
		}

		public function getEmailByIds($ids = []){
			$this->db->select("StashUsers_email");
			$this->db->where_in("StashUsers_id", $ids);
			$query = $this->db->get("stash-users");
			$fetch = $query->result('array');
			$result = [];
			foreach ($fetch as $key => $f) {
				$result[] = $f['StashUsers_email'];
			}
			return $result;
		}

		public function insertLastReminderSent($users = []){
			foreach ($users as $key => $user) {
				$d = array(
						"StashInactivityMail_user_id_ref" => $user,
						"StashInactivityMail_time" => time(),
						"StashInactivityMail_id" => null
					);
				$this->db->insert("stash-inactivity-mail", $d);
			}
		}

		public function insert_contact_message($d){

			$data = array(
						'StashContactMessage_id' => null,
						'StashContactMessage_name' => $d["name"],
						'StashContactMessage_phone' => $d["phone"],
						'StashContactMessage_email' => $d["email"],
						'StashContactMessage_message' => $d["message"],
						'StashContactMessage_ip' => $this->input->ip_address(),
						'StashContactMessage_time' => time(),
						'StashContactMessage_status' => 0,
						'StashContactMessage_responded_by' => 0,
						'StashContactMessage_responded_on' => 0
					);
			$this->db->insert("stash-contact-message", $data);
		}
		public function updateSMSLinkOpened($id = 0){
			$this->db->where("StashSMSInvites_id", $id);
			$this->db->update("stash-sms-invites", array('StashSMSInvites_opened' => time()));
		}

		public function updateSMSLinkUsed($id = 0, $st = 0){
			$s = ($st) ? $st : 1;
			$this->db->where("StashSMSInvites_id", $id);
			$this->db->update("stash-sms-invites", array('StashSMSInvites_status' => $s));
		}

		public function updateEmailLinkOpened($id = ''){
			$this->db->where("StashEmailInvite_id", $id);
			$this->db->update("stash-email-invites", array('StashEmailInvite_opened' => time()));
		}

		public function updateEmailLinkUsed($id = 0, $st = 0){
			$s = ($st) ? $st : 1;
			$this->db->where("StashEmailInvite_id", $id);
			$this->db->update("stash-email-invites", array('StashEmailInvite_status' => $s));
		}

		public function promoLinkOpened($ref = 0){
			$d = array(
						'StashPromoOpen_id' => null,
						'StashPromoOpen_promo_id_ref' => $ref,
						'StashPromoOpen_ip' => $this->input->ip_address(),
						'StashPromoOpen_user_agent' => $this->agent->agent_string(),
						'StashPromoOpen_time' => time()
					);
			$this->db->insert("stash-promo-opened", $d);
		}

		public function updatePromoUsed($p = 0, $r = 0){
			$d = array(
						'StashPromoUsed_id' => null,
						'StashPromoUsed_promo_id_ref' => $p,
						'StashPromoUsed_user_id_ref' => $r,
						'StashPromoUsed_time' => time()
					);
			$this->db->insert("stash-promo-used", $d);
		}

		public function promoExist($l = ''){
			$this->db->where("StashPromo_code", $l);
			$this->db->where("StashPromo_status", 1);
			return $this->db->get("stash-promo", 1)->num_rows();

		}

		public function insertActorPlan($plan = ''){
			$d = array(
						'StashActorPlan_id' => null,
						'StashActorPlan_actor_id_ref' => $this->session->userdata("StaSh_User_id"),
						'StashActorPlan_plan' => $plan,
						'StashActorPlan_start' => time(),
						'StashActorPlan_end' => strtotime("+1 year"),
						'StashActorPlan_time' => time(),
						'StashActorPlan_status' => 1,
						'StashActorPlan_ip' => $this->input->ip_address()
					);
			return $this->db->insert("stash-actor-plan", $d);
		}

		public function getDirectPayments(){
			$this->db->where("StashDirectorPlan_director_id_ref", $this->session->userdata("StaSh_User_id"));
			$this->db->where("StashDirectorPlan_status", 1);
			$this->db->ordeR_by("StashDirectorPlan_id", "DESC");
			return $this->db->get("stash-director-plans", 1)->num_rows();
		}

		public function getActorPayments(){
			$this->db->where("StashActorPlan_actor_id_ref", $this->session->userdata("StaSh_User_id"));
			$this->db->where("StashActorPlan_status", 1);
			$this->db->ordeR_by("StashActorPlan_id", "DESC");
			return $this->db->get("stash-actor-plan", 1)->num_rows();
		}
	}
?>
