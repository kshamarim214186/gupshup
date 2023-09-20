<?php
App::uses('AppController', 'Controller');
/**
 * Dashboard Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class DashboardController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Session','Mail','Sms');
	var  $uses = array('User','Dashboard','Menu','UserAccess','ManageOtp','LeadSource');

	/**
	 * index method
	 *
	 * @return void
	*/
	public function index() {
		$sql = "SELECT * from users where role!='superadmin' OR role!='admin' order by id desc Limit 5";
		$result = $this->User->query($sql);
		$this->set('users',$result);
	}
	
	public function import_contact_number(){
		if ($this->request->is('post')) {
			date_default_timezone_set('Asia/Kolkata');
	    	$csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
	    
		    
		    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
		        if(is_uploaded_file($_FILES['file']['tmp_name'])){
		            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
		            fgetcsv($csvFile);
		            while(($line = fgetcsv($csvFile)) !== FALSE){
		                $name   = $line[0];
		                $phone  = str_replace(' ', '', $line[1]);
						if($phone!=''){
						    $date = date("Y-m-d");
                            $newdate = date("Y-m-d",strtotime ( '+1 day' , strtotime ( $date ) )) ;
    
    					    $selectQuery = $this->User->query("SELECT * from automation_whatsapp where contact_number='".$phone."' AND created='".$newdate."'");
    					    
    					    if($selectQuery[0]['automation_whatsapp']['id']>0){
    					        
    					    }else{
        					    $ins_query = $this->User->query("INSERT into automation_whatsapp  set name='".$name."', contact_number='".$phone."', status='not_sent', uploaded_by='".CakeSession::read('loggedInUserId')."', created='".$newdate."'");
    					    }
						}
		            }
		            fclose($csvFile);
		            return $this->redirect(array("controller" => "dashboard/import_contact_number"));
		           
		            $qstring = '?status=succ';
		        }else{
		            $qstring = '?status=err';
		        }
		    }else{
		        $qstring = '?status=invalid_file';
		    }			
		}

	}

    public function import_custom(){
		if ($this->request->is('post')) {
			date_default_timezone_set('Asia/Kolkata');
	    	$csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
	    //echo "hjcg";die;
		    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
		        if(is_uploaded_file($_FILES['file']['tmp_name'])){
		            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
		            fgetcsv($csvFile);
		            while(($line = fgetcsv($csvFile)) !== FALSE){
		                $name   = $line[0];
		                $phone  = str_replace(' ', '', $line[1]);
		                $countrycode = str_replace(' ', '', $line[2]);
		                $destination = $countrycode.$phone;
		                $loggedID = CakeSession::read('loggedInUserId');
		                
						if($destination!=''){
						    $today = date("Y-m-d");
    
    					    $selectQuery = $this->User->query("SELECT * from whatsapp_contacts where contact_number='".$destination."' AND created='".$today."'");
    					    
    					    if($selectQuery[0]['whatsapp_contacts']['id']>0){
    					        
    					    }else{
    							$fields = array(
                                    "channel" => 'whatsapp',
                                    "source" => "971565776975",
                                    "destination" => $destination,
                                    "message" => '{"type":"text","text":"this is test template"}',
                                    "src.name" => 'DubaiHousing971565776975'
                                );
                                foreach($fields as $key=>$value) { $fields_string .= $key."=".$value."&"; }
                                @rtrim($fields_string, "&");
                              
                                $curl = curl_init();
                                curl_setopt_array($curl, array(
                                    CURLOPT_URL => "https://api.gupshup.io/sm/api/v1/msg",
                                    CURLOPT_CUSTOMREQUEST => "POST",
                                    CURLOPT_POSTFIELDS => $fields_string,
                                    CURLOPT_RETURNTRANSFER => true,
                                    CURLOPT_HTTPHEADER => array(
                                    "Content-Type: application/x-www-form-urlencoded",
                                    "accept: application/json",
                                    "apikey: dcalok4rkltoaooe1icqplgqiqmwiew0"
                                    ),
                                ));
                                $response = curl_exec($curl);
                                curl_close($curl);
                                $statusreport = json_decode($response, true);
                                //echo "<pre>"; print_r($statusreport);die;
                                $this->User->query("INSERT into whatsapp_contacts  set name='".$name."', contact_number='".$destination."', status='sent', uploaded_by='".$loggedID."', gupshup_status='".$statusreport['status']."', message_id='".$statusreport['messageId']."', created='".$today."'");
    					    }
						}
		            }
		            fclose($csvFile);
		            return $this->redirect(array("controller" => "dashboard/import_custom"));
		            
		        }else{
		            $qstring = '?status=err';
		        }
		    }else{
		        $qstring = '?status=invalid_file';
		    }		
		}

	}
	
}
	
?>