<?php include_once('include/header.php'); ?>

<?php 

						    echo $subject="Hello";
						
						
						    echo $admin_email = 'wowproductdemo@gmail.com';				
						    echo $admin_password = "productdemo@wow";
						    echo $from_mail = "wowproductdemo@gmail.com";

						    echo $message = "Hi Admin" ;

							echo include('phpmailer/class.smtp.php');

							echo $mail = new PHPMailer();
							echo $mail->IsSMTP();
							echo $mail->CharSet = 'UTF-8';
							echo $mail->Host = "smtp.gmail.com";
							echo $mail->SMTPAuth = true;
							echo $mail->Port = 587; // Or 587
							echo $mail->Username = $admin_email;
							echo $mail->Password = $admin_password;
							echo $mail->SMTPSecure = 'tls';
							echo $mail->SetFrom($from_mail);

							// $mail->FromName= $from_name;

							echo $mail->isHTML(true);
							echo $mail->Subject = $subject;
							echo $mail->Body = $message;
							echo $mail->addAddress('saru87rawat@gmail.com');
							
							if (!$mail->send())
								{
									echo $_SESSION['error'] = 'Email could not send';
								}
							  else
								{
									echo $_SESSION['success'] = 'Mail send successfully!';
								}

								?>
<?php include_once('include/footer.php'); ?>