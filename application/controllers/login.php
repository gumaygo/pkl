<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();	

		
		$this->load->database();	
		$this->load->model('m_login');

	}

	function index(){
		$this->load->view('v_login');
	}
	function forgotpass(){
		$this->load->view('v_forgot');
	}
	function register(){
		$this->load->view('v_regis');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("user",$where)->num_rows();
		if($cek > 0){
			$query = $this->db->query("SELECT * FROM `user` WHERE username = '".$username."' LIMIT 1");


foreach ($query->result_array() as $row)
{
       $id_usernya =  $row['id'];
       $username_usernya =  $row['username'];
       $level_usernya =  $row['level'];
  
}
			
			

			$data_session = array(
				'nama' => $username,
				'status' => "login",
				'id_user' => $id_usernya,
				'level' => $level_usernya,
				'username' => $username_usernya
				);

			$this->session->set_userdata($data_session);

			if ($level_usernya == '0') {
				redirect(base_url("user/root"));
			} elseif ($level_usernya == '13') {

				redirect(base_url("user/users"));
			} elseif ($level_usernya == '2') {

				redirect(base_url("user/pudir"));
			} elseif ($level_usernya == '10') {

				redirect(base_url("user/baakpsi"));
			} elseif ($level_usernya == '11') {

				redirect(base_url("user/mahasiswa"));
			} 
			elseif ($level_usernya == '3') {

				redirect(base_url("user/kajur"));
			} 
			elseif ($level_usernya == '4') {

				redirect(base_url("user/kprodi"));
			} 
			elseif ($level_usernya == '5') {

				redirect(base_url("user/dosen"));
			} 

		}else{
			$this->load->view('v_login2');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

	function resetpass(){

		$this->load->view('v_change_password');
	}

	function reset()
	{

$randd = base64_encode(openssl_random_pseudo_bytes(30));

		$email = $this->input->post('email');
		global $db;
		
		$query = $this->db->query("UPDATE user SET token = '".$randd."' WHERE email = ".$this->db->escape($email)."");
		require_once('third_party/phpmailer/PHPMailerAutoload.php');
		$mail = new PHPMailer();
		$mail->IsSMTP(); // we are going to use SMTP
		$mail->SMTPAuth   = true; // enabled SMTP authentication
		$mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
		$mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
		$mail->Port       = 465;                   // SMTP port to connect to GMail
		$mail->Username   = "apanamanya006@gmail.com";  // user email address
		$mail->Password   = "aselole9091";            // password in GMail
		$mail->SetFrom('apanamanya006@gmail.com', 'Reset Password');  //Who is sending 
		$mail->isHTML(true);


		$mail->Subject    = "Mail Subject";
		$mail->Body      = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'><html style='width:100%;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0;'><head><meta charset='UTF-8'><meta content='width=device-width, initial-scale=1' name='viewport'><meta name='x-apple-disable-message-reformatting'><meta http-equiv='X-UA-Compatible' content='IE=edge'><meta content='telephone=no' name='format-detection'><title>New email template 2020-04-16</title> <!--[if (mso 16)]><style type='text/css'>     a {text-decoration: none;}     </style><![endif]--> <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--><style type='text/css'>
@media only screen and (max-width:600px) {p, ul li, ol li, a { font-size:16px!important; line-height:150%!important } h1 { font-size:20px!important; text-align:center; line-height:120%!important } h2 { font-size:16px!important; text-align:left; line-height:120%!important } h3 { font-size:20px!important; text-align:center; line-height:120%!important } h1 a { font-size:20px!important } h2 a { font-size:16px!important; text-align:left } h3 a { font-size:20px!important } .es-menu td a { font-size:14px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:10px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:12px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class='gmail-fix'] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c 
h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:block!important } a.es-button { font-size:14px!important; display:block!important; border-left-width:0px!important; border-right-width:0px!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } 
.es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } .es-desk-hidden { display:table-row!important; width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } .es-desk-menu-hidden { display:table-cell!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } }#outlook a {	padding:0;}.ExternalClass {	width:100%;}.ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div {	line-height:100%;}.es-button 
{	mso-style-priority:100!important;	text-decoration:none!important;}a[x-apple-data-detectors] {	color:inherit!important;	text-decoration:none!important;	font-size:inherit!important;	font-family:inherit!important;	font-weight:inherit!important;	line-height:inherit!important;}.es-desk-hidden {	display:none;	float:left;	overflow:hidden;	width:0;	max-height:0;	line-height:0;	mso-hide:all;}.es-button-border:hover a.es-button {	background:#ffffff!important;	border-color:#ffffff!important;}.es-button-border:hover {	background:#ffffff!important;	border-style:solid solid solid solid!important;	border-color:#3d5ca3 #3d5ca3 #3d5ca3 #3d5ca3!important;}</style></head><body style='width:100%;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0;'><div class='es-wrapper-color' style='background-color:#FAFAFA;'> <!--[if gte mso 9]>
<v:background xmlns:v='urn:schemas-microsoft-com:vml' fill='t'> <v:fill type='tile' color='#fafafa'></v:fill> </v:background><![endif]--><table class='es-wrapper' width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;'><tr style='border-collapse:collapse;'><td valign='top' style='padding:0;Margin:0;'><table cellpadding='0' cellspacing='0' class='es-content' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;'><tr style='border-collapse:collapse;'><td class='es-adaptive' align='center' style='padding:0;Margin:0;'>
<table class='es-content-body' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;' width='600' cellspacing='0' cellpadding='0' bgcolor='#ffffff' align='center'><tr style='border-collapse:collapse;'><td align='left' style='padding:10px;Margin:0;'><table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'><tr style='border-collapse:collapse;'><td width='580' valign='top' align='center' style='padding:0;Margin:0;'><table width='100%' cellspacing='0' cellpadding='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'><tr style='border-collapse:collapse;'></tr></table></td></tr></table></td></tr></table></td></tr></table><table cellpadding='0' cellspacing='0' class='es-header' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top;'>
<tr style='border-collapse:collapse;'><td class='es-adaptive' align='center' style='padding:0;Margin:0;'><table class='es-header-body' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#3D5CA3;' width='600' cellspacing='0' cellpadding='0' bgcolor='#3d5ca3' align='center'><tr style='border-collapse:collapse;'><td style='Margin:0;padding-top:20px;padding-bottom:20px;padding-left:20px;padding-right:20px;background-color:#3D5CA3;' bgcolor='#3d5ca3' align='left'> <!--[if mso]><table width='560' cellpadding='0' cellspacing='0'><tr><td width='270' valign='top'><![endif]--><table class='es-left' cellspacing='0' cellpadding='0' align='left' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left;'><tr style='border-collapse:collapse;'><td class='es-m-p20b' width='270' align='left' style='padding:0;Margin:0;'>
<table width='100%' cellspacing='0' cellpadding='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'><tr style='border-collapse:collapse;'><td class='es-m-p0l es-m-txt-c' align='left' style='padding:0;Margin:0;font-size:0;'><a href='https://polinela.ac.id' target='_blank' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;font-size:14px;text-decoration:none;color:#1376C8;'><img src='' alt style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;' width='183' height='57'></a></td></tr></table></td></tr></table> <!--[if mso]></td><td width='20'></td><td width='270' valign='top'><![endif]-->
<table class='es-right' cellspacing='0' cellpadding='0' align='right' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right;'><tr style='border-collapse:collapse;'><td width='270' align='left' style='padding:0;Margin:0;'><table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'><tr style='border-collapse:collapse;'><td align='center' style='padding:0;Margin:0;display:none;'></td></tr></table></td></tr></table> <!--[if mso]></td></tr></table><![endif]--></td></tr></table></td></tr></table><table cellpadding='0' cellspacing='0' class='es-content' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;'><tr style='border-collapse:collapse;'><td align='center' style='padding:0;Margin:0;'>
<table bgcolor='#ffffff' class='es-content-body' align='center' cellpadding='0' cellspacing='0' width='600' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;'><tr style='border-collapse:collapse;'><td align='left' style='padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px;'><table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'><tr style='border-collapse:collapse;'><td width='560' align='center' valign='top' style='padding:0;Margin:0;'><table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'><tr style='border-collapse:collapse;'><td align='center' style='padding:0;Margin:0;display:none;'></td></tr></table></td></tr></table></td></tr></table></td></tr></table>
<table class='es-content' cellspacing='0' cellpadding='0' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;'><tr style='border-collapse:collapse;'><td style='padding:0;Margin:0;background-color:#FAFAFA;' bgcolor='#fafafa' align='center'><table class='es-content-body' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;' width='600' cellspacing='0' cellpadding='0' bgcolor='#ffffff' align='center'><tr style='border-collapse:collapse;'><td style='padding:0;Margin:0;padding-left:20px;padding-right:20px;padding-top:40px;background-color:transparent;background-position:left top;' bgcolor='transparent' align='left'><table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'>
<tr style='border-collapse:collapse;'><td width='560' valign='top' align='center' style='padding:0;Margin:0;'><table style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-position:left top;' width='100%' cellspacing='0' cellpadding='0' role='presentation'><tr style='border-collapse:collapse;'><td align='center' style='padding:0;Margin:0;padding-top:5px;padding-bottom:5px;font-size:0;'><img src='https://eqyxee.stripocdn.email/content/guids/CABINET_dd354a98a803b60e2f0411e893c82f56/images/23891556799905703.png' alt style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;' width='175' height='208'></td></tr><tr style='border-collapse:collapse;'><td align='center' style='padding:0;Margin:0;padding-top:15px;padding-bottom:15px;'>
<h1 style='Margin:0;line-height:24px;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-size:20px;font-style:normal;font-weight:normal;color:#333333;'><strong>FORGOT YOUR </strong></h1><h1 style='Margin:0;line-height:24px;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-size:20px;font-style:normal;font-weight:normal;color:#333333;'><strong>&nbsp;PASSWORD?</strong></h1></td></tr><tr style='border-collapse:collapse;'><td align='center' style='padding:0;Margin:0;padding-left:40px;padding-right:40px;'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;line-height:24px;color:#666666;'>HI User</p></td></tr><tr style='border-collapse:collapse;'>
<td align='left' style='padding:0;Margin:0;padding-right:35px;padding-left:40px;'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;line-height:24px;color:#666666;text-align:center;'>There was a request to change your password!</p></td></tr><tr style='border-collapse:collapse;'><td align='center' style='padding:0;Margin:0;padding-top:25px;padding-left:40px;padding-right:40px;'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;line-height:24px;color:#666666;'>If did not make this request, just ignore this email. Otherwise, please click the button below to change your password:</p></td></tr><tr style='border-collapse:collapse;'>
<td align='center' style='Margin:0;padding-left:10px;padding-right:10px;padding-top:40px;padding-bottom:40px;'><span class='es-button-border' style='border-style:solid;border-color:#3D5CA3;background:#FFFFFF;border-width:2px;display:inline-block;border-radius:10px;width:auto;'><a href='http://localhost/gorbon/login/resetpass?token=".$randd."' class='es-button' target='_blank' style='mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-size:14px;color:#3D5CA3;border-style:solid;border-color:#FFFFFF;border-width:15px 20px 15px 20px;display:inline-block;background:#FFFFFF;border-radius:10px;font-weight:bold;font-style:normal;line-height:17px;width:auto;text-align:center;'>RESET PASSWORD</a></span></td></tr></table></td></tr></table></td></tr><tr style='border-collapse:collapse;'>
<td style='padding:0;Margin:0;padding-left:10px;padding-right:10px;padding-top:20px;background-position:center center;' align='left'> <!--[if mso]><table width='580' cellpadding='0' cellspacing='0'><tr><td width='199' valign='top'><![endif]--><table class='es-left' cellspacing='0' cellpadding='0' align='left' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left;'><tr style='border-collapse:collapse;'><td width='199' align='left' style='padding:0;Margin:0;'><table style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-position:center center;' width='100%' cellspacing='0' cellpadding='0' role='presentation'><tr style='border-collapse:collapse;'><td class='es-m-txt-c' align='right' style='padding:0;Margin:0;padding-top:15px;'>
<p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;line-height:24px;color:#666666;'><strong>Follow us:</strong></p></td></tr></table></td></tr></table> <!--[if mso]></td><td width='20'></td><td width='361' valign='top'><![endif]--><table class='es-right' cellspacing='0' cellpadding='0' align='right' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right;'><tr style='border-collapse:collapse;'><td width='361' align='left' style='padding:0;Margin:0;'><table style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-position:center center;' width='100%' cellspacing='0' cellpadding='0' role='presentation'><tr style='border-collapse:collapse;'>
<td class='es-m-txt-c' align='left' style='padding:0;Margin:0;padding-bottom:5px;padding-top:10px;font-size:0;'><table class='es-table-not-adapt es-social' cellspacing='0' cellpadding='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'><tr style='border-collapse:collapse;'><td valign='top' align='center' style='padding:0;Margin:0;padding-right:10px;'><img src='https://eqyxee.stripocdn.email/content/assets/img/social-icons/rounded-gray/facebook-rounded-gray.png' alt='Fb' title='Facebook' width='32' height='32' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;'></td><td valign='top' align='center' style='padding:0;Margin:0;padding-right:10px;'>
<img src='https://eqyxee.stripocdn.email/content/assets/img/social-icons/rounded-gray/twitter-rounded-gray.png' alt='Tw' title='Twitter' width='32' height='32' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;'></td><td valign='top' align='center' style='padding:0;Margin:0;padding-right:10px;'><img src='https://eqyxee.stripocdn.email/content/assets/img/social-icons/rounded-gray/instagram-rounded-gray.png' alt='Ig' title='Instagram' width='32' height='32' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;'></td><td valign='top' align='center' style='padding:0;Margin:0;padding-right:10px;'><img src='https://eqyxee.stripocdn.email/content/assets/img/social-icons/rounded-gray/youtube-rounded-gray.png' alt='Yt' title='Youtube' width='32' height='32' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;'></td>
<td valign='top' align='center' style='padding:0;Margin:0;padding-right:10px;'><img src='https://eqyxee.stripocdn.email/content/assets/img/social-icons/rounded-gray/linkedin-rounded-gray.png' alt='In' title='Linkedin' width='32' height='32' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;'></td></tr></table></td></tr></table></td></tr></table> <!--[if mso]></td></tr></table><![endif]--></td></tr><tr style='border-collapse:collapse;'><td style='Margin:0;padding-top:5px;padding-bottom:20px;padding-left:20px;padding-right:20px;background-position:left top;' align='left'><table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'><tr style='border-collapse:collapse;'><td width='560' valign='top' align='center' style='padding:0;Margin:0;'>
<table width='100%' cellspacing='0' cellpadding='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'><tr style='border-collapse:collapse;'><td align='center' style='padding:0;Margin:0;'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;line-height:21px;color:#666666;'>Contact us: <a target='_blank' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;font-size:14px;text-decoration:none;color:#666666;' href='tel:123456789'>123456789</a>
 | <a target='_blank' href='mailto:humas@polinela.ac.id' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;font-size:14px;text-decoration:none;color:#666666;'>your@mail.com</a></p></td></tr></table></td></tr></table></td></tr></table></td></tr></table><table class='es-footer' cellspacing='0' cellpadding='0' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top;'><tr style='border-collapse:collapse;'><td style='padding:0;Margin:0;background-color:#FAFAFA;' bgcolor='#fafafa' align='center'>
<table class='es-footer-body' width='600' cellspacing='0' cellpadding='0' bgcolor='#ffffff' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;'><tr style='border-collapse:collapse;'><td style='Margin:0;padding-top:10px;padding-left:20px;padding-right:20px;padding-bottom:30px;background-color:#0B5394;background-position:left top;' bgcolor='#0b5394' align='left'><table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'><tr style='border-collapse:collapse;'><td width='560' valign='top' align='center' style='padding:0;Margin:0;'><table width='100%' cellspacing='0' cellpadding='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;'><tr style='border-collapse:collapse;'>
<td align='left' style='padding:0;Margin:0;padding-top:5px;padding-bottom:5px;'><h2 style='Margin:0;line-height:19px;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-size:16px;font-style:normal;font-weight:normal;color:#FFFFFF;'><strong>Have quastions?</strong></h2></td></tr><tr style='border-collapse:collapse;'><td align='left' style='padding:0;Margin:0;padding-bottom:5px;'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;line-height:21px;color:#FFFFFF;'>We are here to help, learn more about us <a target='_blank' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;font-size:14px;text-decoration:none;color:#FFFFFF;' href=''>here</a></p>
<p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;line-height:21px;color:#FFFFFF;'>or <a target='_blank' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;font-size:14px;text-decoration:none;color:#FFFFFF;' href=''>contact us</a><br></p></td></tr></table></td></tr></table></td></tr></table></td></tr></table></td></tr></table></div></body>
</html>

        ";
		$destino = "apanamanya006@gmail.com"; // Who is addressed the email to
		$mail->AddAddress($destino, "Receiver");
		if (!$mail->Send()) {
			$this->load->view('v_login4');
		} else {
			$this->load->view('v_login3');
		}
	}

	
	function verif(){
		
		

		$token = $this->input->post('token');
		$password_baru = md5($this->input->post('password_baru'));
		$where = array(
			'token' => $token
			);
		$queryy = $this->db->query("UPDATE `user` SET `password` = '".$password_baru."' WHERE token = '".$token."'");
		if($queryy > 0){

	

		

			redirect(base_url('login'));

			

		}else{
			echo $token; echo "<br>";
			echo $password_baru;

		}

	}

	function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


	

}