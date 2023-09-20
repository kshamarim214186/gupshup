<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Session','Mail','Sms');
	var  $uses = array('User','Menuheader','Menu','UserAccess','ManageOtp','LeadSource');

	/**
	 * index method
	 *
	 * @return void
	*/
	public function index() {
		
	}

	
	function login() {

		if(CakeSession::read('loggedInUserId')>0 && (CakeSession::read('loggedInUserRole') == 'admin' || CakeSession::read('loggedInUserRole') == 'superadmin')){
			$this->redirect(array('controller'=>'dashboard','action'=>'index'));	
		}else{

			if ($this->request->is('post')) {

				if(empty($this->request->data['User']['name'])){
					$this->Session->setFlash('user name should not be left blank');
				}else if(empty($this->request->data['User']['password'])){
					$this->Session->setFlash('password should not be left blank');	
				}else{

					$username=$this->request->data['User']['name'];
				    $password=md5($this->request->data['User']['password']);

					$countuser = $this->User->find('count', array('conditions' => array('User.email'=>$username,'User.password'=>$password,'role'=>'superadmin')));
					//echo $countuser;die;
				    if($countuser===0){
						$this->Session->setFlash('invalid user');
						$this->redirect(ROOT_PATH);
						//$this->layout='login';
					}else{

						$dbuser = $this->User->findByEmail($username);

				    	CakeSession::write('loggedInUserId', $dbuser['User']['id']);
				    	CakeSession::write('loggedInUserRole', $dbuser['User']['role']);
				    	
				    	$this->redirect(array('controller'=>'dashboard','action'=>'index'));	
				    }
					
				}
			
			   
			}
		
			$this->layout='login';
		}
	}

	function logout($msg=null) {
		

		$this->Session->delete('User');
		CakeSession::write('loggedInUserId', ' ');
		CakeSession::write('loggedInUserRole', ' ');
		
		if($msg){
			
			$this->Session->setFlash($msg);
		}else{
				
			$this->Session->setFlash('You have successfully logged out.');
		}
		
		$this->redirect(ROOT_PATH);
	}


	function sendToMailOtp($email,$subject,$message)
	{
	$fields="";
	$fields_string="";
	$country_name="";
	$url="";
	$url = "https://www.indrealestates.com/crmmail/daily-mail-report.php";
	$fields = array(
	"email" => $email,
	"subject" => $subject,
	"message" => $message,
	);
	foreach($fields as $key=>$value) { $fields_string .= $key."=".$value."&"; }
	@rtrim($fields_string, "&");
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL, $url);
	curl_setopt($ch,CURLOPT_POST, count($fields));
	curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
	$result = curl_exec($ch);
	if ($result==2) {curl_close($ch); return true; } else { curl_close($ch);return false;}
	}
	
}
	
	?>
