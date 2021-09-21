<?php include('include/header.php');
$subjectPrefix = 'Quote Request via site';
$emailTo = 'info@wowitsolutions.com';
$emailFrom = 'noreply@wowitsolutions.com';

/*$output['type'] = 'error';
$output['text'] = '';*/
$hasError = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name    = stripslashes(trim($_POST['name']));
    $email   = stripslashes(trim($_POST['email']));
    $phone   = stripslashes(trim($_POST['phone']));
    $type = stripslashes(trim($_POST['type']));
    $message = stripslashes(trim($_POST['message']));

    /*if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
       
        $output = json_encode(array( //create JSON data
            'type'=>'error',
            'text' => 'Sorry Request must be Ajax POST'
        ));
        die($output); //exit script outputting json data
    }*/

    //$emailIsValid = filter_var($email, FILTER_VALIDATE_EMAIL);
	$site_url = "http://wowitsolutions.com/";
    if($name && $email && $type && $message){
        $subject = "$name send $subjectPrefix for $type requirement";
		 $subject_user = "Your inquiry for $type requirement to WOW IT Solutions";
        /* $body = "<dl><dt>Name:</dt><dd>$name</dd><dt>Email:</dt><dd>$email</dd><dt>Telephone:</dt><dd>$phone<dd><dt>Type:</dt><dd>$type </dd><dt>Message:</dt><dd>$message</dd><dl>";*/
		$body = "<table cellspacing='0' cellpadding='0' border='0' align='center' style='border-collapse: collapse;  margin: 0px auto; width: 600px; background: #fff none repeat scroll 0px 0px; border: 1px solid #ebebeb; border-top:6px solid #db2828;line-height: 18px;'><tbody>
		<tr><td style='vertical-align: top; padding: 10px 0px 10px; margin: 0; text-align: center;'><a  href='".$site_url."'><img  height='58' border='0'  alt='WOW IT Solutions' src='http://wowitsolutions.com/image/emails/WOW-Logo.jpg'></a></td></tr>
		<tr style='font-family: Verdana, Arial; border-collapse: collapse; vertical-align: top; padding: 5px; margin: 0; background: #FFF;    border-top: 4px solid #ebebeb;'> <td style='font-family: Verdana, Arial;font-size:14px; border-collapse: collapse; vertical-align: top; padding: 20px; margin: 0; text-align: center;'> Hi ".ucwords($name).",</td></tr>
		<tr><td style='font-family: Verdana, Arial;padding:0 20px 20px 20px;font-size:14px; border-collapse: collapse; vertical-align: top;  margin: 0; text-align: left;'>  Thanks for contacting WOW IT Solutions.<br/><br/> <b>Your Phone:</b> ".$phone."<br/> <b>Your Requirement: </b>".$type."<br/><br/>   <b>Your message is:</b><br/> ".$message."  <br/><br/>  <hr/> <span style='font-size:10px;'>Meanwhile, if you need further assistance, feel free to contact WOW IT Solutions at<br/> +91-9599710275 OR email on <a href='mailto:info@giveclass.com'>info@wowitsolutions.com</a>.</span><br/>  </td></tr> 
		<tr>
		<td style='vertical-align: top; padding:20px; margin: 0; text-align: center;background:#db2828; color: #fff; '><h5 class='closing-text' style='font-family: Verdana, Arial; text-align: left; font-size: 18px; line-height: 22px; font-weight: normal;    margin: 0;'>We will contact you soon.</h5>
		<p  style='font-family: Verdana, Arial; text-align: left; font-size: 12px; line-height: 26px; font-weight: normal;    margin: 0;'>Team WOW IT Solutions</p>
		<h5 class='closing-text' style='font-family: Verdana, Arial; text-align: center; font-size: 22px; line-height: 32px; font-weight: normal;margin:15px 20px;'>Thank You!</h5></td>
		</tr>
		<tr>
		<td style='vertical-align: top; padding:20px; margin: 0; text-align: center;background:#db2828; color: #fff; '>
		<div style='text-align:left;'><a  href='https://web.facebook.com/wowitsolutions/' target='_blank' style='   margin-right: 7px;    float: left;'><img  height='' border='0'  alt='WOW IT Solutions' src='http://wowitsolutions.com/image/emails/facebook-logo-plus-social-icon.png'></a><a  href='https://plus.google.com/102662441444395753267' target='_blank' style='   margin-right: 7px;    float: left;'><img  height='' border='0'  alt='WOW IT Solutions' src='http://wowitsolutions.com/image/emails/google-logo-plus-social-icon.png'></a><a  href='https://twitter.com/wowitsolutions' target='_blank' style='   margin-right: 7px;    float: left;'><img  height='' border='0'  alt='WOW IT Solutions' src='http://wowitsolutions.com/image/emails/twitter-logo-plus-social-icon.png'></a><span style='float: right;'><a  href='http://wowitsolutions.com/' target='_blank' style=' font-size: 12px;  color: #fff;font-family: Verdana, Arial;'>www.wowitsolutions.com</a></span></div></td></tr>
</tbody>		
</table>";

$body_admin = "<table cellspacing='0' cellpadding='0' border='0' align='center' style='border-collapse: collapse;  margin: 0px auto; width: 600px; background: #fff none repeat scroll 0px 0px; border: 1px solid #ebebeb; border-top:6px solid #db2828;line-height: 18px;'><tbody>
    <tr><td style='vertical-align: top; padding: 10px 0px 10px; margin: 0; text-align: center;'><a  href='".$site_url."'><img  height='58' border='0'  alt='WOW IT Solutions' src='http://wowitsolutions.com/image/emails/WOW-Logo.jpg'></a></td></tr>
    <tr style='font-family: Verdana, Arial; border-collapse: collapse; vertical-align: top; padding: 5px; margin: 0; background: #FFF;    border-top: 4px solid #ebebeb;'> <td style='font-family: Verdana, Arial;font-size:14px; border-collapse: collapse; vertical-align: top; padding: 20px; margin: 0; text-align: left;'> Hi Admin,</td></tr>
    <tr><td style='font-family: Verdana, Arial;padding:0 20px 20px 20px;font-size:14px; border-collapse: collapse; vertical-align: top;  margin: 0; text-align: left;'>".ucwords($name)." contacted WOW IT Solutions.<br/><br/> <b>".ucwords($name)."'s Phone:</b> ".$phone."<br/><br/> <b>".ucwords($name)."'s Email id:</b> ".$email."<br/> <br/> <b>".ucwords($name)."'s url:</b> ".$company_url."<br/><br/><b>Your Requirement: </b>".$type."<br/><br/>   <b>".ucwords($name)."'s message is:</b><br/> ".$message."  <br/><br/>  <hr/> <span style='font-size:10px;'>Meanwhile, if you need further assistance, feel free to contact WOW IT Solutions at<br/> +91-9599710275 OR email on <a href='mailto:info@wowitsolutions.com'>info@wowitsolutions.com</a>.</span><br/>  </td></tr> 
    <tr>
    <td style='vertical-align: top; padding:20px; margin: 0; text-align: center;background:#db2828; color: #fff; '><h5 class='closing-text' style='font-family: Verdana, Arial; text-align: left; font-size: 18px; line-height: 22px; font-weight: normal;    margin: 0;'>We will contact you soon.</h5>
    <p  style='font-family: Verdana, Arial; text-align: left; font-size: 12px; line-height: 26px; font-weight: normal;    margin: 0;'>Team WOW IT Solutions</p>
    <h5 class='closing-text' style='font-family: Verdana, Arial; text-align: center; font-size: 22px; line-height: 32px; font-weight: normal;margin:15px 20px;'>Thank You!</h5></td>
    </tr>
    <tr>
    <td style='vertical-align: top; padding:20px; margin: 0; text-align: center;background:#db2828; color: #fff; '>
    <div style='text-align:left;'><a  href='https://web.facebook.com/wowitsolutions/' target='_blank' style='   margin-right: 7px;    float: left;'><img  height='' border='0'  alt='WOW IT Solutions' src='http://wowitsolutions.com/image/emails/facebook-logo-plus-social-icon.png'></a><a  href='https://plus.google.com/102662441444395753267' target='_blank' style='   margin-right: 7px;    float: left;'><img  height='' border='0'  alt='WOW IT Solutions' src='http://wowitsolutions.com/image/emails/google-logo-plus-social-icon.png'></a><a  href='https://twitter.com/wowitsolutions' target='_blank' style='   margin-right: 7px;    float: left;'><img  height='' border='0'  alt='WOW IT Solutions' src='http://wowitsolutions.com/image/emails/twitter-logo-plus-social-icon.png'></a><span style='float: right;'><a  href='http://wowitsolutions.com/' target='_blank' style=' font-size: 12px;  color: #fff;font-family: Verdana, Arial;'>www.wowitsolutions.com</a></span></div></td></tr>
</tbody>    
</table>";

        $headers .= sprintf( 'Return-Path: %s%s', $emailFrom, PHP_EOL );
        $headers .= sprintf( 'From: %s%s', $emailFrom, PHP_EOL );
        $headers .= sprintf( 'Reply-To: %s%s', $emailFrom, PHP_EOL );
        $headers .= sprintf( 'Message-ID: <%s@%s>%s', md5( uniqid( rand( ), true ) ), $_SERVER[ 'HTTP_HOST' ], PHP_EOL );
        $headers .= sprintf( 'X-Priority: %d%s', 3, PHP_EOL );
        $headers .= sprintf( 'X-Mailer: PHP/%s%s', phpversion( ), PHP_EOL );
        $headers .= sprintf( 'Disposition-Notification-To: %s%s', $emailFrom, PHP_EOL );
        $headers .= sprintf( 'MIME-Version: 1.0%s', PHP_EOL );
        $headers .= sprintf( 'Content-Transfer-Encoding: 8bit%s', PHP_EOL );
        $headers .= sprintf( 'Content-Type: text/html; charset="utf-8"%s', PHP_EOL );

        $emailSent = mail($emailTo, $subject, $body, $headers);

        $headers .= sprintf( 'Reply-To: %s%s', $email, PHP_EOL );        
        mail($emailTo, $subject, $body_admin, $headers);
        
        if($emailSent)
        {
			$emailSent = mail($email, $subject_user, $body, $headers);
            $hasError = false;
        }else{
            $hasError = true;
        }
    } else {
        $hasError = true;
    }
}else{
    $hasError = true;
}
?>

<div class="inner-wrapper">
  <div class="ui container">
    <?php if($emailSent==true): ?>
        <div class="ui stackable two column padded grid">
            <div class="column">
                <div class="ui icon success message">
                    <i class="icon checkmark"></i>
                    <p>Your message has been sent successfully.</p>
                </div>
            </div>
            <div class="column">
                <div class="ui padded green segment">
                    <h2 class="ui green header">Thankyou! <div class="sub header">We will contact you soon</div></h2>
                    <p>Go back to <a href="http://wowitsolutions.com">Home page</a> or you will be redirected to homepage in 5 seconds.</p>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            var count = setTimeout(function(){
                window.location="http://wowitsolutions.com";
            },5000);
        </script
    <?php else: ?>
    <?php if($hasError!=''): ?>
        <div class="ui stackable two column padded grid">
            <div class="column">
                <div class="ui segment">
                    <h2 class="ui red header">Error! <div class="sub header">There was an error.</div></h2>
                    <p>Go back to <a href="http://wowitsolutions.com">Home page</a>
                </div>
            </div>

            <div class="column">
                <div class="ui icon error message">
            	    <i class="icon warning sign"></i>
                    <p>There was an error sending your message, please try again later.</p>
                </div>
                <ul>
                    <li><?php echo $name ?></li>
                    <li><?php echo $email ?></li>
                    <li><?php echo $phone ?></li>
                    <li><?php echo $type ?></li>
                    <li><?php echo $message ?></li>
                </ul>
            </div>
        </div>
    <?php endif; ?>
    
    <?php endif; ?>
  </div>
</div>
<?php include('include/footer.php'); ?>
