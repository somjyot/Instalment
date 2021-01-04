

<?php
//post
$url="https://www.way2sms.com/api/v1/sendCampaign";
$curl = curl_init();
$fname=$_POST['id_first_name'];
$lname=$_POST['id_last_name'];
$phone=$_POST['id_phone'];
$product=$_POST['product'];
$price=$_POST['id_price'];
$fdate=$_POST['fdate'];
$sdate=$_POST['sdate'];
$fprice=$_POST['fprice'];
$sprice=$_POST['sprice'];
$message = urlencode("Hi ".$fname." your first installment price ".$fprice);// urlencode your message

// $message = "Hi "+$fname+" your first installment price "+$fprice+"needs to pay on "+$fdate+" second installment price"+$sprice+"needs to pay on "+$fdate;
echo $message;
curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=[NFXIE4XVGTV1XVWH7788JHPB38X0MNNU]&secret=[6EM2IYZOS1Z7V488]&usetype=[stage]&phone=[to-mobile]&senderid=[active-sender-id]&message=[$message]");// post data
// query parameter values must be given without squarebrackets.
//  Optional Authentication:
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
echo $result;
?>