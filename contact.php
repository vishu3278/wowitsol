<?php include('include/header.php');
$subjectPrefix = '[Contact via Site]';
$emailTo = 'info@wowitsolutions.com';
$emailFrom = 'noreply@wowitsolutions.com';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name    = stripslashes(trim($_POST['form_name']));
    $email   = stripslashes(trim($_POST['form_email']));
    $phone   = stripslashes(trim($_POST['form_tel']));
    $company   = stripslashes(trim($_POST['form-company']));
    $company_url = stripslashes(trim($_POST['form-assunto']));
    $message = stripslashes(trim($_POST['form_mensagem']));
    $pattern = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';

    if (preg_match($pattern, $name) || preg_match($pattern, $email) || preg_match($pattern, $subject)) {
        die("Header injection detected");
    }

    $emailIsValid = filter_var($email, FILTER_VALIDATE_EMAIL);
    $site_url = "http://wowitsolutions.com/";
    if($name && $email && $emailIsValid && $message){
        $subject = "$subjectPrefix $name contacts WOW IT Solutions";
		    $subject_user = "You contact WOW IT Solutions ";
      /*  $body = "Name: $name <br /> Email: $email <br /> Telephone: $phone <br /> Message: $message"; */
		
		$body = "<table cellspacing='0' cellpadding='0' border='0' align='center' style='border-collapse: collapse;  margin: 0px auto; width: 600px; background: #fff none repeat scroll 0px 0px; border: 1px solid #ebebeb; border-top:6px solid #db2828;line-height: 18px;'><tbody>
		<tr><td style='vertical-align: top; padding: 10px 0px 10px; margin: 0; text-align: center;'><a  href='".$site_url."'><img  height='58' border='0'  alt='WOW IT Solutions' src='http://wowitsolutions.com/image/emails/WOW-Logo.jpg'></a></td></tr>
		<tr style='font-family: Verdana, Arial; border-collapse: collapse; vertical-align: top; padding: 5px; margin: 0; background: #FFF;    border-top: 4px solid #ebebeb;'> <td style='font-family: Verdana, Arial;font-size:14px; border-collapse: collapse; vertical-align: top; padding: 20px; margin: 0; text-align: left;'> Hi ".ucwords($name).",</td></tr>
		<tr><td style='font-family: Verdana, Arial;padding:0 20px 20px 20px;font-size:14px; border-collapse: collapse; vertical-align: top;  margin: 0; text-align: left;'>  Thanks for contacting WOW IT Solutions.<br/><br/> <b>Your Phone:</b> ".$phone."<br/><br/> <b>Your Email id:</b> ".$email."<br/> <br/> <b>Your url:</b> ".$company_url."<br/><br/><b>Your Company: </b>".$company."<br/><br/>   <b>Your message is:</b><br/> ".$message."  <br/><br/>  <hr/> <span style='font-size:10px;'>Meanwhile, if you need further assistance, feel free to contact WOW IT Solutions at<br/> +91-9599710275 OR email on <a href='mailto:info@wowitsolutions.com'>info@wowitsolutions.com</a>.</span><br/>  </td></tr><tr><td style='vertical-align: top; padding:20px; margin: 0; text-align: center;background:#db2828; color: #fff; '><h5 class='closing-text' style='font-family: Verdana, Arial; text-align: left; font-size: 18px; line-height: 22px; font-weight: normal;    margin: 0;'>We will contact you soon.</h5><p  style='font-family: Verdana, Arial; text-align: left; font-size: 12px; line-height: 26px; font-weight: normal;    margin: 0;'>Team WOW IT Solutions</p>
		<h5 class='closing-text' style='font-family: Verdana, Arial; text-align: center; font-size: 22px; line-height: 32px; font-weight: normal;margin:15px 20px;'>Thank You!</h5></td></tr><tr>
		<td style='vertical-align: top; padding:20px; margin: 0; text-align: center;background:#db2828; color: #fff; '>
    <div style='text-align:left;'><a  href='https://web.facebook.com/wowitsolutions/' target='_blank' style='   margin-right: 7px;    float: left;'><img  height='' border='0'  alt='WOW IT Solutions' src='http://wowitsolutions.com/image/emails/facebook-logo-plus-social-icon.png'></a><a  href='https://plus.google.com/102662441444395753267' target='_blank' style='   margin-right: 7px;    float: left;'><img  height='' border='0'  alt='WOW IT Solutions' src='http://wowitsolutions.com/image/emails/google-logo-plus-social-icon.png'></a><a  href='https://twitter.com/wowitsolutions' target='_blank' style='   margin-right: 7px;    float: left;'><img  height='' border='0'  alt='WOW IT Solutions' src='http://wowitsolutions.com/image/emails/twitter-logo-plus-social-icon.png'></a><span style='float: right;'><a  href='http://wowitsolutions.com/' target='_blank' style=' font-size: 12px;  color: #fff;font-family: Verdana, Arial;'>www.wowitsolutions.com</a></span></div></td></tr>
</tbody>		
</table>";


$body_admin = "<table cellspacing='0' cellpadding='0' border='0' align='center' style='border-collapse: collapse;  margin: 0px auto; width: 600px; background: #fff none repeat scroll 0px 0px; border: 1px solid #ebebeb; border-top:6px solid #db2828;line-height: 18px;'><tbody>
    <tr><td style='vertical-align: top; padding: 10px 0px 10px; margin: 0; text-align: center;'><a  href='".$site_url."'><img  height='58' border='0'  alt='WOW IT Solutions' src='http://wowitsolutions.com/image/emails/WOW-Logo.jpg'></a></td></tr>
    <tr style='font-family: Verdana, Arial; border-collapse: collapse; vertical-align: top; padding: 5px; margin: 0; background: #FFF;    border-top: 4px solid #ebebeb;'> <td style='font-family: Verdana, Arial;font-size:14px; border-collapse: collapse; vertical-align: top; padding: 20px; margin: 0; text-align: left;'> Hi Admin,</td></tr>
    <tr><td style='font-family: Verdana, Arial;padding:0 20px 20px 20px;font-size:14px; border-collapse: collapse; vertical-align: top;  margin: 0; text-align: left;'>".ucwords($name)." contacted WOW IT Solutions.<br/><br/> <b>".ucwords($name)."'s Phone:</b> ".$phone."<br/><br/> <b>".ucwords($name)."'s Email id:</b> ".$email."<br/> <br/> <b>".ucwords($name)."'s url:</b> ".$company_url."<br/><br/><b>".ucwords($name)."'s Company: </b>".$company."<br/><br/>   <b>".ucwords($name)."'s message is:</b><br/> ".$message."  <br/><br/>  <hr/> <span style='font-size:10px;'>Meanwhile, if you need further assistance, feel free to contact WOW IT Solutions at<br/> +91-9599710275 OR email on <a href='mailto:info@wowitsolutions.com'>info@wowitsolutions.com</a>.</span><br/>  </td></tr> 
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
        $headers .= sprintf( 'Reply-To: %s%s', $emailTo, PHP_EOL );
        $headers .= sprintf( 'Message-ID: <%s@%s>%s', md5( uniqid( rand( ), true ) ), $_SERVER[ 'HTTP_HOST' ], PHP_EOL );
        $headers .= sprintf( 'X-Priority: %d%s', 3, PHP_EOL );
        $headers .= sprintf( 'X-Mailer: PHP/%s%s', phpversion( ), PHP_EOL );
        $headers .= sprintf( 'Disposition-Notification-To: %s%s', $emailFrom, PHP_EOL );
        $headers .= sprintf( 'MIME-Version: 1.0%s', PHP_EOL );
        $headers .= sprintf( 'Content-Transfer-Encoding: 8bit%s', PHP_EOL );
        $headers .= sprintf( 'Content-Type: text/html; charset="utf-8"%s', PHP_EOL );

		    mail($email, $subject_user, $body, $headers);

        $headers .= sprintf( 'Reply-To: %s%s', $email, PHP_EOL );        
        mail($emailTo, $subject, $body_admin, $headers);

        // mail($emailTo, "=?utf-8?B?".base64_encode($subject)."?=", $body, $headers);
		    // mail($email, "=?utf-8?B?".base64_encode($subject_user)."?=", $body, $headers);
        $emailSent = true;
    } else {
        $hasError = true;
    }
}
?>

<div class="page-title">
  <div class="ui container">
    <div class="ui grid">
      <div class="ten wide column">
        <h2 class="ui red header">Contact Us</h2>
      </div>
      <div class="six wide right aligned column">
        <ul class="ui small breadcrumb">
          <li>
            <a href="index.php" >Home</a>
          </li>
          <li>
            <span class=" active">Contact Us</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<section class="inner-wrapper">
  <div class="ui container centered stackable grid">
    <div class="eight wide column">
      <h2 class="ui center aligned blue header"> Get in Touch with us
        <div class="sub header">Get immediate assistance for any query you may have regarding WOW. We are available 24x7 to resolve your queries. </div>
      </h2>
    </div>
    
    <div class="ui horizontal divider"><i class="icon at circular"></i></div>
    <h3 class="ui center aligned green header">
      <div class="content">Any questions?</div>
      <div class="sub header">Fill in the fields to </div>
    </h3>
    
    <div class="very relaxed row">
      <!-- <div class="three wide column">
        <div class="ui centered card">
          <div class="image"><img src="image/user.jpg" class="ui image" alt=""></div>
          <div class="center aligned content">
            <h5 class="ui header">Customers</h5>
          </div>
        </div>
        <div class="ui centered card">
          <div class="image"><img src="image/side03.jpg" class="ui image" alt=""></div>
          <div class="center aligned content">
            <h5 class="ui header">Technical Query</h5>
          </div>
        </div>
      </div> -->
      <!-- <div class="ui divider"></div> -->
      <div class="ten wide column">
      	<?php if(!empty($emailSent)): ?>
        <div class="ui icon success message">
            <i class="icon checkmark"></i>
          <p>Your message has been sent successfully.</p>
        </div>
        <?php else: ?>
        <?php if(!empty($hasError)): ?>
        <div class="ui icon error message">
            <i class="icon warning sign"></i>
          <p>There was an error sending , please try again later.</p>
        </div>
        <?php endif; ?>
        <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post" id="contact-form" class="ui form">
          <div class="two fields">
            <div class="field">
              <label>Name</label>
              <input type="text" id="form-name" name="form_name" placeholder="John Doe" required pattern="[A-Za-z]+">
            </div>
            <div class="field">
              <label>Email</label>
              <input type="text" id="form-email" name="form_email" placeholder="john.doe@gmail.com" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"> 
            </div>
          </div>
          <div class="two fields">
            <div class="field">
              <label>Phone</label>
              <input type="text" id="form-tel" name="form_tel" placeholder="+91 88888 88888" required pattern="[789][0-9]{9}">
            </div>
            <div class="field">
              <label>Company</label>
              <input type="text" placeholder="ABC Ltd"  id="form-company" name="form-company">
            </div>
          </div>

         <div class="two fields">
            <div class="field">
            <label>Proof that you are not Robot*</label>
             <input type="text" name="capt_pass" readonly id="capt_pass" style="font-weight:bold; float: left;" >
               <span class="input-group-btn" style="float: right; margin-top: -37px;">
                <button type="button" onClick="randomString();" style="width: 6em; height: 36px;">
                    <i class="refresh icon"></i> 
                </button>
               </span>
            </div>
            <div class="field">
              <label>Enter Captcha Code*</label>
                <input type="text" name="cpass1" id="cpass1" placeholder="Enter Captcha Code" required>
            </div>
          </div>
          <div class="field">
            <label>url</label>
            <input type="url" id="form-assunto" name="form-assunto" placeholder="http://abcltd.com" >
          </div>
          <div class="field">
            <label>Requirement</label>
            <textarea id="form-mensagem" name="form_mensagem" cols="30" rows="2" placeholder="Your requirement" required></textarea>
          </div>
          <input type="submit" id="x" class="ui red button" value="Send" >
        </form>
        <?php endif; ?>
      </div>
    </div>
    
    <div class="ui horizontal divider"><i class="icon marker circular"></i></div>
    <!-- <div class="ui fluid image"><img src="image/map-office-wide.jpg" alt=""></div> -->
    <div class="row">
      <h3 class="ui red header">Our Support Team</h3>
    </div>
      <div class="ui four column row">
        <div class="column">
        <div class="ui basic center aligned segment">
        <div class="ui green circle centered block">
          <h5 class="ui green icon header">
            <a href="mailto:info@wowitsolutions.com"><i class="icon info circle"></i>
            Info</a>
          </h5>
        </div>
        <h6 class="ui header"><a href="mailto:info@wowitsolutions.com">info@wowitsolutions.com</a></h6>
      </div>
      </div>
      <div class="column">
        <div class="ui center aligned basic segment">
        <div class="ui blue circle centered block">
          <h5 class="ui blue icon header">
            <a href="mailto:sales@wowitsolutions.com"><i class="icon pie chart"></i>
            Sales</a>
          </h5>
        </div>
        <h6 class="ui header"><a href="mailto:sales@wowitsolutions.com">sales@wowitsolutions.com</a></h6>
      </div>
      </div>
      <div class="column">
        <div class="ui center aligned basic segment">
        <div class="ui orange circle centered block">
          <h5 class="ui orange icon header">
            <a href="mailto:support@wowitsolutions.com">
              <i class="icon life ring"></i>
              Support</a>
          </h5>
        </div>
        <h6 class="ui header"><a href="mailto:support@wowitsolutions.com">support@wowitsolutions.com</a></h6>
      </div>
      </div>
        
    </div>
	
	<div class="ui four column row">
		 <iframe width="100%" height="500" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ1UVOiB_lDDkRuJqCD02h0T4&key=AIzaSyBrX8tM30sd1fHzEHfmXVwlJIsGXPhw9n4" allowfullscreen></iframe>
	</div>
    
    <!-- <div class="five column very relaxed stackable row">
      <div class="column"></div>
      <div class="column">
        <div class="ui circular secondary segment">
          <h4 class="ui red header">India Office
            <div class="sub header">India </div>
          </h4>
        </div>
      </div>
      
      <div class="ui vertical divider">AND</div>
      <div class="column">
        <div class="ui circular secondary segment">
          <h4 class="ui red header">UK Office
            <div class="sub header">Birmingham, UK</div>
          </h4>
        </div>
      </div>
      <div class="ui vertical divider">AND</div>
      <div class="column">
        <div class="ui circular secondary segment">
          <h5 class="ui red header">USA Office
            <div class="sub header">New Jersey, USA</div>
          </h5>
        </div>
      </div>
      <div class="column"></div>
    </div> -->

  </div>
</section>

<script type="text/javascript" >
function randomString() {
  var chars = "123456789ABCDEFGHIJKLMNPQRSTUVWXTZ";
  var string_length = 4;
  var randomstring = '';
  for (var i=0; i<string_length; i++)
   {
    var rnum = Math.floor(Math.random() * chars.length);
    randomstring += chars.substring(rnum,rnum+1);
  }
  document.getElementById('capt_pass').value = randomstring;
}
 $(document).ready(function () {
    $("#contact-form").form({
     inline:true,
       fields: {
        form_name: {
              identifier: 'form_name',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your name'
                }
              ]
            },
       form_email: {
              identifier: 'form_email',
              rules: [
                {
                  type   : 'email',
                  prompt : 'You must enter valid email address.'
                }
              ]
            },
        form_tel: {
              identifier: 'form_tel',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter valid mobile number.'
                }
              ]
            },
        form_mensagem: {
              identifier: 'form_mensagem',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please fill required field.'
                }
              ]
            },
        capt_pass: {
         identifier: 'capt_pass',
         rules: [
           {            
             type   : 'minLength[4]',
             prompt : 'Captcha must be at least {ruleValue} characters'
           }
         ]
       },
      
      cpass1: {
       identifier: 'cpass1',
       rules: [
       {
           type   : 'empty',
           prompt : 'Please enter a Captcha'
         },
         {
           type   : 'match[capt_pass]',
           prompt : 'Please enter a valid Captcha'
         }
       ]
     }
           
   }
  });
    $("#x").on('click',function (e) {
      if ($("#contact-form").form('is valid')) {
        $("#contact-form").trigger('submit');
      }
    });
    
  randomString();

});

</script>

 
<?php include('include/footer.php') ?>
