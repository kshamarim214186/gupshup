<?php
## function to create thumbnail of size 200,200 of jpeg/png 
class MailComponent extends Component  {


public function sendEnquiryMail($user,$lastname,$useremail,$name,$email,$phone,$project,$country,$message,$typeoflead=null) 
 {

 	return "dczcf";die;
$alldetailsto="";

$subject="";
$abc="";
$admsg='';
$body="";
$headers="";

if($typeoflead==null){ $typeoflead="Fresh Lead";}
$alldetailsto="bhatiamanis@gmail.com,monikahco@gmail.com,".$useremail;
$system_ip2=@$_SERVER['REMOTE_ADDR'];

$subject= $typeoflead. " - assign to ".$user.' '.$lastname;
$abc="CRMTECH.CO.IN";



$admsg='<table width="331" border="0" cellpadding="0" cellspacing="0" style="width:310px; background-color:#ffffff; border:1px solid #cccccc; font-family:Arial, Helvetica, sans-serif; font-size:12px; float:left; overflow:hidden;">
<tr>
<td valign="middle" colspan="2" height="45" style="border-right:1px solid #cccccc; font-size:12px; font-weight:bold; text-align:center;" width="55%">CRMTECH.CO.IN</td>

</tr>
<tr>
<td colspan="2" style="border-top:1px solid #cccccc;">
<table width="100%" border="0" cellspacing="0" cellpadding="0" style=" font-family:Arial, Helvetica, sans-serif; font-size:12px;">
<tr style="background-color:#f0f0f0;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;" width="21%">Name</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;" width="3%">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;" width="76%">'.$name.'</td>
</tr>
<tr style="background-color:#ffffff;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">Email</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">'. $email.'</td>
</tr>
<tr style="background-color:#f0f0f0;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">Phone</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">&nbsp;'. $phone.'</td>
</tr>
<tr style="background-color:#ffffff;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">Country</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">'. $country.'</td>
</tr>

<tr style="background-color:#f0f0f0;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">Project</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">&nbsp;'. $project.'</td>
</tr>

<tr style="background-color:#ffffff;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">Assign To</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">'. $user.' '.$lastname.'</td>
</tr>

<tr style="background-color:#ffffff;">
<td colspan="3" style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">'.$message.'</td>
</tr>

</table>
</td>
</tr>
</table>'; 



$body=$admsg."<br/>";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: ".$abc."<noreply@crmtect.co.in>" . "\r\n";
$x1=@mail($alldetailsto,$subject,$body,$headers);
}


public function sendMeetingMail($lead,$project,$user,$lastname,$email,$name,$phone,$meetingplace,$representative,$representativeemail,$status,$response,$timing) 
 {
$alldetailsto="";

$subject="";
$abc="";
$admsg='';
$body="";
$headers="";

 
$alldetailsto="bhatiamanis@gmail.com,monikahco@gmail.com,".$email.",".$representativeemail;
$system_ip2=@$_SERVER['REMOTE_ADDR'];

$subject=" - Meeting on Lead ".$lead;
$abc="CRMTECH.CO.IN";



$admsg='<table width="351" border="0" cellpadding="0" cellspacing="0" style="width:310px; background-color:#ffffff; border:1px solid #cccccc; font-family:Arial, Helvetica, sans-serif; font-size:12px; float:left; overflow:hidden;">
<tr>
<td valign="middle" colspan="2" height="45" style="border-right:1px solid #cccccc; font-size:12px; font-weight:bold; text-align:center;" width="55%">MEETING ASSIGN FOR LEAD '. $lead.' </td>
</tr>
<tr>
<td colspan="2" style="border-top:1px solid #cccccc;">
<table width="100%" border="0" cellspacing="0" cellpadding="0" style=" font-family:Arial, Helvetica, sans-serif; font-size:12px;">
<tr style="background-color:#f0f0f0;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;" width="44%">Project Name</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;" width="4%">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;" width="52%">'.$project.'</td>
</tr>
<tr style="background-color:#ffffff;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">Client Name</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">'.$name.'</td>
</tr>
<tr style="background-color:#f0f0f0;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">Client Number</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">&nbsp;'.$phone.'</td>
</tr>
<tr style="background-color:#ffffff;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">Meeting Place</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">'.$meetingplace.'</td>
</tr>

<tr style="background-color:#f0f0f0;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">Timings</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">&nbsp;'.$timing.'</td>
</tr>

<tr style="background-color:#ffffff;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">Lead Of</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">'.$user.' '.$lastname.'</td>
</tr>

<tr style="background-color:#f0f0f0;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">Representative</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">&nbsp;'.$representative.'</td>
</tr>

<tr style="background-color:#ffffff;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">status</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">&nbsp;'.$status.'</td>
</tr>


<tr style="background-color:#f0f0f0;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">Executive Response</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">'.$response.' %</td>
</tr>


</table>
</td>
</tr>
</table>'; 


$body=$admsg."<br/>";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: ".$abc."<noreply@crmtect.co.in>" . "\r\n";
$x1=@mail($alldetailsto,$subject,$body,$headers);
}

public function sendDiscrepencyMail($id,$projectname,$name,$email,$contact,$reminder_date,$username,$useremail,$comment,$remarks,$tldata) 
 {

$alldetailsto="";
$subject="";
$abc="";
$admsg='';
$body="";
$headers="";

$alldetailsto="kapilhoney@gmail.com,bhatiamanis@gmail.com,monika.hco@gmail.com,".$useremail;
if(!empty($tldata) and $tldata[0]['users']['email']!='' and $tldata[0]['users']['email']!='demo@demo.com') { $alldetailsto.=','.$tldata[0]['users']['email'];}
$system_ip2=@$_SERVER['REMOTE_ADDR'];

$abc="CRMTECH.CO.IN";
$admsg='<table align="center"><tr><td>
<table border="0" cellpadding="0" cellspacing="0" style="width:371px; background-color:#ffffff; border:1px solid #cccccc; font-family:Arial, Helvetica, sans-serif; font-size:12px;">
<tr>
<td valign="middle" colspan="2" height="45" style="border-right:1px solid #cccccc; font-size:12px; font-weight:bold; text-align:center;" width="55%">DISCREPANCY FOR LEAD '. $id.'</td>
</tr>
<tr>
<td colspan="2" style="border-top:1px solid #cccccc;">
<table width="100%" border="0" cellspacing="0" cellpadding="0" style=" font-family:Arial, Helvetica, sans-serif; font-size:12px;">
<tr style="background-color:#f0f0f0;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;" width="44%">Project Name</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;" width="4%">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;" width="52%">'.$projectname.'</td>
</tr>
<tr style="background-color:#ffffff;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">Client Name</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">'.$name.'</td>
</tr>
<tr style="background-color:#f0f0f0;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">Client Number</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">&nbsp;'.$contact.'</td>
</tr>

<tr style="background-color:#ffffff;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">Client Email</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">'.$email.'</td>
</tr>

<tr style="background-color:#f0f0f0;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">Lead Of</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">'.$id.'</td>
</tr>';

if(!empty($tldata)) {
$admsg.='<tr style="background-color:#ffffff;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">TL</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">&nbsp;'.$tldata[0]['users']['name'].'</td>
</tr>';
}

$admsg.='<tr style="background-color:#f0f0f0;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">DISCREPANCY</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">'.$comment.'</td>
</tr>
</table>
</td>
</tr>
</table></td>
<td valign="top"><table border="0" cellpadding="0" cellspacing="0" style="width:531px; background-color:#ffffff; border:1px solid #cccccc; font-family:Arial, Helvetica, sans-serif; font-size:12px; vertical-align:top;">
<tr>
<td valign="middle" colspan="2" height="45" style="border-right:1px solid #cccccc; font-size:12px; font-weight:bold; text-align:center;" width="55%">LAST 3 REMARKS</td>
</tr>
<tr>
<td colspan="2" style="border-top:1px solid #cccccc;">
<table width="100%" border="0" cellspacing="0" cellpadding="0" style=" font-family:Arial, Helvetica, sans-serif; font-size:12px;">
<tr style="background-color:#f0f0f0;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;" width="44%">REMARK</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;" width="4%">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;" width="52%">POSTED DATE</td>
</tr>';
 if(!empty($remarks)) { foreach($remarks as $data) {
$admsg.='<tr style="background-color:#ffffff;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">'.$data['remarks']['name'].'</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">'.$data['remarks']['posted_date'].'</td>
</tr>';
} }

$admsg.='
<tr style="background-color:#f0f0f0;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;" width="44%">REMINDER DATE</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;" width="4%">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;" width="52%">'.$reminder_date.'</td>
</tr>

</table>
</td>
</tr>
</table></td></tr></table>';
$subject="DISCREPANCY FOR LEAD";
$body=$admsg."<br/>";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: ".$abc."<noreply@crmtect.co.in>" . "\r\n";
$x1=@mail($alldetailsto,$subject,$body,$headers);

 }

public function sendUserCreationMail($username,$password,$name,$lastname,$email,$group) 
 {
$alldetailsto="";
$subject="";
$abc="";
$admsg='';
$body="";
$headers="";

 
$alldetailsto="bhatiamanis@gmail.com";
$system_ip2=@$_SERVER['REMOTE_ADDR'];
$subject=" - New User Details ";
$abc="CRMTECH.CO.IN";



$admsg='<table width="351" border="0" cellpadding="0" cellspacing="0" style="width:310px; background-color:#ffffff; border:1px solid #cccccc; font-family:Arial, Helvetica, sans-serif; font-size:12px; float:left; overflow:hidden;">
<tr>
<td colspan="2" style="border-top:1px solid #cccccc;">
<table width="100%" border="0" cellspacing="0" cellpadding="0" style=" font-family:Arial, Helvetica, sans-serif; font-size:12px;">
<tr style="background-color:#f0f0f0;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;" width="44%">User Name</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;" width="4%">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;" width="52%">'.$username.'</td>
</tr>
<tr style="background-color:#ffffff;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">Password</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">'.$password.'</td>
</tr>
<tr style="background-color:#f0f0f0;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">Name</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">&nbsp;'.$name.'</td>
</tr>
<tr style="background-color:#ffffff;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">Last Name</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">'.$lastname.'</td>
</tr>

<tr style="background-color:#f0f0f0;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">Email</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">&nbsp;'.$email.'</td>
</tr>

<tr style="background-color:#ffffff;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">Group Name</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">'.$group.'( Group )</td>
</tr>

<tr style="background-color:#f0f0f0;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">Created On</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">&nbsp;'.date("l jS \of F Y h:i:s A").'</td>
</tr>

</table>
</td>
</tr>
</table>'; 


$body=$admsg."<br/>";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: ".$abc."<noreply@crmtect.co.in>" . "\r\n";
$x1=@mail($alldetailsto,$subject,$body,$headers);
}


public function sendDailyExecutiveReminderMail($username,$message) 
 {
$alldetailsto="";
$subject="";
$abc="";
$admsg='';
$body="";
$headers="";

$alldetailsto=$username;
$subject="CRM EXECUTIVE REMINDERS (".date("Y M d").")";
$abc="CRMTECH.CO.IN";

$body=$message."<br/>";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: CRM EXECUTIVE REMINDERS <crmtech.co.in(CRM)>" . "\r\n";
$x1=@mail($alldetailsto,$subject,$body,$headers);
}

    public function sendDailyReminderMail($message){
        $alldetailsto="";
        $subject="";
        $abc="";
        $admsg='';
        $body="";
        $headers="";
        
        //$alldetailsto=$username;
        $subject="CRM EXECUTIVE REMINDERS (".date("Y M d").")";
        $abc="CRMTECH.CO.IN";
        
        $body=$message."<br/>";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: CRM EXECUTIVE REMINDERS <crmtech.co.in(CRM)>" . "\r\n";
        $x1=@mail('bhatiamanis@gmail.com',$subject,$body,$headers);
    }


    public function sendSubscriptionMail($emails,$websites){
        $alldetailsto="";
        $subject="";
        $abc="";
        $admsg='';
        $body="";
        $headers="";
        print_r($emails);
        print_r($websites);
        foreach($emails as $key=>$value){
            $token=md5($value);	
            $message='<table style="width:600px;background-color:#e5e5e5;margin:0 auto;padding:0px">
            <tbody>
            <tr>
            <td style="background:#fff;padding:10px"><img src="http://www.comehomeindia.com/images/logo.jpg" width="180" height="41" alt="Comehomeindia"></td>
            </tr>
            <tr>
            <td style="padding:20px; background-color:#e5e5e5">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color:#ffffff; color:#333333; font-family:Arial, Helvetica, sans-serif; font-size:14px;">
            <tr>
            <td style="padding:10px; background-color:#333333; font-size:15px; color:#ffffff;">Welcome to your subscription of Comehomeindia</td>
            </tr>
            <tr>
            <td style="padding:15px 10px;"><p><strong>Dear Sir/ Madam,</strong>
            </p><p>Greetings:</p><p>This is with reference to  your on line visit on our Portal, having posted your valuable &quot;<strong>Query</strong>&quot;, exhibiting your interest in <strong>'.$websites[$key].'</strong>, for which we express our sincere gratitude.</p>
            <p>Hence, we are sending you an &quot;Option&quot; in this mail to &quot;<strong>click</strong>&quot; as a mark of your &quot;<strong>ACCEPTANCE</strong>&quot; to start receiving such crisp, valuable and important mails /material (s)  from us, which definitely would keep you apprised of the related developments,and ultimately <strong>GUIDE</strong> you the best, in your intended purchase of Property at any given point of time through us.</p>
            <p>Given an opportunity to serve, we shall be glad to assist you in all your Property needs going ahead. </p>
            <p>with best complements and regards</p>
            <p><strong>ComeHomeIndia Team</strong></p></td>
            </tr>
            <tr>
            </tr>
            <tr>
            <td style="padding:15px 10px;">Please Confirm Subscription</td>
            </tr>
            <tr>
            <td style="padding:0px 10px;"><a href="http://www.comehomeindia.com/verification/index.php?token='.$token.'" style="background-color:#333333; padding:7px 10px; font-size:16px; color:#fff; display:inline-block; border-radius:3px; text-decoration:none;">Yes, Subscribe me.</a></td>
            </tr>
            <tr>
            <td style="padding:15px 10px;">If you received this email by mistake, simply delete it. You won\'t be subscribed if you don\'t click the confirmation link above.</td>
            </tr>
            </table>
            </td>
            </tr>
            </tbody></table>';
            
            $subject="Comehome India Updates: Please Confirm Subscription";
            $body=stripslashes($message)."<br/>";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: ComeHomeIndia Team <comehomeindia.com>" . "\r\n";
            $x1=@mail($value,$subject,$body,$headers);	
        }
    }

    public function validatemailid($emailId){
        $key = 'Ra8xfAuZJfOrQgwmrOIJiLMgnk6PUPP2';
        $email = $emailId;
        $timeout = 1;
            
        $fast = 'false';
        $abuse_strictness = 0;
            
        
        $parameters = array(
            'timeout' => $timeout,
            'fast' => $fast,
            'abuse_strictness' => $abuse_strictness
        );    
        
        $formatted_parameters = http_build_query($parameters);
         
        $url = sprintf(
            'https://www.ipqualityscore.com/api/json/email/%s/%s?%s', 
            $key,
            urlencode($email),
            $formatted_parameters
        );
        
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $timeout);
        
        $json = curl_exec($curl);
        curl_close($curl);
        
        $result = json_decode($json, true);
        
        if(isset($result['success']) && $result['success'] === true){
            return $result['valid'];
        }
    }
    
    
    function SendWhatsappmessage(){
        $fields = array(
            "channel" => 'whatsapp',
            "source" => "971565776975",
            "destination" => "919205645124",
            "message" => '{"type":"text","text":"this is test template"}',
            "src.name" => 'DubaiHousing971565776975',
            "disablePreview" => false,
            "encode" => false
        );
        foreach($fields as $key=>$value) { $fields_string .= $key."=".$value."&"; }
        @rtrim($fields_string, "&");
      
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.gupshup.io/sm/api/v1/msg",
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $fields_string,
            CURLOPT_HTTPHEADER => array(
            "Content-Type: application/x-www-form-urlencoded",
            "accept: application/json",
            "apikey: dcalok4rkltoaooe1icqplgqiqmwiew0"
            ),
        ));
        $response = curl_exec($curl);
        
        
        /*$fields = array(
    	"channel" => 'whatsapp',
    	"source" => "918130741809",
    	"destination" => "918299125651",
    	"message" => '{"type":"text","text":"this is test template of hco real estates"}',
    	"src.name" => 'HoneyMoneyAssociatesLTD',
    	"disablePreview" => false,
    	"encode" => false
    	);
    	foreach($fields as $key=>$value) { $fields_string .= $key."=".$value."&"; }
    	@rtrim($fields_string, "&");
    	
    	$curl = curl_init();
    	curl_setopt_array($curl, array(
    		CURLOPT_URL => "https://api.gupshup.io/sm/api/v1/msg",
    		CURLOPT_CUSTOMREQUEST => "POST",
    		CURLOPT_POSTFIELDS => $fields_string,
    		CURLOPT_HTTPHEADER => array(
    		"Content-Type: application/x-www-form-urlencoded",
    		"accept: application/json",
    		"apikey: god9m4yfru3zpaf41w6pfnugumaefj65"
    		),
    	));
	    $response = curl_exec($curl);*/
    }

}
?>