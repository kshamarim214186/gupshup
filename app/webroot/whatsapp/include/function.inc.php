<?php
function country_fetch($conn, $cid_val){
    $sql = mysqli_fetch_array(mysqli_query($conn, "select con_name from gs_country where con_id='$cid_val'"));
    return $sql['con_name'];
}

function GetLatestVersion($conn,$table){
    $sql = mysqli_fetch_array(mysqli_query($conn, "SELECT id,next_executive_id from ".$table." where next_executive_id!='' order by id DESC limit 1"));
    return $sql['next_executive_id'];
}

function getCurrentExecutive($conn, $priority,$table){
    $sql = mysqli_fetch_array(mysqli_query($conn, "SELECT * from ".$table." where priority='" . $priority . "'"));
    return $sql;
}

function sendMail($name, $email, $project, $country_name, $query, $contact, $project_person = false, $current_executive_number = false, $current_executive_name = false, $domain = false){

    $pr_enquiry_email_id = "enquiry@hcorealestates.com";
    //$pr_enquiry_email_id = "kshama.hco@gmail.com";
    $system_ip2 = $_SERVER['REMOTE_ADDR'];
    
    $subject = "Facebook Enquiry ".$project;
    $abc = $project;

    $admsg = '<table width="331" border="0" cellpadding="0" cellspacing="0" style="width:310px; background-color:#ffffff; border:1px solid #cccccc; font-family:Arial, Helvetica, sans-serif; font-size:12px; float:left; overflow:hidden;">
    <tr>
    <td valign="middle" colspan="2" height="45" style="border-right:1px solid #cccccc; font-size:12px; font-weight:bold; text-align:center;" width="55%"></td>
    
    </tr>
    <tr>
    <td colspan="2" style="border-top:1px solid #cccccc;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" style=" font-family:Arial, Helvetica, sans-serif; font-size:12px;">
    <tr style="background-color:#f0f0f0;">
    <td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;" width="18%">Name</td>
    <td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;" width="3%">:</td>
    <td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;" width="79%">' . $name . '</td>
    </tr>
    <tr style="background-color:#ffffff;">
    <td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">Email</td>
    <td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
    <td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">' . $email . '</td>
    </tr>
    <tr style="background-color:#f0f0f0;">
    <td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">Phone</td>
    <td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
    <td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">&nbsp;' . $contact . '</td>
    </tr>
    <tr style="background-color:#ffffff;">
    <td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">Country</td>
    <td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
    <td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">' . $country_name . '</td>
    </tr>
    <tr style="background-color:#f0f0f0;">
    <td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;"><span class="resale_1">Project</span></td>
    <td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
    <td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">' . $project . '</td>
    </tr>';
    if ($current_executive_name) {
        $admsg .= '<tr style="background-color:#ffffff;">
        <td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;"><span class="resale_1">Executive Name</span></td>
        <td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
        <td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">' . $current_executive_name . '</td>
        </tr>';
    }
    
    $admsg .= '<tr style="background-color:#f0f0f0;">
    <td colspan="3" style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">' . $query . '</td>
    </tr>
    </table>
    </td>
    </tr>
    </table>';
    $to = $pr_enquiry_email_id;
    $body = $admsg . "<br/>";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: " . $abc . "<".$domain.">" . "\r\n";
    $x1 = mail($to, $subject, $body, $headers);
    return true;
}

function sendSms($phone, $msg, $debug = false, $templateId = false)
{
  $user = "Ipdcom103264";
  $password = "11403";
  $senderid = "IPDCOM";
  $smsurl = "https://www.kit19.com/ComposeSMS.aspx?";

  $url = 'username=' . $user;
  $url .= '&password=' . $password;
  $url .= '&sender=' . $senderid;
  $url .= '&to=' . urlencode($phone);
  $url .= '&message=' . urlencode($msg);
  $url .= '&priority=1';
  $url .= '&dnd=1';
  $url .= '&unicode=0';
  $url .= '&dlttemplateid=' . $templateId;


  $urltouse =  $smsurl . $url;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $urltouse);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $response = curl_exec($ch);
  curl_close($ch);
  return ($response);
}

function InitiateCallToClient($phone, $agent_number, $clinumber)
{

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://kpi.knowlarity.com/Basic/v1/account/call/makecall",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\n\"k_number\": \"+916366438006\",\n\"agent_number\": \"+91" . $agent_number . "\",\n\"customer_number\": \"" . $phone . "\"\n,\n\"caller_id\": \"+91" . $clinumber . "\"\n}",
    CURLOPT_HTTPHEADER => array(
      "authorization: 49f28f3a-23b2-4fb3-ae29-c1ec92148442",
      "cache-control: no-cache",
      "content-type: application/json",
      "postman-token: 15a76791-035d-a074-ff9d-5f72ef9e8b80",
      "x-api-key: 8bTsn1VP9k6cve2jKV8qU5VUQkPjLlsa6cmUgT7D"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
    return "cURL Error #:" . $err;
  } else {
    return $response;
  }
}



function sendToRemoteServer($website, $project_name = null, $client, $phone, $email, $country = null, $message = null, $utm_source = null, $device = null)
{

  $url = 'https://crmtech.co.in/data-via-remote-server/data-via-remote-server.php';
  $fields = array(
    'website' => $website,
    'project_name' => $project_name,
    'client' => $client,
    'phone' => $phone,
    'email' => $email,
    'country' => $country,
    'message' => $message,
    'source_link' => $device,
    'utm_source' => $utm_source
  );
  $fields_string = '';
  foreach ($fields as $key => $value) {
    $fields_string .= $key . '=' . $value . '&';
  }
  @rtrim($fields_string, '&');
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, count($fields));
  curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
  $result = curl_exec($ch);
  if ($result == 2) {
    curl_close($ch);
    return true;
  } else {
    curl_close($ch);
    return false;
  }
}

?>