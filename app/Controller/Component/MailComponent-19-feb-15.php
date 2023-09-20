<?php
## function to create thumbnail of size 200,200 of jpeg/png 
class MailComponent extends Component  {


public function sendEnquiryMail($user,$useremail,$name,$email,$phone,$project,$country,$message) 
 {
$alldetailsto="";

$subject="";
$abc="";
$admsg='';
$body="";
$headers="";

 
$alldetailsto="kanhaiya.hcohoney@gmail.com,bhatiamanis@gmail.com,monikahco@gmail.com,".$useremail;
$system_ip2=@$_SERVER['REMOTE_ADDR'];

$subject=" - New Enquiry assign to ".$user;
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
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">'. $user.'</td>
</tr>

<tr style="background-color:#ffffff;">
<td colspan="3" style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">'.$message.'</td>
</tr>

</table>
</td>
</tr>
</table>'; 


$body=$admsg."<br/>";
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "Content-Type: multipart/alternative; charset=ISO-8859-1\r\n";
$headers .="From: $abc<noreply@crmtect.co.in>\r\n" ."X-Mailer: PHP/" . phpversion();
$x1=@mail($alldetailsto,$subject,$body,$headers);
}


public function sendMeetingMail($lead,$project,$user,$email,$name,$phone,$meetingplace,$representative,$representativeemail,$status,$response,$timing) 
 {
$alldetailsto="";

$subject="";
$abc="";
$admsg='';
$body="";
$headers="";

 
$alldetailsto="kanhaiya.hcohoney@gmail.com,bhatiamanis@gmail.com,monikahco@gmail.com,".$email.",".$representativeemail;
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
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">'.$user.'</td>
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
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "Content-Type: multipart/alternative; charset=ISO-8859-1\r\n";
$headers .="From: $abc<noreply@crmtect.co.in>\r\n" ."X-Mailer: PHP/" . phpversion();
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

 
$alldetailsto="kanhaiya.hcohoney@gmail.com,bhatiamanis@gmail.com,".$useremail;
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
</tr>

<tr style="background-color:#f0f0f0;">
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

$body=$admsg."<br/>";
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "Content-Type: multipart/alternative; charset=ISO-8859-1\r\n";
$headers .="From: $abc<noreply@crmtect.co.in>\r\n" ."X-Mailer: PHP/" . phpversion();
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

 
$alldetailsto="kanhaiya.hcohoney@gmail.com,bhatiamanis@gmail.com";
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
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "Content-Type: multipart/alternative; charset=ISO-8859-1\r\n";
$headers .="From: $abc<noreply@crmtect.co.in>\r\n" ."X-Mailer: PHP/" . phpversion();
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
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "Content-Type: multipart/alternative; charset=ISO-8859-1\r\n";
$headers .="From: CRM EXECUTIVE REMINDERS <crmtech.co.in(CRM)>\r\n" ."X-Mailer: PHP/" . phpversion();
$x1=@mail($alldetailsto,$subject,$body,$headers);
}

public function sendDailyReminderMail($message) 
 {
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
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "Content-Type: multipart/alternative; charset=ISO-8859-1\r\n";
$headers .="From: CRM EXECUTIVE REMINDERS <crmtech.co.in(CRM)>\r\n" ."X-Mailer: PHP/" . phpversion();
$x1=@mail('kanhaiya.hcohoney@gmail.com,bhatiamanis@gmail.com',$subject,$body,$headers);
}
 

}
?>