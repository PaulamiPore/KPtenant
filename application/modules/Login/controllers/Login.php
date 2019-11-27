<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {
    
    function __construct(){
        $this->module = 'Login';
        $this->model = 'Loginm';
        parent::__construct($this->module);
        $this->load->model($this->model);
	}




    // Load the login page
    public function index() {
        loggedinuser();
        $data = array();
        $data['loginmsg'] = '';
        $action = "Login Page Opened.";
        $this->{$this->model}->logEntry($action);
        $flag = "new";
        $data['image'] = $this->{$this->model}->ciCaptcha($flag);
        $this->load->view('login',$data);
    }

    public function getDetails() {
        $dept = filterData('deptVal');
        $userid = $this->{$this->model}->getDetails($dept);
        echo json_encode($userid);
    }

    // Reload CAPTCHA
    public function newCaptcha() {
        $flag = "reload";
        //$data['image'] = $this->{$this->model}->ciCaptcha($flag); //Calling CAPTCHA Creating Function
        $this->$data['image'] = $this->{$this->model}->ciCaptcha($flag); //Calling CAPTCHA Creating Function
        echo $this->$data['image']/*$data['image'];*/ ;
    }

    // Check login process
    public function process(){
        $usrnm = filterData('usrnm');
        // Setting Form Validation Rules
        $this->form_validation->set_rules('usrnm', 'Username', 'required');
        $this->form_validation->set_rules('pwd', 'Password', 'required');
       // $this->form_validation->set_rules('captcha', 'CAPTCHA Code', 'required');
        // Checking If Form Validation Successful
        if ($this->form_validation->run()) {
            // Checking The CAPTCHA Value
           // if($this->session->userdata("captchaword") == $this->input->post("captcha")) {
                // Getting User's Data
                $usrnm = filterData('usrnm');
                $pwd = $this->input->post('pwd');
                // Fetching Encrypted Password From DB Against Registration ID
                    //$cipher= filterdata('cipher') ;   
                $mob = $usrnm ; 
                $pass = $pwd ; 
                $md5pass = md5($pass) ; 

                

                // Is Encrypted Password is Present Against that Particular Registration ID
               /* if (!empty($validate)) {
                    $enc_pwd = $encpwd[0]['USRPWD'];
                } else {
                    $enc_pwd = 0;
                }*/
                // Login Procedure
                /*$query = "BEGIN REPORTER.PKG_OFFICERS.officers_login('$mob','$md5pass','$pass',:rc_out); end;";
                $validate = $this->{$this->model}->getRefCursor($query);*/
                //echo "<pre>"; print_r($validate) ; die ; 
                // If Login Function Returns No Value Against User's Credential
                // Login Done and Redirecting to Dashboard
                    
                    //$this->session->set_userdata($usrdata);
                    $action = 'Login Done by '.$validate[0]['OF_NAME'];
                    $this->{$this->model}->logEntry($action);
                    redirect('Report/Advrepg');
                
          
            // If Form Validation Errors
        } else {
            $data['loginmsg'] = 'Mandatory field missing!';
            $flag = "new";
            $data['image'] = $this->{$this->model}->ciCaptcha($flag);
            $action = "Form Validation ERROR by ".$usrnm;
            $this->{$this->model}->logEntry($action);
            $this->load->view('login',$data);
        }
    }

    // Load the Change Password Page
    public function changePass() {
        loggedoutuser();
        $data = array();
        $data['title'] = 'Change Password';
        $action = "Change Password Page Opened.";
        $this->{$this->model}->logEntry($action);
        $data['subview'] = $this->load->view('ChangePass', $data, true);
        $this->load->view('layout_main', $data);
    }

    // Check if Current Password is Valid
    public function chkPass(){
        // Getting current password, Username and Accesspoint of the user
        $pass = $this->input->post('p');
        $id = $this->session->userdata('OFID');
       /* $acpt = $this->session->userdata('ACCESSPOINT');*/
        // Getting encrypted password of the user
        $encpwd = md5($pass) ; 

        //echo ($encpwd) ; die;
        // Checking if the encrypted password is present
        if (!empty($encpwd)) {
            $enc_pwd = $encpwd;
        } else {
            $enc_pwd = 0;
        }
        // Getting user info using current and encrypted password
        $validate = $this->{$this->model}->checkLogin($id,$pass,$enc_pwd);

        //pre($validate,1) ; 
        // Returning value to view page
        if (!empty($validate)) {
            echo 1;
        } else {
            echo 0;
        }
    }

    // Change Password
    public function changePasswd(){
        $p = $this->input->post('p');
        $rp = $this->input->post('rp');

        if ($p == $rp) {
            $enc_pwd = md5($rp);
            $updtpass = $this->{$this->model}->updtPass($enc_pwd, $rp);
            if ($updtpass == 1) {
                $action = $this->session->userdata('UNAME')." has successfully changed password.";
                $this->{$this->model}->logEntry($action);
                $this->logout();
            } else {
                $action = $this->session->userdata('UNAME')." tried to change password but some ERROR occured.";
                $this->{$this->model}->logEntry($action);
                $this->changePass();
            }
        } else {
            $action = $this->session->userdata('UNAME')." didn't use both the passwords same.";
            $this->{$this->model}->logEntry($action);
            $this->changePass();
        }
    }

    // Forget Password
    public function forgetPwd() {
        $action = "Forget Password Page Opened.";
        $this->{$this->model}->logEntry($action);
        $this->load->view('ForgetPass');
    }

    // Reset Password
    public function resetPass() {
        // Get Details
        $dept = filterData('dept');
        $details = filterData('usrnm');
        $arr = explode("|", $details);

        // Create New Reset Password
        $characters = 'ArN@90%tuL#94&San$88';
        $n = 8;
        $randomString = '';
        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
        $passwd = $this->bcryptConv($randomString);

        // Send Mail to OC
        $subject = "Criminal Record System Password Reset";
        $msg = "Password for Criminal Record System has been reset successfully. New password: ".$randomString." Please login with this password. Thank You.     - Kolkata Police";
        $headers = "From: egovcell.kpolice.gov.in";

        mail($arr[3], subject, message);
        
        // Update New Password to Table
        pre($arr,1);
    }

    // Logout Function
    public function logout() {
        $action = "User Logged Out ".$this->session->userdata('UNAME');
        $this->{$this->model}->logEntry($action);
        $this->session->sess_destroy();
        redirect('/');
    }

    // Create BCrypt Password
    public function bcryptConv($plaintext){
        $cipher = password_hash($plaintext, PASSWORD_BCRYPT, ["cost" => 9]);
        return $cipher;
    }

}